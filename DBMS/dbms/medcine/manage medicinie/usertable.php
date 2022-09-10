<?php

include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MANAGE MEDCINE</title>
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
  
    width: 730px;
    float: left;
    margin-left: 30px;
    margin-top: 30px;
    padding-left: 10px;
    padding-bottom: 50px;
    background-color: white;


  }
  th, td {
    padding: 15px;
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
</style>
</head>
<body>


<div class="table-data">
        <div class="list-title">
 <h2>Manage Medcine</h2>
 <link ref="stylesheet" href="medicine.css">

          
            </div>

    <table border="1">

        <tr>

            <th>S.N</th>
            <th>Medcine Name</th>
            <th>Generic Number</th>
            <th>Packing</th>
            <th>Supplier</th>
            <th>Edit</th>
            <th>delete</th>
        </tr>
        
<?php

        if(count($fetchData)>0){
        $sn=1;
        foreach($fetchData as $data){
            
?> <tr>
<td><?php echo $sn; ?></td>
<td><?php echo $data['M_name']; ?></td>
<td><?php echo $data['G_name'];?> </td>
<td><?php echo $data['packing']; ?></td>
<td><?php echo $data['supplier']; ?></td>
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