<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <title>Contact Form</title>
		<link href="form.css" type="text/css" rel="stylesheet"/>
	</head>

	<body>
	
  <!--creates variables for php code-->
	<?php
	if($_POST["firstname"] && $_POST["lastname"] && $_POST["number"] && $_POST["email"])
	{
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
    $number=$_POST["number"];
		$email=$_POST["email"];

    
		?>
		<!--prints out thank you message of users first name, email and telephone number-->

		<h1>Thank You!</h1>
		<h3>Thank you so much <?= $firstname ?> for your intrest in meeting and adoption of our loving animals</h3>
    <h4>We will contact you shortly via or email: <?= $email ?> or your phone number of: <?= $number ?> 
    to reserve a time </h4>
		
		<?php
    ?>
    <!--returns user to form page if fields are not properly completed-->
   <a href="homepage.html">Click here to return to the gallery</a>
   <?php
    
	}
	else
	{
		?>
     <!--returns user to form page if fields are not properly completed-->
		<a href="form.html">Please return and comnplete all fields</a>
	<?php
	}
	?>

	</body>
</html>