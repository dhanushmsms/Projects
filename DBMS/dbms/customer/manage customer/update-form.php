<?php

include('update-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>update</title>
<style>
    
body{
    overflow-x: hidden;
}

body{
    overflow-x: hidden;
  display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
  background: #fec107;
}

* {
  box-sizing: border-box;}
.user-detail form {
    height: 800px;
    border: 2px solid #f1f1f1;
    padding: 10px;
    background-color: white;
    border-radius : 25px;
    }
    .user-detail{
      width: 600px;
      height: 100%;
    float: left;
    
    }

input{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius : 25px;}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;}
button[type=submit] {
    background-color: #fec107;
    color: #ffffff;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
    font-size: 20px;
    border-radius : 25px;}
label{
  font-size: 18px;;}
button[type=submit]:hover {
  background-color:#3d3c3c;}
  .form-title a, .form-title h2{
   display: inline-block;
   
  }
  .form-title a{
      text-decoration: none;
      font-size: 40px;
      background-color: green;
      color: honeydew;
      padding: 2px 10px;
  }

 
</style>
</head>
<body>
<!--====form section start====-->

<div class="user-detail">

    <div class="form-title">
    <h2>Customer Update</h2>
    
    
    </div>
 
    <p style="color:red">
    
<?php if(!empty($msg)){echo $msg; }?>
</p>
    <form method="post" action="">
    <label>Customer Name</label>
        
<input type="text" placeholder="Enter Customer Name" name="Customer_name" required value="<?php echo isset($editData) ? $editData['Customer_name'] : '' ?>">

          <label>Age</label>
        
<input type="text" placeholder="Enter Age" name="Age" required value="<?php echo isset($editData) ? $editData['Age'] : '' ?>">

          <label>Gender</label>
<input type="text" placeholder="male/female/others" name="gender" required value="<?php echo isset($editData) ? $editData['gender'] : '' ?>">

          <label>Contact Number</label>
        
<input type="text" placeholder="Enter Contact number" name="Contact_Number" required value="<?php echo isset($editData) ? $editData['Contact_Number'] : '' ?>">

         <label>Email address</label>
        
<input type="text" placeholder="Enter email address" name="Emaid_id" required value="<?php echo isset($editData) ? $editData['Emaid_id'] : '' ?>">

        <label>Address</label>
        
<input type="text" placeholder="Enter Address" name="Address" required value="<?php echo isset($editData) ? $editData['Address'] : '' ?>">

       <label>Doctors name</label>
        
<input type="text" placeholder="Enter Supplier Name" name="Doctors_Name" required value="<?php echo isset($editData) ? $editData['Doctors_Name'] : '' ?>">




          <button type="submit" name="update">Submit</button>
    </form>
        </div>
<!--====form section start====-->


</body>
</html>