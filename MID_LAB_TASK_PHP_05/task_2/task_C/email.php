<!DOCTYPE html>
<html>
<head>
	<title>Email Input field</title>
</head>
<body>
	<form method="POST" action="#">
		<fieldset>
			<legend>EMAIL</legend>
			Email: 		<input type="text" name="Email" value="<?php if(isset($_POST['Email'])){ echo $_POST['Email']; }?>"> <br>
			
						<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
</body>
</html>