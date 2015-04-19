<?php
ob_start();
include 'connect.php';
	
		$idField = $_POST['removeId'];

		if($idField != "")
		{
			$query = "DELETE FROM Recipe WHERE id = '$idField'";
			mysql_query($query) or die(mysql_error());

			$query = "DELETE FROM rel_RecipeIngredients WHERE FkRecipe = '$idField'";
			mysql_query($query) or die(mysql_error());
			header('Location:  index.php');
		}
		else
		{
			echo "Error, must give recepie a name!";
		}
?>