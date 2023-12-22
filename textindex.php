<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $username = "root";
  $password="";
  $database = "crud_demo";
  $host="localhost";
  
  $mysqli = new mysqli($host,$username,$password,$database);
  
  if ($mysqli->connect_errno ) {
    exit();
  }
  $sql = "SELECT * FROM student"  ;
  $result = $mysqli->query($sql);

  ?>
  <table border=1px>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>SALLARY</th>
  </tr>
  <?php
  $query= "SILECT *FROM student";
  $result = $mysqli->query($query);   
  ?>
  
  </table>
  
  
</body>
</html>