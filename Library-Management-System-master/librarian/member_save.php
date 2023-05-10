<?php 
include('dbcon.php');
$db_host = "localhost";
$db_user = "antaragupta25@gmail.com";
$db_pass = "Antara@2002";
$db_name = "mysql";

// Create a new mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if (isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$type=$_POST['type'];
$year_level=$_POST['year_level'];



								
mysqli_query($mysqli,"insert into member(firstname,lastname,gender,address,contact,type,year_level) values('$firstname','$lastname','$gender','$address','$contact','$type','$year_level')")or die(mysqli_error());
 
 
header('location:member.php');
}
?>	
