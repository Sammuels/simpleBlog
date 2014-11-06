<?php

$categories = ['turizam' => 'Turizam', 
							 'ugostiteljstvo' => 'Ugostiteljstvo', 
							 'poljoprivreda' => 'Poljoprivreda'];

if(!empty($_POST)) {
	var_dump($_POST);
	
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Unos</title>
		<meta charset='utf-8'>
	</head>
	<body>
		<h2>Stranica za unos</h2>
		
		<form name="unos" action="showpost.php" method="post">
			Naslov:  <input type="text" name="title" value="<?php echo !empty($_POST['title']) ? $_POST['title'] : "Nema naslova"; ?>"><br /><br />
			Sadržaj: <textarea name="content" rows="4" cols="50"><?php echo !empty($_POST['content']) ? $_POST['content'] : "Nema sadržaja"; ?></textarea><br /><br />
			<select name="category">
			<?php 
				foreach($categories as $key=>$value) {
					$attribute = "";
					if ($key == $_POST['category']) {
						$attribute = "selected";
					}
					echo '<option value="'. $key . '" '. $attribute . '>' . $value . '</option>';	
				}


			?>
				
			</select>
			<input type="submit" value="Submit">
		</form>
		
	</body>
</html>
