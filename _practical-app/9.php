<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	if($_GET){
        $name = "id";
        $value = $_GET["id"];
        $expiration = time() + (60 * 60 * 24 * 7);
        setcookie($name, $value, $expiration);
        $name = "password";
        $value = $_GET["password"];
        $expiration = time() + (60 * 60 * 24 * 7);
        setcookie($name, $value, $expiration);
        
        session_start();
        $_SESSION['id'] = $_GET["id"];
        $_SESSION['password'] = $_GET["password"];
        echo $_SESSION['id'] . " " . $_SESSION['password'];
    }
	?>
    <a href="9.php?id=123&password=123123">click</a>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>