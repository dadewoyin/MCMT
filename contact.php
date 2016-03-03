<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>MCMT</title>
<meta name="description" content="MCMT is a brand founded by Maria Cecilia Mendoza-Tinoco.">
<meta name="keywords" content="MCMT art painting paint Maria Cecilia Mendoza Tinoco creative nice paintings">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet">
</head>
<body>

<header>

    <div id="logo-container"> 
        <img src="Assets/MCMT.jpg" alt="MCMT logo" id="logo-img">
    </div>

    <nav>
        <ul>
   		   <li> <a href="index.html"> Home </a> </li>
        	<li> <a href=""> Biography </a> </li>
        	<li> <a href=""> Portfolio </a> </li>
        	<li> <a href="contact.html"> Contact </a> </li>
        </ul>
    </nav>
    
</header>

<?php

	// Variables for user input
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$submit = $_POST['submit'];

	if ($submit) {

		// Form validation

		if (!$name) {

			$error = "<br> Please enter your name";

		}

		if (!$email) {

			$error .= "<br> Please enter your email";

		}

		if ($_POST['email'] !="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
 	 	 	
 	 	 	$error .= "<br> Please enter a valid email address";

	 	 }

	 	 if ($error) {

	 	 	$result = "<strong> There were error(s) found in your form: </strong>".$error;

	 	 } else {

	 	 	// Send email if input passes validation

	 	 	if (mail("mendozamcecilia@gmail.com", "MCMT Contact",
				"Name: ".$name.
				"\r\nEmail: ".$email.
				"\r\nMessage: ".$message
			)) {

	 	 		$result = "<p class='center-align'><strong>Thank you!</strong> I'll be in touch. </p>";
			
			} else {

				// Output if sending email fails

				$result = "Sorry, there was an error sending your message. Please try again later.";

			}

	 	 }

	}

?>

<div id="wrapper">

	<h1 class="center-align"> Contact </h1>

	<p class="center-align"> For general inquiries, please fill out the form below. </p>

	<form method="post">

		<input type="text" name="name" placeholder="Name" class="form-input" required />

		<input type="email" name="email" placeholder="Email" class="form-input" required />

		<textarea placeholder="Message (optional)" name="message" id="textarea"></textarea>

		<br> <br>

		<input type="submit" value="Send" name="submit" id="submit">

		<?php echo $result ?>

	</form>

</div>
    
<footer>

	<p id="copyright-abs"> Copyright 2016 © MCMT </p>

</footer>
</body>
</html>
