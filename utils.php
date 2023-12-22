<?php 

function actioncall(){


if($_GET &&  $_GET['action']=="delete"){

print_r($_GET);
$id = $_GET['id'];

$query = "DELETE FROM `student` WHERE id='$id'";
echo $query;
$result = $mysqli -> query($query);
if($result ){
    echo "deleted";
}
header("Refresh:0");
}
if($_GET && $_GET['action']=="edit"){
    //edit
    $id = $_GET['id'];
    $query = "select * from student where id = $id";
    $row = $mysqli->query($query);
    $result_edit = $row -> fetch_all(MYSQLI_ASSOC);

}
// Add 

} 


?>