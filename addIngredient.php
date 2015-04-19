<?php
ob_start();
include 'connect.php';
	
		$idField = $_POST['id'];
		$nameField = $_POST['name'];
		if($nameField != "")
		{
			$query = "INSERT INTO Ingredients(id,GName)VALUES
			('$idField','$nameField')";
							
			mysql_query($query) or die(mysql_error());
			header('Location:  addIngredients.php');
		}
		else
		{
			echo "Error, must give recepie a name!";
		}
?>