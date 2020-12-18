<?php
if (isset($_GET['submit'])) {
    $recipient="jake.colucci@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["fname"];
    $senderEmail=$_POST["email"];
    $message=$_POST["address"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
	
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "From: ". $senderEmail. "\r\n";
	$headers .= "Reply-To: ". $senderEmail. "\r\n";
	$headers .= "X-Mailer: PHP/" . phpversion();
	$headers .= "X-Priority: 1" . "\r\n";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
		<link rel="stylesheet" href="assets/css/style.css">
		<link href='https://fonts.googleapis.com/css?family=Piazzolla' rel='stylesheet'>
		
        <title>
			Sodus Shores Lodge - Book Now
		</title> 
    </head>
	

    <body>
	
	<!-- Page Header -->
	<img class="banner" src="assets/images/bannerFade.jpg" alt="banner">
	
	<!-- Nav Bar -->
	<ul>
		<li><a href="index.html">               Home</a></li>
		<li><a href="rooms.html">               Rooms</a></li>
		<li><a href="contact.html">             Contact</a></li>
		<li><a href="about.html">               About Us & Sodus Point</a></li>
		<li><a class="active" href="book.php">  BOOK NOW</a></li>
		<li><a href="resources.html">            Resources</a></li>
	</ul>
	
	<!-- Page Content -->
	<h1> Book Now </h1>
	<p>THIS IS NOT A CONFIRMATION OF YOUR BOOKING </p>
	<p>
		This page allows you to get in touch with a member of our staff to officially 
		organize your stay.  By filling out the form below you are giving us all the information
		that we need to set up your booking and get in contact with you about availability.
	</p>
	<p>
		Within a business day after you complete this form, you should receive a text or call 
		depending on your preference for your desired booking.
	</p>
	<p> RULES TO KEEP IN MIND: </p>
	<dl>
		<dt> -NO SMOKING ALLOWED INSIDE THE BUILDING </dt>
		<dt> -No Pets Allowed </dt>
		<dt> -Checkin is at 3:00 pm </dt>
		<dt> -Check-Out is at 11:00 am </dt>
	</dl>
	
	<!-- Booking Form -->
	<div class="bookForm">
		
	<form method="post" action="book.php" enctype="text/plain">
		<fieldset>
		<legend>Book Now Form</legend>
		<br>
		<!-- Personal Info -->
			<fieldset>
				<legend>Personal Information</legend>
				<label for="fname">First name:</label><br>
					<input type="text" id="fname" name="fname"><br>
				<label for="lname">Last name:</label><br>
					<input type="text" id="lname" name="lname"><br>
				<label for="address">Home Address:</label><br>
					<input type="text" id="address" name="address"><br>
				<label for="city">City:</label><br>
					<input type="text" id="city" name="city"><br>
				<label for="zip">Zipcode:</label><br>
					<input type="text" id="zip" name="zip"><br>
			</fieldset>
		<!-- Contact Info -->
			<fieldset>
				<legend>Contact Information</legend>
				<label for="phone">Phone Number:</label><br>
					<input type="text" id="phone" name="phone">
				<label for="canText"> Can We Text This Number? </label>
					<input type="checkbox" id="canText" name="canText">
					<label for="canText"> Check for Yes </label> <br>
				<label for="email">Email:</label><br>
					<input type="email" id="email" name="email"><br>
			</fieldset>
		<!-- Booking Info -->
			<fieldset>
				<legend>Booking Information</legend>
				<label for="checkIn">Desired Check-In:</label>
					<input type="date" id="checkIn" name="checkIn"><br>
				<label for="checkOut">Desired Check-Out:</label>
					<input type="date" id="checkOut" name="checkOut"><br>
				<label for="guests">Number of Guests:</label>
					<input type="number" id="guests" name="guests"><br><br>
			</fieldset>
		<!-- Final Questions and Submit -->
				<label for="guests">Any Additional Questions:</label><br>
				<textarea name="questions" rows="10" cols="50"> </textarea><br>
				<br><br><input type="submit" value="submit">
		</fieldset>
	</form>
	</div>
	<div class="footer">
		<h1> <a href="index.html">   Home     </a> |
			 <a href="rooms.html">   Rooms    </a> |
			 <a href="contact.html"> Contact  </a> |
			 <a href="about.html">   About    </a> |
			 <a href="book.php">    BOOK NOW </a>
		</h1>
		<h2> 8538 Greig Street, Sodus Point, New York, 14555 </h2>
		<h2> Colucci 2020 © </h2>
	</div>
    </body>
</html>