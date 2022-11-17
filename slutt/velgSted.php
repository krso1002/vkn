<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vkntest";

$connect = mysqli_connect($servername, $username, $password, $dbname);

$query1 = "SELECT * FROM `steder`";

$result1 = mysqli_query($connect, $query1);

?>

<form action="visSted.php" method="post">
    <select name="verdi" id="">
        <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option <?php echo " value='" . $row1[2] . "'"; $sted_id = $_REQUEST['lokasjon'];
            //remember last selected value
            if (isset($sted_id) && $sted_id == $row1[0]) {
                echo " selected='selected'";
            }?>> <?php echo $row1[1]?> </option>
            <?php endwhile; ?>
    </select>
    <input type="submit" value="Vis verdi">
</form>