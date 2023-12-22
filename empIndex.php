<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $host= "localhost";
  $user= "root" ;
  $password="";
  $db = "crud_demo";

  $empSqlCon = new mysqli($host,$user,$password,$db);
  
  if ($empSqlCon){
    echo " connected";
  }else{
    echo "db not connected";
  }


  ?>


  <div>
  <form action = "empIndex.php" method= "POST">
  <inpute type="text" name= "Name" placeholder= "Name"> <br> <br>
  <inpute type= "number" name = "Sallary" placeholder = "Sallary" > <br><br>
  <inpute type="submit" name="submit_btn" value="save">
  </div>
</form>









  
</body>
</html>