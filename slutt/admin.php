<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
    $query1 = "SELECT * FROM `steder`";

    $result1 = mysqli_query($connect, $query1);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class='sted'><h2>" . $row["stedsnavn"] . "</h2>";
            echo "<p>Basispris</p>
                input type='text' name='basispris' placeholder='" . $row["basispris"] . "'>";
            echo "<p>middelstamme</p>
                input type='text' name='middelstamme' placeholder='" . $row["middelstamme"] . "'>";
            $query2 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'm3daa' AND stedID = '" . $row["stedID"] . "'";
            $result2 = mysqli_query($connect, $query2);
            if ($result2->num_rows > 0) {
                echo "<h4>m3/daa</h4>";
                while($row2 = $result2->fetch_assoc()) {
                    echo "<p>" . $row2["tilleggsnavn"] . "</p> <input type='text' name='". $row2["tilleggsnavn"] . "' placeholder='". $row2["pris"] ."'>";
                }
            }
            $query3 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'overflate' AND stedID = '" . $row["stedID"] . "'";
            $result3 = mysqli_query($connect, $query3);
            if ($result3->num_rows > 0) {
                echo "<h4>Overflate</h4>";
                while($row3 = $result3->fetch_assoc()) {
                    echo "<p>" . $row3["tilleggsnavn"] . "</p> <input type='text' name='". $row3["tilleggsnavn"] . "' placeholder='". $row3["pris"] ."'>";
                }
            }
            $query4 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'velteplass' AND stedID = '" . $row["stedID"] . "'";
            $result4 = mysqli_query($connect, $query4);
            if ($result4->num_rows > 0) {
                echo "<h4>Velteplass</h4>";
                while($row4 = $result4->fetch_assoc()) {
                    echo "<p>" . $row4["tilleggsnavn"] . "</p> <input type='text' name='". $row4["tilleggsnavn"] . "' placeholder='". $row4["pris"] ."'>";
                }
            }
        }
    }

?>