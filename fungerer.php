<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    else{
        echo "Leggo<br>";
    }

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

    $halla="Halla";
?>

<body>
<div class="dataInn">
    <form action="">
        <label for="lokasjon">Lokasjon</label>
        <select name="lokasjon">
            <option value="">
                <?php while($row = $result->fetch_assoc()) {echo  $row['stedsnavn'];} else {echo "0 results";} ?>
            </option>
        </select>
    </form>
</div>
</body>
</html>