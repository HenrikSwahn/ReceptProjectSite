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
					<li>Recipe</li>
					<li><a href="addRecipe.html.php">Add recipe</a></li>
					<li><a href="addIngredients.php">Add Ingredients</a></li>
				<ul>
			</nav>	
			<div id="center_div">
			<section id="main_section">
				<article>
					<header>
						<h1>Recipes in database</h1>
					</header>
					<p>
						<?php
  						include 'connect.php';
  					
 						$query = "SELECT * FROM Recipe";
  						$result = mysql_query($query);
 
				  		echo "<table>";
  						echo "<tr>
  								<th>ID</th>
  								<th>Name</th>
  								<th>Category</th>
  								<th>Time(min)</th>
  								</tr>";
 
  								while($row = mysql_fetch_array($result))
  								{
  									$id = $row['id'];
  									$name = $row['RName'];
  									$cat = $row['RCategory'];
  									$time = $row['RTime']; 
  									echo "<tr>
  											<td>".$id."</td>
  											<td>".$name."</td>
  											<td>".$cat."</td>
  											<td>".$time."</td>	
 											</tr>";
 								}
								echo "</table>";						 
								?>
					</p>	
				</article>
			</section>
			<aside id="side_part">
				<p>Remove recipe</p>
					<form action="removeRecipe.php" method="post">
						<div>
							Recipe Id: <br><input type="number" name="removeId"><br>
						</div>
						<div><input type="submit" value="Remove"></div>
					</form>
			</aside>
			</div>
			<footer id="the_footer">
				Henrik Swahn @ BTH, Karlskrona Sweden
			</footer>
		</div>
	</body>		
</html>
	