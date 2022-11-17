<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "vkntest";

$connect = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM `steder`";

$result1 = mysqli_query($connect, $query);

echo "ye";
?>

<body>
  <form class="" action="" method="post">
    <select name="basis" id="">
        <?php while($row1 = mysqli_fetch_array($result1)):;?>
            <option value="<?php echo $row1[2] ?>"> <?php echo $row1[1]?> </option>
        <?php endwhile; ?>
    </select>
    <input type="submit" value="Vis pris">
  </form>
    <?php
      $var1 = $_REQUEST['basis'];
      echo $var1;
    ?>
</body>
