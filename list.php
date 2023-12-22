<html>
<head>
<title>CRUD Demo </title>
</head>
<body>
<?php 
//Step1 :  declared and assign db credentials
$username = "root";
$password="";
$database = "crud_demo";
$host="localhost";
//step 2 :  connection string 
$mysqli = new mysqli($host,$username,$password,$database);
ECHO "====STEP1";

if ($mysqli -> connect_errno) {
  exit();
}
#step 3 : prepare to retrive the query result 
$sql = "SELECT * FROM student"  ; // 
$result = $mysqli->query($sql); 

// Fetch all 
$row = $result -> fetch_all(MYSQLI_ASSOC);
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
    <th>RollNo</th>

    <th>Action Edit/Delete</th>

</tr>
<?php      
// step 4 : Embed the php result into html code 
foreach ($row as $data){?>
            <?php echo "<tr>"; ?>
            <?php echo "<td>".$data["id"]."</td>"; ?>
            <?php echo "<td>".$data["name"]."</td>"; ?>
            <?php echo "<td>".$data["rollno"]."</td>"; ?>
            <?php
            $id= $data['id'];  

            echo "<td> <a href='index.php?id=$id&action=edit'>Edit</a>  | <a href='index.php? 
           id=$id&action=delete'>Delete</a></td>"; ?>
            <?php echo "</tr>"; ?>
    <?php }
    // Free result sets
    $result -> free_result();
    // Free result set
    // $result -> free_result();
?>
</tr>
</table>
</body>
</html>

