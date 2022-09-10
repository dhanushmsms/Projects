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
 $query= "SELECT * FROM medicine WHERE id= $id";
 $exec = mysqli_query($connection, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($connection, $id){

    $M_name= legal_input($_POST['M_name']);
      $G_name= legal_input($_POST['G_name']);
      $packing = legal_input($_POST['packing']);
      $supplier = legal_input($_POST['supplier']);

      $query="UPDATE medicine
            SET M_name ='$M_name',
                G_name ='$G_name',
                packing = '$packing',
                supplier ='$supplier' WHERE id=$id";

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