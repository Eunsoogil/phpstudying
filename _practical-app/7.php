<?php include "functions.php";
?>
<?php include "includes/header.php";
?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation();
?>

    </aside>
    <!--SIDEBAR-->

    <article class="main-content col-xs-8">

        <?php

/*  Step 1 - Create a database in PHPmyadmin

Step 2 - Create a table like the one from the lecture

Step 3 - Insert some Data

Step 4 - Connect to Database and read data

*/
$connection = mysqli_connect( 'localhost', 'root', '', 'php7' );
if ( $connection ) {
    if ( isset( $_POST['submit']) ) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = "INSERT INTO user(name, password)";
        $query .= "VALUES ('$name', '$password')";
        $result = mysqli_query( $connection, $query );
        if ( !$result ) {
            die( "query failed" );
        }
    }
} else {
    die( "disconnected" );
}

?>
        <form action="7.php" method="post">
            <input type="text" name="name">
            <input type="text" name="password">
            <input type="submit" name="submit">
        </form>
        <div>
           <pre>
            <?php
                if ( isset( $_POST['submit']) ) {
                    $query = "SELECT * FROM user";
                    $result = mysqli_query( $connection, $query );
                    if ( !$result ) {
                        die( "query failed" );
                    }
                    while( $row = mysqli_fetch_assoc( $result ) ) {
                        print_r( $row );
                    }
                }
            ?>
            </pre>
        </div>
    </article>
    <!--MAIN CONTENT-->

    <?php include "includes/footer.php";
?>
