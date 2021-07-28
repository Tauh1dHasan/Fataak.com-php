<?php  
	$conn = mysqli_connect('localhost','zexfashi_fataak','SPx8iBM;@6+w','zexfashi_fataak');
	if (!$conn) {
		echo "Connection Fail: " . mysqli_connect_errno($conn);
		die();
	}
?>