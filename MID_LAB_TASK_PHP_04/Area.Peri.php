<!DOCTYPE HTML>
<html>
<body>
	<form method="post">
	Length:<input type="number" name="width"><br><br>
	width:<input type="number" name="length"><br><br>
	<input type="submit" name="submit" value="Calculate">	
	</form>	
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$length=$_POST['length'];
		$width=$_POST['width'];
		$area=$length*$width;
		$peri=2*($length+$width);
		echo "The area of rectangle is $area "."<br>";
		echo "The area of perimeter is $peri";
	}


?>