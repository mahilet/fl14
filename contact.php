<?php require 'includes/config.php';?>
<?php include 'includes/header.php';?>
 <h1> Contact us</h1>
 <p>
 Why?becouse we care!!
 </p>
<?php

if(isset($_POST['first_name']))

{//if there's data,show it
	//echo $_POST['FirstName'];
	$message = process_post();
	
	safeEmail('mhalle02@seattlecentral.edu','test subject',$message);
	
	echo 'Thank you for you email !';
}else{//show the form
		
	echo '
	
	<form action="contact.php" method="post">
	First Name: <input type="text" name="first_name"  required="required" />
	<br />
	Email: <input type="email" name="email" required="required" placeholder="Enter a valid email address" />
	<br />
	comments:<textarea name="comments"></textarea>
	<input type="submit" value="Click me!" />
	</form>
	
	';	
}
?>
<?php include 'includes/footer.php';?>