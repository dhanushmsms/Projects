<?php
//Get values passe from form in login. php file
$username = $_POST['user' ];
$password = $_POST['pass'];

// to prevent mysql injection
$username = stripcslashes ($username);
$password = stripcslashes ($password);


session_start();

$_SESSION['varname'] = $username;

if ($username == "admin" && $password="admin") {
        header("Location: http://localhost/dbms%20me/New%20folder%20(2)/dashboard.html");
}
else {
// cannect to the server and select database
$db = mysqli_connect("localhost", "root", "","pharmacy");

// Query the database for user
$result = mysqli_query($db,"select * from login where username = '$username' and password = '$password'")
        or die("Failed to query database ");
$row = mysqli_fetch_array($result);
if ($row['username']==$username && $row['password']==$password){
echo "Login success!!! Welcome ". $row['username'];
header("Location:http://localhost/dbms%20me/New%20folder%20(2)/dashboard.html");
} 
else
{ 
        echo "please try again";
}
}
?>