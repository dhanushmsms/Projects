<?php
	$MedicineName = $_POST['MedicineName'];
	$GenericName = $_POST['GenericName'];
	$Packing = $_POST['Packing'];
	$Supplier = $_POST['Supplier'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','pharmacy');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into medicine (M_name,G_name,packing,supplier) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis",$MedicineName,$GenericName,$Packing,$Supplier);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>