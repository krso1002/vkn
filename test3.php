<head>
    <link rel="stylesheet" href="test3.css">
    <title>Administrator</title>
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vkntest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM steder";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<div class='sted'><h2>" . $row["stedsnavn"] . "</h2>";
    echo '<form class="leggTil" method="post">
    <label for="15-20">15-20 m3/daa</label>
    <input type="text" name="15-20" placeholder="2">
    <label for="stein">Stein</label>
    <input type="text" name="stein">
    <label for="ensidig">Ensidig velteplass</label>
    <input type="text" name="ensidig">
    <label for="10-20">10-20% volum tillegg</label>
    <input type="text" name="10-20">
    <label for="litt">Litt underskog</label>
    <input type="text" name="litt">
    <input type="submit" value="Oppdater">
    </form>
    <form class="fjern" method="post">
    <input type="submit" value="Fjern">
    </form>
    </div>';

  }
}

$testID = "SELECT `stedID` FROM `steder` WHERE `stedsnavn` = 'Dokka';";
//print $testID
$testID = $conn->query($testID); 
$testID = $testID->fetch_assoc();
$testID = $testID['stedID'];

echo $testID;
echo "<br> halla?";


?>


<form class="leggTil" method="post">
    <h2>Legg til område</h2>
    <label for="sted">Stedsnavn:</label>
    <input type="text" name="sted">
    <label for="pris">Basispris:</label>
    <input type="text" name="pris">
    <input type="submit" value="Legg til">
</form>

<form method="post">
    <h2>Slett område</h2>
    <label for="sted">Stedsnavn:</label>
    <input type="text" name="slettSted">
    <input type="submit" value="Slett">
</form>

<?php
    $sted = $_REQUEST['sted'];
    $pris = $_REQUEST['pris'];
    $slettSted = $_REQUEST['slettSted'];
    
    //add sted and pris to database
    $sql2 = "INSERT INTO steder (stedsnavn, basispris) VALUES ('$sted', '$pris')";
    $result2 = $conn->query($sql2);

    //update database with form data
    $m3 = $_REQUEST['15-20'];
    $stein = $_REQUEST['stein'];
    $ensidig = $_REQUEST['ensidig'];
    $volum = $_REQUEST['10-20'];
    $litt = $_REQUEST['litt'];
    $sql3 = "UPDATE tillegg SET pris = '$m3' WHERE tilleggsnavn = '15-20 m3/daa'";
    $sql4 = "UPDATE tillegg SET pris = '$stein' WHERE tilleggsnavn = 'Stein'";
    $sql5 = "UPDATE tillegg SET pris = '$ensidig' WHERE tilleggsnavn = 'Ensidig'";
    $sql6 = "UPDATE tillegg SET pris = '$volum' WHERE tilleggsnavn = '10-20% volum tillegg'";
    $sql7 = "UPDATE tillegg SET pris = '$litt' WHERE tilleggsnavn = 'litt'";
    $result3 = $conn->query($sql3);
    $result4 = $conn->query($sql4);
    $result5 = $conn->query($sql5);
    $result6 = $conn->query($sql6);
    $result7 = $conn->query($sql7);


    //delete sted from database

    $sql8 = "DELETE FROM steder WHERE stedsnavn = '$slettSted'";
    $result8 = $conn->query($sql8);
?>