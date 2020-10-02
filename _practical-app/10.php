<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll
    
	

		
	*/
	
    class Dog {
        var $eye_colors = "black";
        static $nose = "running";
        protected $fur_color = "dark";
        
        function showAll(){
            echo $this -> eye_colors;
            echo "<hr>";
            echo Dog::$nose;
            echo "<hr>";
            echo $this -> fur_color;
            echo "<hr>";
        }
    }
    
    class Pitbull extends Dog {
        function showAll(){
            echo $this -> eye_colors;
            echo "<hr>";
            echo Dog::$nose;
            echo "<hr>";
            echo $this -> fur_color;
            echo "<hr>";
        }
    }
    
    $mimi = new Dog();
    $jack = new Pitbull();
    $mimi -> showAll();
    $jack -> showAll();
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>