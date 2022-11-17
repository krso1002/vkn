<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vkntest";

$connect = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM `steder`";
$query2 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'm3daa'";
$query3 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'overflate'";
$query4 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'velteplass'";
$query5 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'manuell felling'";
$query6 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'underskog'";

$result1 = mysqli_query($connect, $query);
$result2 = mysqli_query($connect, $query2);
$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);
$result5 = mysqli_query($connect, $query5);
$result6 = mysqli_query($connect, $query6);


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        <label for="lokasjon">Lokasjon</label>
        <select name="lokasjon" id="lokasjon">
          <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="<?php echo $row1[2] ?>"> <?php echo $row1[1]?> </option>
          <?php endwhile; ?>
        </select>
        <label for="distanse">Kjørelengde i meter</label>
        <input type="text" name="distanse" class="distanse" placeholder="<?php $distanse = $_REQUEST['distanse']; echo $distanse;?>">
        <label for="m3">m3/daa</label>
        <select name="m3" id="m3">
            <option value="0">0</option>
            <?php while($row2 = mysqli_fetch_array($result2)):;?>
            <option value="<?php echo $row2[3] ?>"> <?php echo $row2[2]?> </option>
          <?php endwhile; ?>
        </select>
        <label for="overflate">Overflate</label>
        <select name="overflate" id="overflate">
            <option value="0">Ingen</option>
            <?php while($row3 = mysqli_fetch_array($result3)):;?>
                <option value="<?php echo $row3[3] ?>"> <?php echo $row3[2]?> </option>
            <?php endwhile; ?>
        </select>
        <label for="velteplass">Velteplass</label>
        <select name="velteplass" id="velteplass">
        <?php while($row4 = mysqli_fetch_array($result4)):;?>
            <option value="<?php echo $row4[3] ?>"> <?php echo $row4[2]?> </option>
          <?php endwhile; ?>
            <option value="0">Tosidig</option>
        </select>
        <label for="underskog">Underskog</label>
        <select name="underskog" id="">
            <option value="0">0</option>
            <?php while($row6 = mysqli_fetch_array($result6)):;?>
            <option value="<?php echo $row6[3] ?>"> <?php echo $row6[2]?> </option>
          <?php endwhile; ?>
        </select>
        <label for="antSort">Antall sortiment</label>
        <select name="antSort" id="">
            <option value="0">0</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
        <label for="manuell">Manuell felling:</label>
        <select name="manuell" id="manuell">
            <option value="0">0</option>
            <?php while($row5 = mysqli_fetch_array($result5)):;?>
            <option value="<?php echo $row5[3] ?>"> <?php echo $row5[2]?> </option>
          <?php endwhile; ?>
        </select>
        <label for="annet">Annet:</label>
        <input type="text" name="annet" placeholder="<?php $annet = $_REQUEST['annet']; echo $annet;?>">

        <input type="submit" value="Regn ut">
    </form>
    <p>balle</p>
    <?php
        $lokasjon = $_REQUEST['lokasjon'];
        //check if $distanse has integer value
        if (is_numeric($_REQUEST['distanse'])) {
            $distanse = $_REQUEST['distanse'];
            $distansepris = ($_REQUEST['distanse'] * 5) / 200;
        } else {
            $distanse = 0;
            $distansepris = 0;
        }
        //$distanse = ($_REQUEST['distanse'] * 5) / 200;
        $m3 = $_REQUEST['m3'];
        $overflate = $_REQUEST['overflate'];
        $velteplass = $_REQUEST['velteplass'];
        $underskog = $_REQUEST['underskog'];
        $antSort = $_REQUEST['antSort'];
        $manuell = $_REQUEST['manuell'];
        if (is_numeric($_REQUEST['annet'])) {
            $annet = $_REQUEST['annet'];
        } else {
            $annet = 0;
        }
        //$annet = $_REQUEST['annet'];

        $tillegg = $distansepris + $m3 + $overflate + $velteplass + $underskog + $antSort + $manuell + $annet;
        $driftspris = $lokasjon + $tillegg;
    ?>
    <div class="priser">
        <?php
            echo "Basispris: $lokasjon | Sum tillegg: $tillegg | Driftspris: $driftspris <br><br>";
        ?>
    </div>
    <h2 style="text-align: center;">Kjørelengde i meter</h2>
    <table>

    <tr>
        <th>Middelstamme dm3</th>
        <th>Under 300</th>
        <th>300-400</th>
        <th>401-500</th>
        <th>501-600</th>
        <th>601-700</th>
        <th>701-800</th>
        <th>801-900</th>
    </tr>
    <tr>
        <th>>400</th>
        <?php
            for ($i=0; $i <= 6; $i++) {
                $tabellpris = $driftspris + $i*2;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>301-400</th>
        <?php
            for ($i=1; $i <= 7; $i++) {
                $tabellpris = $driftspris + $i*5;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>201-300</th>
        <?php
            for ($i=1; $i <= 7; $i++) {
                $tabellpris = $driftspris + $i*6;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>171-200</th>
        <?php
            for ($i=1; $i <= 7; $i++) {
                $tabellpris = $driftspris + $i*7;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>161-170</th>
        <?php
            for ($i=1; $i <= 7; $i++) {
                $tabellpris = $driftspris + $i*8;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>151-160</th>
        <?php
            for ($i=1; $i <= 7; $i++) {
                $tabellpris = $driftspris + $i*9;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>141-150</th>
        <?php
            for ($i=1; $i <= 7; $i++) {
                $tabellpris = $driftspris + $i*10;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>Under 140</th>
        <?php
            for ($i=1; $i <= 7; $i++) {
                $tabellpris = $driftspris + $i*11;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    </table>
    <img src="vikenskog_logo_horisontal.png" alt="vikenSkogLogo">
</body>
</html>
