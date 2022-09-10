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
 $query= "SELECT * FROM supplier WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

    $Supplier_Name= legal_input($_POST['Supplier_Name']);
      $Phone_Number= legal_input($_POST['Phone_Number']);
      $Email_address = legal_input($_POST['Email_address']);
      $Address = legal_input($_POST['Address']);

      $query="UPDATE supplier
            SET Supplier_Name ='$Supplier_Name',
                Phone_Number ='$Phone_Number',
                Email_address = '$Email_address',
                Address ='$Address' WHERE id=$id";

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