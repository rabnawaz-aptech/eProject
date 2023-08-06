<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<?php 

	if(isset($_POST['theme'])){
	$t = $_POST['theme'];
	setcookie("theme", $t , time() + (86400 * 30) ,  "/");

if($t == "dark"){
	echo "<style>
			h1{
				color: yellow;
				background-color: #333;
			}
			</style>";
}

else {
	echo '<link rel="stylesheet" type="text/css" href="light-theme.css">';
}

}

echo $_COOKIE['theme'];


 ?>
 </head>
 <body>

 	<form method="POST">
 		<button type="submit" value="light" name="theme">Light Theme</button>
 		<button type="submit" value="dark" name="theme">Dark Theme</button>
 	</form>

 	<h1>Theme Color</h1>
 
 </body>
 </html>