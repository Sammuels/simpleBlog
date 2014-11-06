<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Izlist</title>
		<meta charset='utf-8'>
	</head>
	<body>
	<h2>Stranica za izlist</h2>
	<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "admin";
	$dbname = "simpleblog";
	
	//Create connection
	$conn = new mysqli ($servername, $username, $password, $dbname);
	//Check connection
	if ($conn -> connect_error) {
		die ("Connection failed: " . $conn -> connect_error);
	}
	
	$sql2 = "INSERT INTO category (name) VALUES ('$_POST[category]')";
	
	$sql = "INSERT INTO article (title, content) VALUES ('$_POST[title]','$_POST[content]')";
	
	if ($conn -> query($sql) === TRUE) {
		$upcategory = $_POST['category'];
		
		echo "<h3> Uspješno ste dodali novi članak! </h3>";
		
		echo "Naslov: ". $_POST['title'] . "<br />" .
				 "Sadržaj: " . $_POST['content'] . "<br />" . "Kategorija: " . ucfirst($upcategory);
	}
	
	else {
		echo "Error: " . $sql . "<br />" . $conn -> error;
	}
	
	$conn -> close();
	?>
	</body>
</html>
