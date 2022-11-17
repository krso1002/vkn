<?php
$verdi = $_COOKIE['verdi'];
echo $verdi;
?>
<form action="" method="post" name="halla">
    <input type="text" name="halla">
    <input type="submit" value="123">
</form>
<?php
$verdi2 = $_REQUEST['halla'];

$sum = $verdi + $verdi2;
echo $sum;
echo "pikk";
?>