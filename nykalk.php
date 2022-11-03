<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nykalk.css">
</head>
<body>
    <div class="topnav"></div>
    <form action="" method="post">
        <label for="lokasjon">Lokasjon</label>
        <select name="lokasjon" id="lokasjon">
            <option value="95">Hønefoss</option>
            <option value="100">Dokka</option>
            <option value="80">Askim</option>
            <option value="110">Nannestad</option>
        </select>
        <label for="distanse">Kjørelengde i meter</label>
        <input type="text" name="distanse" class="distanse">
        <label for="m3">m3/daa</label>
        <select name="m3" id="m3">
            <option value="0">0</option>
            <option value="2">15-20 m3/daa</option>
            <option value="7">10-15 m3/daa</option>
            <option value="12">5-10 m3/daa</option>
            <option value="18">Inntill 5 m3/daa</option>
        </select>
        <label for="overflate">Overflate</label>
        <select name="overflate" id="overflate">
            <option value="0">Ingen</option>
            <option value="4">Stein</option>
            <option value="5">Blokk</option>
            <option value="10">Snø</option>
        </select>
        <label for="velteplass">Velteplass</label>
        <select name="velteplass" id="velteplass">
            <option value="3">Ensidig</option>
            <option value="0">Tosidig</option>
        </select>
        <label for="underskog">Underskog</label>
        <select name="" id="">
            <option value="0">0</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
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
            <option value="10">10-20% volum tillegg</option>
            <option value="20">20-30% volum tillegg</option>
        </select>
        <label for="annet">Annet:</label>
        <input type="text" name="annet">

        <input type="submit" value="Regn ut">
    </form>
    <?php 
        $lokasjon = $_REQUEST['lokasjon'];
        $distanse = ($_REQUEST['distanse'] * 5) / 200;
        $m3 = $_REQUEST['m3'];
        $overflate = $_REQUEST['overflate'];
        $velteplass = $_REQUEST['velteplass'];
        $underskog = $_REQUEST['underskog'];
        $antSort = $_REQUEST['antSort'];
        $manuell = $_REQUEST['manuell'];
        $annet = $_REQUEST['annet'];
        
        $tillegg = $distanse + $m3 + $overflate + $velteplass + $underskog + $antSort + $manuell + $annet;
        $driftspris = $lokasjon + $tillegg;
    ?>
    <div class="priser">
        <?php
            echo "Basispris: " . $lokasjon . " | Sum tillegg: " . $tillegg . " | Driftspris: " . $driftspris . "<br><br>";
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
                $tabellpris = $lokasjon + $i*2;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>301-400</th>
        <?php
            for ($i=1; $i <= 7; $i++) { 
                $tabellpris = $lokasjon + $i*5;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>201-300</th>
        <?php
            for ($i=1; $i <= 7; $i++) { 
                $tabellpris = $lokasjon + $i*6;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>171-200</th>
        <?php
            for ($i=1; $i <= 7; $i++) { 
                $tabellpris = $lokasjon + $i*7;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>161-170</th>
        <?php
            for ($i=1; $i <= 7; $i++) { 
                $tabellpris = $lokasjon + $i*8;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>151-160</th>
        <?php
            for ($i=1; $i <= 7; $i++) { 
                $tabellpris = $lokasjon + $i*9;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>141-150</th>
        <?php
            for ($i=1; $i <= 7; $i++) { 
                $tabellpris = $lokasjon + $i*10;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    <tr>
        <th>Under 140</th>
        <?php
            for ($i=1; $i <= 7; $i++) { 
                $tabellpris = $lokasjon + $i*11;
                echo "<td>" . $tabellpris . "</td>";
            }
        ?>
    </tr>
    </table>
    <img src="vikenskog_logo_horisontal.png" alt="vikenSkogLogo">
</body>
</html>