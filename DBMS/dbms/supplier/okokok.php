<?php
	$name = $_POST['name'];
	$ph_no = $_POST['ph_no'];
	$email = $_POST['email'];
	$Address = $_POST['Address'];
	

	// Database connection
	$conn = new mysqli('localhost','root','', 'pharmacy');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into supplier (Supplier_Name,Phone_Number,Email_address,Address) values(?, ?, ?, ?)");
		$stmt->bind_param("siss",$name,$ph_no,$email,$Address );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>