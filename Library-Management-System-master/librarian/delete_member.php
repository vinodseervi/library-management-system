<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($mysqli,"delete from member where member_id='$id'") or die(mysqli_error());
header('location:member.php');
?>