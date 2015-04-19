<?php
header('Content-Type: text/plain; charset=utf-8');
$host = "127.0.0.1";
$db = "Recipes";
$user = "root";
$pass = "";

$con = mysql_connect($host,$user,$pass);

if(!con)
{
	die("Database server connection failed");
}
else
{
	$dbconnect = mysql_select_db($db,$con);

	if(!$dbconnect)
	{
		die("Unable to connect to specified database");
	}
	else
	{
		$query = "SELECT * FROM rel_RecipeIngredients";
		$resultset = mysql_query($query,$con);

		$records = array();

		while($row = mysql_fetch_assoc($resultset))
		{
			$records[] = $row;
		}

		echo json_encode($records);
	}
}
?>