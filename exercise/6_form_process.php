<?php 
if(isset($_POST['submit'])){
    echo "yesss it works" . "<br>";
    //isset 변수가 설정되었는지
    //$_POST post 데이터 변수를 받음
    
    $name = ["Edwin", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom"];
    $minimun = 5;
    $maximun = 10;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(strlen($username) < $minimun){
        echo "Username has to be longer than 5";
    }
    
    if(strlen($username) > $maximun){
        echo "Username has to be shoter than 10";
    }
    
    if(!in_array($username, $name)){
        echo "You should sign up";
    } else {
        echo "Welcome!!";
    }
}
?>