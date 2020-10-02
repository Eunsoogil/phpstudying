<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

    echo rand(1,1000) . "<br>";
    
    $string = "ansiodnqwoidnioqw";
    
    echo strlen($string) . "<br>";
    
    $values = ['dqawdqwd', 123545, 'qwdqwd', 45674, $string];
    
    if(in_array($string, $values)){ // boolean 리턴
        
        echo "found it";
        
    } else {
        
        echo "nope";
        
    }
    

/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>