<?php

include "config.php";
$ID = $_POST['id'];
$list = $_POST['list'];

mysqli_query($con, "UPDATE `tabletodo` SET `List`='$list' WHERE `tabletodo`.`ID` = '$ID'");

header("location:index.php");

?>