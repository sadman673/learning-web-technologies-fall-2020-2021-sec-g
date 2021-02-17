<?php
if(isset($_REQUEST['submit'])){
	if($_POST['Email']==""){
		echo "Input is Null";
	}
	else{
		echo "Email:" .$_POST['Email'];
	}
}



?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Email</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>EMAIL</legend>
			<input type="email" name="Email">
			<input type="submit" name="submit" value="Submit">
			
		</fieldset>
	
	</form>
	
</body>
</html>