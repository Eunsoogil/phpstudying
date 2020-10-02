<?php

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
//    if($username && $password) { // 있는지 없는지 return, boolean
//        echo $username . "<br>";
//        echo $password;
//    } else {
//        echo "type your info";
//    }
    
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp'); //url, id, pw, db
    
    if($connection){
        echo "We are connected";
    } else {
        die("Database connection failed");
        // 출력 후 밑의 코드 종료
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="col-xs-6">
        <form action="login.php" method="post">
            <div class="form-group">
               <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
               <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="submit">
        </form>
        
    </div>
    
</div>
    
</body>
</html>