<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vkntest";

$conn = mysqli_connect($servername, $username, $password, $dbname);
echo "blaze";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Administrator</title>
</head>
<body>
    <div>
        <div class="sted">
            <h2>Dokka</h2>
            <label for="m3">m3/daa:</label>
            <input type="text" name="m3">
            <label for="overflate">Overflate:</label>
            <input type="text" name="overflate">
            <label for="velteplass">Velteplass</label>
            <input type="text" name="velteplass">
            <label for="underskog">Underskog</label>
            <input type="text" name="underskog">
            <label for="sortiment">Antall sortiment:</label>
            <input type="text" name="sortiment">
        </div>
        <form class="leggTil" method="post">
            <h2>Legg til område</h2>
            <label for="sted">Stedsnavn:</label>
            <input type="text" name="sted">
            <label for="pris">Basispris:</label>
            <input type="text" name="pris">
            <input type="submit" value="Legg til">
        </form>

    <button class="oppdater">Oppdater</button>
</body>
<?php

$sted = $_REQUEST['sted'];
$pris = $_REQUEST['pris'];

//add sted and pris to database
$sql = "INSERT INTO steder (stedsnavn, basispris) VALUES ('$sted', '$pris')";
$result = $conn->query($sql);


?>

</html>
