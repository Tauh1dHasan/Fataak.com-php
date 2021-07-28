<?php  
	$conn = mysqli_connect('localhost','root','','fataak');
	if (!$conn) {
		echo "Connection Fail: " . mysqli_connect_errno($conn);
		die();
	}
?>