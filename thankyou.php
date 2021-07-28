<?php  
// adding database connection
require "inc/db.php";

// getting submitted form data
	if (isset($_POST['submit'])) {
		// matching varification code
		$veri_code = mysqli_escape_string($conn, $_POST['veri_code']);
		$verification = mysqli_escape_string($conn, $_POST['verification']);
		if ($veri_code !== $verification) {
			echo "<script> alert('Verification code did not matched') </script>";
			echo "<script> location = 'index.php' </script>";
		}

		$name = mysqli_escape_string($conn, $_POST['name']);
		$number = mysqli_escape_string($conn, $_POST['number']);
		$email = mysqli_escape_string($conn, $_POST['email']);
		$city = mysqli_escape_string($conn, $_POST['city']);
		$category = mysqli_escape_string($conn, $_POST['category']);
		$timming = mysqli_escape_string($conn, $_POST['timming']);
		$txtreq = mysqli_escape_string($conn, $_POST['txtreq']);

		$sql = "INSERT INTO leads (name, `number`, email, city, category, timming, details, status) VALUES ('$name', '$number', '$email', '$city', '$category', '$timming', '$txtreq', 'unread') ";
		$run_sql = mysqli_query($conn, $sql);
		if ($run_sql) {
			echo "<script> location = 'thankyou.php' </script>";
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Fataak.in</title>
	<link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css" /><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --><script src="js/jquery.min.js"></script><!-- Custom Theme files --><!--theme-style-->
	<link href="css/style.css" media="all" rel="stylesheet" type="text/css" /><!--//theme-style-->
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<style type="text/css"><!--
.style7 {font-size: 1.5em}
.style8 {font-size: 1.2em}
.style9 {
	color: #990000;
	font-weight: bold;
}
-->
	</style>
</head>
<body><!--header-->
<div class="header">
	<div class="header-top" style="background-color:#FF0000; height: 9px;">
		<div class="container" style="height: 26px;">
			<div class="header-top-in">
				<a href="index.php">
					<img style="margin: 0 auto; display: block;" alt=" " src="images/logo.png" />
				</a>
				<a href="http://fataak.com/My_App/app-debug.apk" title="Download Mobile App"></a>
			</div>

		</div>
	</div>

	<div class="header-bottom-in" style="height: 60px">
		<div class="container">
			<div class="header-bottom-on">&nbsp;
				<div class="header-can">
					<a href="http://fataak.com/listings/" target="_blank"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="contact">
		<div class="col-md-3"></div>
		<div class="col-md-6 contact-top">
			<p>&nbsp;</p>

			<h3>Thank you for trusting us and sending request. Our team will contact you as soon as possible.</h3>
		</div>
		<div class="col-md-3"></div>

		<div class="clearfix"></div>
	</div>
</div>

<div class="footer">

<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script></div>
</body>

</html>