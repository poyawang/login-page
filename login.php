<?php

$host="localhost";
$user="root";
$password="";
$db="login";

$sq = mysqli_connect($host, $user, $password);
mysqli_select_db($sq,$db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql= "select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";

    $result=mysqli_query($sq, $sql);

    if(mysqli_num_rows($result)==1){
        echo"you have successfully logged in";
        exit();
    }
    else {
        echo "login failed";
        exit();
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/css/style.css">
    <title>Login Page</title>
    <style>
        input {
            width:250px;
            height:50px;
        }
        .form {
            margin:0 auto;
        }
        div {
            margin:2rem;
        }
        .submit {
            margin-left:2rem;
        }

    </style>
</head>
<body>
    <div class="form">
        
        <form action="#" method="POST">
            <div class="form_input">
                <input type="text" name="username" placeholder="Enter Your User Name">
            </div>
            <div class="form_input">
                <input type="password" name="password" placeholder="Enter Your Password">
            </div>
            <input class="submit" type="submit" name="submit" value="LOGIN" class="btn-login">
        </form>
    </div>
    
    
    
</body>
</html>