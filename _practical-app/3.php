<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
if(false){
    echo "I HATE PHP";
}elseif(false){
    echo "I HATE PHP TOO";
}else{
    echo "well.. I think Im getting used to php";
}
	
for($i = 1; $i <= 10; $i++){
    echo $i . "<br>";
}

$state = "NEED REST";
switch($state){
    case "I HATE PHP" : echo "well.. I think Im getting used to php"; break;
    case "I HATE PHP TOO" : echo "well.. I think Im getting used to php"; break;
    case "WHAT THE HELL HAPPEN TO THIS LANGUAGE" : echo "well.. I think Im getting used to php"; break;
    case "WHERE IS AUTO-COMPLETEION" : echo "well.. I think Im getting used to php"; break;
    default : echo "SHUT UP AND STUDY"; break;
}
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>