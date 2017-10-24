<!DOCTYPE html>
<html>
	<head>
		<title>Admin panel</title>
		<link rel="stylesheet" type="text/css" href="panel.css">
		<?php
			if ($_POST["username"] != "Danko24real") {
				header('Location: login.html'); 
				exit();
			};
		?>
	</head>
	<body>
		<div id="Header" >
			
			<h1>Admin panel</h1>
			<p>Welcome, <?php echo $_POST["username"]?>!</p>
			
		</div>
		<div id="Panel">
			
			
			
		</div>
		
		
		
		
	</body>
</html>
