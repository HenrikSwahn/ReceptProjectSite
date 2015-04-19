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
				<li>Add recipe</li>
				<li><a href="addIngredients.php">Add Ingredients</a></li>
			<ul>
		</nav>
		<div id="center_div">
			<section id="main_section">
				<article>
					<header>Add recipe</header>
					<p>
						<form action="create_recipe.php" method="post">
							<div>
								ID: <br><input type="number" name="id"><br>
								Recipe: <br><input type="text" name="Recipe"><br>
								Category: <br><input type="text" name="Category"><br>
								Time(min): <br><input type="number" name="Time"><br>
								ImageURL:<br><input type="text" name="URL"><br>
								<label for="RDescription_text">Description<br></label>
								<textarea id="RDescription_text" name="RDescription_text" rows="15" cols="70"></textarea><br>

							    <p>Ingredient 1</p>
							    IngedientID: <input type="number" name="ingrId1">
								Amount: <input type="number" name="amount1">
								Unit: <input type="text" name="unit1"><br><br>

								 <p>Ingredient 2</p>
							    IngedientID: <input type="number" name="ingrId2">
								Amount: <input type="number" name="amount2">
								Unit: <input type="text" name="unit2"><br><br>

								<p>Ingredient 3</p>
							    IngredientID: <input type="number" name="ingrId3">
								Amount: <input type="number" name="amount3">
								Unit: <input type="text" name="unit3"><br><br>

								<p>Ingredient 4</p>
							    IngredientID: <input type="number" name="ingrId4">
								Amount: <input type="number" name="amount4">
								Unit: <input type="text" name="unit4"><br><br>

								<p>Ingredient 5</p>
							    IngredientID: <input type="number" name="ingrId5">
								Amount: <input type="number" name="amount5">
								Unit: <input type="text" name="unit5"><br><br>

								<p>Ingredient 6</p>
							    IngredientID: <input type="number" name="ingrId6">
								Amount: <input type="number" name="amount6">
								Unit: <input type="text" name="unit6"><br><br>

								<p>Ingrediens 7</p>
							    IngredientID: <input type="number" name="ingrId7">
								Amount: <input type="number" name="amount7">
								Unit: <input type="text" name="unit7"><br><br>

								<p>Ingredient 8</p>
							    IngredientID: <input type="number" name="ingrId8">
								Amount: <input type="number" name="amount8">
								Unit: <input type="text" name="unit8"><br><br>

								<p>Ingredient 9</p>
							    IngredientID: <input type="number" name="ingrId9">
								Amount: <input type="number" name="amount9">
								Unit: <input type="text" name="unit9"><br><br>

								<p>Ingredient 10</p>
							    IngredientID: <input type="number" name="ingrId10">
								Amount: <input type="number" name="amount10">
								Unit: <input type="text" name="unit10"><br><br>

								<p>Ingredient 11</p>
							    IngredientID: <input type="number" name="ingrId11">
								Amount: <input type="number" name="amount11">
								Unit: <input type="text" name="unit11"><br><br>

								<p>Ingredient 12</p>
							    IngredientID: <input type="number" name="ingrId12">
								Amount: <input type="number" name="amount12">
								Unit: <input type="text" name="unit12"><br><br>

								<p>Ingredient 13</p>
							    IngredientID: <input type="number" name="ingrId13">
								Amount: <input type="number" name="amount13">
								Unit: <input type="text" name="unit13"><br><br>

								<p>Ingredient 14</p>
							    IngredientID: <input type="number" name="ingrId14">
								Amount: <input type="number" name="amount14">
								Unit: <input type="text" name="unit14"><br><br>

								<p>Ingredient 15</p>
							    IngredientID: <input type="number" name="ingrId15">
								Amount: <input type="number" name="amount15">
								Unit: <input type="text" name="unit15"><br><br>
							</div>
							<div><input type="submit" value="submit" name="submit"/></div>
						</form>
						
					</p>
				</article>
			</section>
			<aside id="side_part">
				<p>Ingredients</p>
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
			</aside>
		</div>
		<footer id="the_footer">
			Henrik Swahn @ BTH, Karlskrona Sweden
		</footer>
	</div>
	</body>
	
</html>
	
		