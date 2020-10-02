<?php include "db.php" ?>
<?php include "functions.php" ?>
<?php createTable();

//    if ( $username && $password ) {
// 있는지 없는지 return, boolean
//        echo $username . "<br>";
//        echo $password;
//    } else {
//        echo "type your info";
//    }

//    $connection = mysqli_connect( 'localhost', 'root', '', 'loginapp' );
//url, id, pw, db
//
//    if ( $connection ) {
//        echo "We are connected";
//    } else {
//        die( "Database connection failed" );
//        // 출력 후 밑의 코드 종료
//    }

?>
<?php include "includes/header.php" ?>

<div class="col-xs-6">
    <h1 class="text-center">Create</h1>
    <form action="login_create.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
    </form>

</div>
<?php include "includes/footer.php" ?>
