<head>
  <link rel="stylesheet" href="test.css">
</head>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vkntest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<form action="leggTil.php" method="post">
  <label for="sted">Sted: </label>
  <input type="text" name="sted">
  <label for="pris">Basispris: </label>
  <input type="text" name="pris">
  <input type="submit" value="Legg til">
</form>

<?php

$sql = "SELECT * FROM steder";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Stedsnavn: " . $row["stedsnavn"]. " | " . "Basispris: ". $row["basispris"]. "<br>";
  }
}
  else {
    echo "0 results";
}

echo "whaddup?";

?>

<form action="" method="post">
  <select name="var1" id="">
    <?php
      while($row1 = $result->mysqli_fetch_array($result)):;?> 
        <option> <?php echo $row1[1]?> </option>
      <?php endwhile; ?>
    ?>
  </select>
  <select name="var2" id="">
    <option value="2">2</option>
    <option value="3">3</option>
  </select>
  <input type="submit" value="Legg sammen">
</form>

<?php
  $var1 = $_REQUEST['var1'];
  $var2 = $_REQUEST['var2'];
  $var3 = $var1 + $var2;

  echo $var3
?>
