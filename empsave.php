<?php include 'addform.php'; ?>


<?php 
if($_POST){
  if($_POST['submit']=="submit"){
    $name = $_POST['name'];
    $sallary = $_POST['sallary'];
    $mysqli = new mysqli("localhost","root","","crud_demo");

    $query = "INSERT INTO employee (name,sallary) values ('$name','$sallary')";
    echo $query;
    $result = $mysqli->query($query);
    if($result){
      echo "Data Inserted into Table";

    }
    else{
      echo "Somthing went wrong!";

    }

    header("Location: http://localhost/CURD/empText.php");
  }

}
?>