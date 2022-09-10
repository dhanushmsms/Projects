<?php

include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MANAGE CUSTOMER</title>
<style>
     .table, td, th {  
    border: 1px solid rgb(19, 18, 18);
    text-align: left;
  }
  
  table {
    border-collapse: collapse;
    max-width: 100%;
   width:90%;

  }
  .table-data{
  
    width: 1000px;
    float: left;
    margin-left: 30px;
    margin-top: 30px;
    padding-left: 20px;
    padding-bottom: 50px;
    background-color: white;


  }
  th, td {
    padding: 15px;
  }
body{
  overflow-x: hidden;
  display: flex;
    height: 600px;
    justify-content: center;
    align-items: center;
  background: #fec107;
}

* {
box-sizing: border-box;}
</style>
</head>
<body>


<div class="table-data">
        <div class="list-title">
 <h2>Manage Customer</h2>
          
            </div>

    <table border="1">

        <tr>

            <th>S.N</th>
            <th>Customer Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Contact Number</th>
            <th>Email address</th>
            <th>Address</th>
            <th>Doctors name</th>
            <th>Edit</th>
            <th>delete</th>
        </tr>
        
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['Customer_name']; ?></td>
<td><?php echo $data['Age'];?> </td>
<td><?php echo $data['gender']; ?></td>
<td><?php echo $data['Contact_Number']; ?></td>
<td><?php echo $data['Emaid_id']; ?></td>
<td><?php echo $data['Address']; ?></td>
<td><?php echo $data['Doctors_Name']; ?></td>
<td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
<td><a href="delete-script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
</tr> <?php

      $sn++; }

      }else{
            
?>

      <tr>
        <td colspan="7">No Data Found</td>
      </tr>
                
<?php

    }
?>
 
    </table>
    </div>

</body>
</html>