<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['username'])){
    if( (time() - $_SESSION['Last_time']) >60 ){
        header("Location:logout.php");
    }else{

        echo "Welcome to the Login Page  : " . $_SESSION['username'] ;
    }
}else{
   header("Location:page1.php");
}

?>
<a href="page3.php">Go To Page3</a>
</body>
</html>