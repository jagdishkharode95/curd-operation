<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
$username = "root";
$password="";
$database = "crud_demo";
$host="localhost";
$mysqli = new mysqli($host,$username,$password,$database);
if ($mysqli -> connect_errno) {
  echo "Something went wrong while connecting to Mysql";
  exit();
}

#step 3 : prepare to retrive the query result 
$sql = "SELECT * FROM employee";
$result = $mysqli->query($sql);

//fetchall
 $row = $result ->fetch_all(MYSQLI_ASSOC);
 print_r($row);
?>
<style>
    table,th,td{
        border:1px solid black;

    }
</style>

<table >
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>Sallary</th>

    <th>Action Edit/Delete</th>

</tr>

 <!-- step 4 : Embed the php result into html code -->
<?php
foreach($row as $data) {?>


<?php echo "<tr>";?>
<?php echo "<td>".$data["id"]."</td>";?>
<?php echo "<td>".$data["name"]."</td>";?>
<?php echo "<td>". $data["sallary"]."</td>";?>
<?php
$id=$data['id'];
echo "<td> <a href= 'index.php?id=$id&action=edit'>Edit</a> | <a href= 'index.php?id= $id&action=delete'>Delete</a></td></tr>"; ?>


<?php } ?>


<?php
//Free result sets
// $result -> free_result();
// step 4 : Embed the php result into html code
?>
</table>
</body>
</html>
