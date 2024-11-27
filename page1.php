<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
<label>username</label>
<input type="text" name="username" ><br><br>

<label>Password</label>
<input type="text" name="password" ><br><br>

<input type="submit" value="Login" name= "loginBtn">
 </form>


<?php
session_start();
if(isset($_REQUEST['loginBtn'])){
    if($_REQUEST['username']=='shumaila' &&  $_REQUEST['password']=='shumaila1234'){
        $_SESSION['username'] = $_REQUEST['username'];
        $_SESSION['Last_time'] = time();
        
        header("Location:page2.php");
    }else{
        // echo "Invalid";
        header("Location:page1.php");
    }

}








?>














</body>
</html>