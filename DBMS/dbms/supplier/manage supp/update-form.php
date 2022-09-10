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
  display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
  background: #fec107;
}

* {
  box-sizing: border-box;}
.user-detail form {
    height: 500px;
    border: 2px solid #f1f1f1;
    padding: 16px;
    background-color: white;
    border-radius : 25px;
    }
    .user-detail{
      width: 400px;
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
    <h2>Update Form</h2>
    
    
    </div>
 
    <p style="color:red">
    
<?php if(!empty($msg)){echo $msg; }?>
</p>
    <form method="post" action="">
    <label>Supplier name</label>
        
<input type="text" placeholder="Enter Full Name" name="Supplier_Name" required value="<?php echo isset($editData) ? $editData['Supplier_Name'] : '' ?>">

          <label>Phone Number</label>
        
<input type="text" placeholder="Enter phone number" name="Phone_Number" required value="<?php echo isset($editData) ? $editData['Phone_Number'] : '' ?>">

          <label>Email_address</label>
<input type="text" placeholder="Enter email address" name="Email_address" required value="<?php echo isset($editData) ? $editData['Email_address'] : '' ?>">

          <label>Address</label>
        
<input type="text" placeholder="Enter Full address" name="Address" required value="<?php echo isset($editData) ? $editData['Address'] : '' ?>">

          <button type="submit" name="update">Submit</button>
    </form>
        </div>
<!--====form section start====-->


</body>
</html>