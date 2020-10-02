<?php include "db.php";
?>
<?php

function showAllData() {
    global $connection;
    // $connection이 지역변수이기 때문에 전역변수로 바꿔야한다
    $query = "SELECT * FROM user";
    // .= Concatenation assignment

    $result = mysqli_query( $connection, $query );

    if ( !$result ) {
        die( "query failed" );
    }

    while( $row = mysqli_fetch_assoc( $result ) ) {
        $id = $row['id'];
        // $row[] 방식
        echo "<option value='$id'>$id</option>";
    }
}

function createTable() {

    if ( isset( $_POST['submit'] ) ) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // PHP security escape문을 입력해도 문제없이 동작
        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);
        
        // 암호화 https://www.php.net/manual/en/function.crypt.php
        $hashFormat = "$2y$10$";
        $salt = "iusesomecrazystrings22";
        $hashF_and_salt = $hashFormat . $salt;
        $password = crypt($password, $hashF_and_salt);
        
        $query = "INSERT INTO user(username, password)";
        $query .= "VALUES ('$username', '$password')";
        // .= Concatenation assignment

        $result = mysqli_query( $connection, $query );

        if ( !$result ) {
            die( "insert query failed" );
        } else {
            echo "Record Created";
        }
    }
}

function readTable() {
    $query = "SELECT * FROM user";
    // .= Concatenation assignment
    global $connection;
    $result = mysqli_query( $connection, $query );

    if ( !$result ) {
        die( "query failed" );
    }
    while( $row = mysqli_fetch_assoc( $result ) ) {
        //while( $row = mysqli_fetch_row( $result ) ) { 결과값이 다름
        print_r( $row );
    }
}

function updateTable() {
    if ( isset( $_POST['submit'] ) ) {
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE user SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password'";
        $query .= "WHERE id = '$id'";

        $result = mysqli_query( $connection, $query );
        if ( !$result ) {
            die( "query_failed" . mysqli_error( $connection ) );
            // 더 많은 정보
        } else {
            echo "Record Updated";
        }
    }
}

function deleteTable() {
    if ( isset( $_POST['submit'] ) ) {
        global $connection;
        $id = $_POST['id'];

        $query = "DELETE FROM user ";
        $query .= "WHERE id = $id ";

        $result = mysqli_query( $connection, $query );
        if ( !$result ) {
            die( "query_failed" .  mysqli_error( $connection ) );
            // 더 많은 정보
        } else {
            echo "Record Deleted";
        }
    }
}

?>