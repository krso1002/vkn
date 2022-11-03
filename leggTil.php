<?php

$sted = $_REQUEST['sted'];
$pris = $_REQUEST['pris'];
$sql2 = "INSERT INTO steder('stedID', 'stedsnavn', 'basispris') 
          VALUES (NULL, '$sted', '$pris')";
$result2 = $conn->query($sql2);
?>