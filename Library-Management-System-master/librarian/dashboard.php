<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php
$db_host = "localhost";
$db_user = "antaragupta25@gmail.com";
$db_pass = "Antara@2002";
$db_name = "mysql";

// Create a new mysqli object
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">		
                       
				<?php include('slider.php'); ?>
				
				
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>