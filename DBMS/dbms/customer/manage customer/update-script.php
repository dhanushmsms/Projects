<?php

include('database.php');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($connection, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($connection,$id);
    
    
} 
function edit_data($connection, $id)
{
 $query= "SELECT * FROM customer WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

    $Customer_name= legal_input($_POST['Customer_name']);
      $Age= legal_input($_POST['Age']);
      $gender = legal_input($_POST['gender']);
      $Contact_Number = legal_input($_POST['Contact_Number']);
      $Emaid_id = legal_input($_POST['Emaid_id']);
      $Address = legal_input($_POST['Address']);
      $Doctors_Name = legal_input($_POST['Doctors_Name']);

      $query="UPDATE  customer
            SET Customer_name ='$Customer_name',
                Age ='$Age',
                gender = '$gender',
                Contact_Number = '$Contact_Number',
                Emaid_id = '$Emaid_id',
                Address = '$Address',
                Doctors_Name ='$Doctors_Name' WHERE id=$id";

      $exec= mysqli_query($connection,$query);
  
      if($exec){
         header('location:usertable.php');
      
      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($connection);
         echo $msg;  
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>