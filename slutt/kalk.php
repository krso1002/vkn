<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vkntest";

$connect = mysqli_connect($servername, $username, $password, $dbname);

$query1 = "SELECT * FROM `steder`";
$query2 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'm3daa' AND stedID = '$sted_id'";
$query3 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'overflate' AND stedID = '$sted_id'";
$query4 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'velteplass' AND stedID = '$sted_id'";
$query5 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'underskog' AND stedID = '$sted_id'";


$result1 = mysqli_query($connect, $query1);
$result2 = mysqli_query($connect, $query2);
$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);
$result5 = mysqli_query($connect, $query5);



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
            <option <?php echo " value='" . $row1[0] . "'"; $sted_id = $_REQUEST['lokasjon'];
            //remember last selected value
            if (isset($sted_id) && $sted_id == $row1[0]) {
                echo " selected='selected'";
            }?>> <?php echo $row1[1]?> </option>
            <?php endwhile; ?>
        </select>
        <label for="distanse">Kjørelengde i meter</label>
        <input type="text" name="distanse" class="distanse" placeholder="<?php $distanse = $_REQUEST['distanse']; echo $distanse;?>">
        <label for="middelstamme">Middelstamme (daa)</label>
        <input type="text" name="middelstamme" class="middelstamme" placeholder="<?php $middelstamme = $_REQUEST['middelstamme']; echo $middelstamme;?>">
        <label for="m3">m3/daa</label>
        <select name="m3" id="m3">
            <option value="0">0</option>
            <?php $query2 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'm3daa' AND stedID = '$sted_id'";
            $result2 = mysqli_query($connect, $query2);
            while($row2 = mysqli_fetch_array($result2)):;?>
            <option value="<?php echo $row2[0] ?>"> <?php echo $row2[2] . " m3/daa";
            if (isset($m3_id) && $m3_id == $row1[0]) {
                echo " selected='selected'";
            }?> <?php echo $row1[1]?> </option>
          <?php endwhile; ?>
        </select>
        <label for="overflate">Overflate</label>
        <select name="overflate" id="overflate">
            <option value="0">Ingen</option>
            <?php $query3 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'overflate' AND stedID = '$sted_id'";
            $result3 = mysqli_query($connect, $query3);
            while($row3 = mysqli_fetch_array($result3)):;?>
                <option value="<?php echo $row3[0] ?>"> <?php echo $row3[2] . " terreng"?> </option>
            <?php endwhile; ?>
        </select>
        <label for="velteplass">Velteplass</label>
        <select name="velteplass" id="velteplass">
            <?php $query4 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'velteplass' AND stedID = '$sted_id'";
            $result4 = mysqli_query($connect, $query4);
            while($row4 = mysqli_fetch_array($result4)):;?>
                <option value="<?php echo $row4[0] ?>"> <?php echo $row4[2]?> </option>
            <?php endwhile; ?>
            <option value="0">Tosidig</option>
        </select>
        <input type="submit" value="Regn ut">
    </form>
    <?php
        //$sted_id = $_REQUEST['lokasjon']; 
        //sql query for å hente pris fra steder tabell
        $query2 = "SELECT `basispris` FROM `steder` WHERE stedID = $sted_id";
        $result2 = mysqli_query($connect, $query2);
        $lokasjonspris = mysqli_fetch_array($result2);
        echo $lokasjonspris[0];
    ?>
</body>
</html>