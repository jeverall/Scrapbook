
<!doctype html>
<html>
<head>
    <title>My First Webpage</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<style>
	#form {background-color:#ddd; border:inset; width:185px; padding:5px;}
	body {width:100%;}
	
	</style>
</head>
<body>

<div id="form">

	<form method="post">
	
		<label for="name">Name:</label> <br/>
		<input type="text" name="name"/><br/><br/>
		
		<input type="submit" name="submit" value="Submit your name"/>
		
	</form>

</div>

<br/>
	<?php
	
		$nameBox = array("Jim", "Leigh", "Shirley");
		
		
	
		if ($_POST["submit"]) { 
		
			if ($_POST["name"]) {
				
			foreach ($nameBox as $name) {
				if ($_POST["name"]==$name) {
					echo "I know you! Your name is ".$name;
					
					$knowYou=1;
				}
				
			}
			
			if (!$knowYou) echo "I don't know you, ".$_POST['name'];
			
		} else {
			
			echo "Please enter your name.";
		
		}}
	
	?>	


</body>
</html>
