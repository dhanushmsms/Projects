<?php
	$Name = $_POST['Name'];
	$Age = $_POST['Age'];
	$Gender = $_POST['Gender'];
	$Phonenumber = $_POST['Phonenumber'];
	$emailaddress = $_POST['emailaddress'];
    $Address = $_POST['Address'];
    $doctorsname = $_POST['doctorsname'];

	

	// Database connection
	$conn = new mysqli('localhost','root','','pharmacy');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into customer (Customer_name,Age,gender,Contact_Number,Emaid_id,Address,Doctors_Name ) values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sisisss",$Name,$Age,$Gender,$Phonenumber,$emailaddress,$Address,$doctorsname);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>