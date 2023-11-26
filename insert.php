<?php

$LIST = $_POST['list'];
include "config.php";
mysqli_query($con, "INSERT INTO `tabletodo`(`List`) VALUES ('$LIST')");

// menentukan halaman mana yg dituju setelah data terkirim
header("location:index.php");

?>