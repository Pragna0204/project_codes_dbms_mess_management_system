<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "mess-management";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$db= $conn;
$tableName="vegmenu";
$columns= ['Day', 'Slot','Food_Items'];
$fetchData = fetch_data($db, $tableName, $columns);


function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{


$columnName = implode(", ", $columns);
$query = "SELECT ".$columnName." FROM $tableName";
$result = $db->query($query);//run query


if($result== true){
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found";
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container p-5" style="margin-left:139px;">
<center>
        <h1 class="heading">Veg Menu</h1>
        <div class="tab">
        <table cellspacing="16" >
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>


         <th>Day</th>
         <th>Slot</th>
         <th>Food Items</th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['Day']??''; ?></td>
      <td><?php echo $data['Slot']??''; ?></td>
      <td><?php echo $data['Food_Items']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</center>





</body>
</html>

