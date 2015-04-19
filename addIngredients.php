<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Project Site</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<div id="main_div">
			<header id="top_header">
				<h1>Project Site<h1>
			</header>
			<nav id="top_menu">
				<ul>
					<li><a href="index.php">Recipe</a></li>
					<li><a href="AddRecipe.html.php">Add recipe</a></li>
					<li>Add Ingredients</li>
				</ul>
			</nav>
			<div id="center_div">
				<section id="main_section">
					<article>
						<header>
							<h1>Ingridients in database</h1>
						</header>
						<p>
							<?php
							include "connect.php";
							$query = "SELECT * FROM Ingredients";
  							$result = mysql_query($query);
 
				  			echo "<table>";
  							echo "<tr>
  									<th>ID</th>
  									<th>Name</th>
  									</tr>";
 
  							while($row = mysql_fetch_array($result))
  							{
  								$id 	 = $row['id'];
  								$name     = $row['GName'];
  								echo "<tr>
  										<td>".$id."</td>
  										<td>".$name."</td>
 									</tr>";
 							}
							echo "</table>";				
							?>
						</p>
					</article>
				</section>
				<aside id="side_part">
					<h4>Add Ingredient<h4>
					<form action="addIngredient.php" method="post">
						<div>
							Id: <br><input type="number" name="id"><br>
							Name: <br><input type ="text" name="name"><br><br>
						</div>
						<div><input type="submit" value="add"></div>
					</form>
				</aside>
			</div>
			<footer id="the_footer">
				Henrik Swahn @ BTH, Karlskrona Sweden
			</footer>
		</div>
	</body>
</html>
		