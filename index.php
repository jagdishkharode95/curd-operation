<html>
<head>
<title>CRUD Demo </title>
</head>
<body>
<?php 
$username = "root";
$password="";
$database = "crud_demo";
$host="localhost";
include("utils.php");
$mysqli = new mysqli($host,$username,$password,$database);
ECHO "====STEP1";

if ($mysqli -> connect_errno) {

  exit();
}

$sql = "SELECT * FROM student"  ;
$result = $mysqli->query($sql); 

// Fetch all//delete
$row = $result -> fetch_all(MYSQLI_ASSOC);

if($_POST and $_POST["submit"]=="submit"){


    $name = $_POST['name'];
    $rollno = $_POST['rollno'];

    $class = $_POST['class'];

        $query = "insert into student(name,rollno,class)values('".$name."','".$rollno."','".$class."')";
        echo $query;
        $result = $mysqli -> query($query);
        if($result){
            echo "Data Inserted Successfully!";
        }
        $_POST["submit"]='';
        header("index.php");

}
elseif($_POST and $_POST["submit"]=="Update"){
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $id = $_POST['id'];
    $class = $_POST['class'];

    $query = "update  student set name='".$name."',rollno='".$rollno."',class='".$class."' where id = '".$id."'";
    echo $query;
    $result = $mysqli -> query($query);
    if($result){
        echo "Data Updated Successfully!";
    }
    header("Refresh:0");

}

actioncall();
?>

<style>
    table,th,td{
        border:1px solid black;

    }
</style>
<a href="add.php">Add New Student</a>

<table >
<tr>
    <th>Id</th>
    <th>Name</th>
    <th>RollNo</th>

    <th>Action Edit/Delete</th>

</tr>
<?php      
    foreach ($row as $data){?>
            <?php echo "<tr>"; ?>
            <?php echo "<td>".$data["id"]."</td>"; ?>
            <?php echo "<td>".$data["name"]."</td>"; ?>
            <?php echo "<td>".$data["rollno"]."</td>"; ?>
            <?php
            $id/*veriable*/ = $data['id'];  

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

<table>



<?php if ($_GET && $_GET['action']=="edit"){
    
    ?>
<br><br>
        <form action="index.php" method="POST">
            Name : <input type="text" name="name" value="<?php echo $result_edit[0]['name']; ?>"><br>
            rollno : <input type="text" name="rollno" value="<?php echo $result_edit[0]['rollno']; ?>"><br>
            class : <input type="text" name="class" value="<?php  echo $result_edit[0]['class']; ?>"><br>
            <input type="hidden" name="id" value="<?php echo $result_edit[0]['id'];  ?>"><br>

            <input type="submit" name="submit" value="Update">
        </form>


<?php }else{?>
    <br><br>
    <form action="index.php" method="POST">
        Name : <input type="text" name="name" value=""><br>
        rollno : <input type="text" name="rollno" value=""><br>
        class : <input type="text" name="class" value=""><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php } ?>

</body>
</html>

