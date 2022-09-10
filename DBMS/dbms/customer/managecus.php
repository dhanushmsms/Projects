<?php
$servername="localhost";
$username="root";
$password="";
$dbname="pharmacy";
$link=mysqli_connect($servername,$username,$password,$dbname);
$con=mysqli_select_db($link,$dbname);

if($con)
{

}
else
{
    die("connection failed because".mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage customer</title>
</head>
<body>
    <form name="form1" action="" method="post"> 
        <table>
            <tr>
                <td>Customer name</td>
                <td><input type="text" name="C_name"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="Age"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="Gender"></td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td><input type="text" name="Cno"></td>
            </tr>
            <tr>
                <td>Emaid id</td>
                <td><input type="text" name="M_name"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Doctors Name</td>
                <td><input type="text" name="D_name"></td>
            </tr>
            <td colspan="2" allign="center">
                <input type="submit" name="submit1" value="insert">
                <input type="submit" name="submit2" value="update">
                <input type="submit" name="submit3" value="display">
                <input type="submit" name="submit4" value="delete">
                <input type="submit" name="submit5" value="search">
            </td>
            </tr>
            </table>
            </form>
</body>
</html>

<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into customer values ('$_POST[C_name]','$_POST[Age]','$_POST[Gender]','$_POST[Cno]','$_POST[email]','$_POST[D_name]')");
    echo"record inserted successfully";
}
if(isset($_POST["submit2"]))
{
    mysqli_query($link,"update customer set Customer_name='$_POST[C_name]' where M_name='$_POST[M_name]'");
    echo"record updated successfully";
}
if(isset($_POST["submit3"]))
{
   $res=mysqli_query($link,"select * from customer");
    echo"<table border=1>";
        echo"<tr>";
        echo"<th>"; echo"Customer name"; echo"</th>";
        echo"<th>"; echo"Age "; echo"</th>";
        echo"<th>"; echo"Gender"; echo"</th>";
        echo"<th>"; echo"Contact Number"; echo"</th>";
        echo"<th>"; echo"Emaid id"; echo"</th>";
        echo"<th>"; echo"Address"; echo"</th>";
        echo"<th>"; echo"Doctors Name"; echo"</th>";
        echo"</tr>";
    while($row=mysqli_fetch_array($res))
{
    echo"<tr>";
    echo"<td>"; echo $row["Customer_name"]; echo"</td>"; 
    echo"<td>"; echo $row["Age"]; echo"</td>"; 
    echo"<td>"; echo $row["gender"]; echo"</td>"; 
    echo"<td>"; echo $row["Contact_Number"]; echo"</td>"; 
    echo"<td>"; echo $row["Emaid_id"]; echo"</td>"; 
    echo"<td>"; echo $row["Address"]; echo"</td>"; 
    echo"<td>"; echo $row["Doctors_Name"]; echo"</td>"; 
    echo"</tr>";
}
echo"</table>";
}
if(isset($_POST["submit4"]))
{
  mysqli_query($link,"delete from customer where Customer_name='$_POST[C_name]'");
  echo"record delete successfully";  
}
if(isset($_POST["submit5"]))
{
   $res=mysqli_query($link,"select * from customer where Customer_name='$_POST[C_name]'");
   echo"<table border=1>";
   echo"<tr>";
        echo"<th>"; echo"Customer name"; echo"</th>";
        echo"<th>"; echo"Age "; echo"</th>";
        echo"<th>"; echo"Gender"; echo"</th>";
        echo"<th>"; echo"Contact Number"; echo"</th>";
        echo"<th>"; echo"Emaid id"; echo"</th>";
        echo"<th>"; echo"Address"; echo"</th>";
        echo"<th>"; echo"Doctors Name"; echo"</th>";
        echo"</tr>";
while($row=mysqli_fetch_array($res))
{
    echo"<tr>";
    echo"<td>"; echo $row["Customer_name"]; echo"</td>"; 
    echo"<td>"; echo $row["Age"]; echo"</td>"; 
    echo"<td>"; echo $row["gender"]; echo"</td>"; 
    echo"<td>"; echo $row["Contact_Number"]; echo"</td>"; 
    echo"<td>"; echo $row["Emaid_id"]; echo"</td>"; 
    echo"<td>"; echo $row["Address"]; echo"</td>"; 
    echo"<td>"; echo $row["Doctors_Name"]; echo"</td>"; 
    echo"</tr>";
}
echo"</table>";
}