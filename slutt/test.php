<?php 
    echo "Hallo";

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "vkntest";
    
    $connect = mysqli_connect($servername, $username, $password, $dbname);

    $query1 = "SELECT * FROM `steder`";
    $result1 = mysqli_query($connect, $query1);

    // print all second column values
    while ($row = mysqli_fetch_row($result1)) {
        echo "<form action='' method='post'><h2>" . $row[1] . "</h2>";
        echo "<p>Basispris</p>
            <input type='text' name='basispris' placeholder='" . $row[2] . "'>";
        echo "<p>Middelstamme</p>
            <input type='text' name='middelstamme' placeholder='" . $row["middelstamme"] . "'>";
            $query2 = "SELECT * FROM `tillegg` WHERE tilleggstype = 'm3daa' AND stedID = '" . $row[0] . "'";
            $result2 = mysqli_query($connect, $query2);
            echo "<h4>m3/daa</h4>";
            while($row2 = mysqli_fetch_row($result2)) {
                echo "<p>" . $row2[2] . "% volum tillegg</p> <input type='text' name='". $row2[3] . "' placeholder='". $row2[3] ."'>";
            }
        }
?>
