<?php
ob_start();
include 'connect.php';

		$idField = $_POST['id'];
		$recField = $_POST['Recipe'];
		$catField = $_POST['Category'];
		$timeField = $_POST['Time'];
		$URLField = $_POST['URL'];
		$descField = $_POST['RDescription_text'];


		/*First ingredient*/
		$inIdField1 = $_POST['ingrId1'];
		$inAmField1 = $_POST['amount1'];
		$inUnField1 = $_POST['unit1'];

		/*Second ingredient*/
		$inIdField2 = $_POST['ingrId2'];
		$inAmField2 = $_POST['amount2'];
		$inUnField2 = $_POST['unit2'];

		/*Third ingredient*/
		$inIdField3 = $_POST['ingrId3'];
		$inAmField3 = $_POST['amount3'];
		$inUnField3 = $_POST['unit3'];

		/*Foruth ingredient*/
		$inIdField4 = $_POST['ingrId4'];
		$inAmField4 = $_POST['amount4'];
		$inUnField4 = $_POST['unit4'];

		/*Fifth ingredient*/
		$inIdField5 = $_POST['ingrId5'];
		$inAmField5 = $_POST['amount5'];
		$inUnField5 = $_POST['unit5'];

		/*Sixth ingredient*/
		$inIdField6 = $_POST['ingrId6'];
		$inAmField6 = $_POST['amount6'];
		$inUnField6 = $_POST['unit6'];

		/*Seventh ingredient*/
		$inIdField7 = $_POST['ingrId7'];
		$inAmField7 = $_POST['amount7'];
		$inUnField7 = $_POST['unit7'];

		/*Eight ingredient*/
		$inIdField8 = $_POST['ingrId8'];
		$inAmField8 = $_POST['amount8'];
		$inUnField8 = $_POST['unit8'];

		/*Ninthe ingredient*/
		$inIdField9 = $_POST['ingrId9'];
		$inAmField9 = $_POST['amount9'];
		$inUnField9 = $_POST['unit9'];

		/*Tenth ingredient*/
		$inIdField10 = $_POST['ingrId10'];
		$inAmField10 = $_POST['amount10'];
		$inUnField10 = $_POST['unit10'];

		/*Eleventh ingredient*/
		$inIdField11 = $_POST['ingrId11'];
		$inAmField11 = $_POST['amount11'];
		$inUnField11 = $_POST['unit11'];

		/*Twelth ingredient*/
		$inIdField12 = $_POST['ingrId12'];
		$inAmField12 = $_POST['amount12'];
		$inUnField12 = $_POST['unit12'];

		/*Thirnteenth ingredient*/
		$inIdField13 = $_POST['ingrId13'];
		$inAmField13 = $_POST['amount13'];
		$inUnField13 = $_POST['unit13'];

		/*Fourtenth ingredient*/
		$inIdField14 = $_POST['ingrId14'];
		$inAmField14 = $_POST['amount14'];
		$inUnField14 = $_POST['unit14'];

		/*Fifthteenth ingredient*/
		$inIdField15 = $_POST['ingrId15'];
		$inAmField15 = $_POST['amount15'];
		$inUnField15 = $_POST['unit15'];

		$counter = 0;

		if($inIdField1 != "" && $inAmField1 != "" && $inUnField1 != "")
		{
			$counter = $counter +1;
			if($inIdField2 != "" && $inAmField2 != "" && $inUnField2 != "")
			{
				$counter = $counter +1;
				if($inIdField3 != "" && $inAmField3 != "" && $inUnField3 != "")
				{
					$counter = $counter +1;
					if($inIdField4 != "" && $inAmField4 != "" && $inUnField4 != "")
					{
						$counter = $counter +1;
						if($inIdField5 != "" && $inAmField5 != "" && $inUnField5 != "")
						{
							$counter = $counter +1;
							if($inIdField6 != "" && $inAmField6 != "" && $inUnField6 != "")
							{
								$counter = $counter +1;
								if($inIdField7 != "" && $inAmField7 != "" && $inUnField7 != "")
								{
									$counter = $counter +1;
									if($inIdField8 != "" && $inAmField8 != "" && $inUnField8 != "")
									{
										$counter = $counter +1;
										if($inIdField9 != "" && $inAmField9 != "" && $inUnField9 != "")
										{
											$counter = $counter +1;
											if($inIdField10 != "" && $inAmField10 != "" && $inUnField10 != "")
											{
												$counter = $counter +1;
												if($inIdField11 != "" && $inAmField11 != "" && $inUnField11 != "")
												{
													$counter = $counter +1;
													if($inIdField12 != "" && $inAmField12 != "" && $inUnField12 != "")
													{
														$counter = $counter +1;
														if($inIdField13 != "" && $inAmField13 != "" && $inUnField13 != "")
														{
															$counter = $counter +1;
															if($inIdField14 != "" && $inAmField14 != "" && $inUnField14 != "")
															{
																$counter = $counter +1;
																if($inIdField15 != "" && $inAmField15 != "" && $inUnField15 != "")
																{
																	$counter = $counter +1;
																}
															}
														}
													}
												}
											}
										}
									}
								}
							}
						}
					}
				}
			}
		}
		echo $counter;

		if($idField != "")
		{
			if($recField != "")
			{

				if($counter >= 1)
				{
					$query = "INSERT INTO Recipe(id,RName,RCategory,RDesc,RTime,RImageURL)VALUES
						('$idField','$recField','$catField','$descField','$timeField','$URLField')";		
					mysql_query($query) or die(mysql_error());

					$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
						('$idField','$inIdField1','$inAmField1','$inUnField1')";
					mysql_query($query) or die(mysql_error());

					if($counter >=2)
					{
						$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
							('$idField','$inIdField2','$inAmField2','$inUnField2')";
						mysql_query($query) or die(mysql_error());
						
						if($counter >=3)
						{
							$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
								('$idField','$inIdField3','$inAmField3','$inUnField3')";
							mysql_query($query) or die(mysql_error());

							if($counter >=4)
							{
								$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
									('$idField','$inIdField4','$inAmField4','$inUnField4')";
								mysql_query($query) or die(mysql_error());	

								if($counter >=5)
								{
									$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
										('$idField','$inIdField5','$inAmField5','$inUnField5')";
									mysql_query($query) or die(mysql_error());

									if($counter >=6)
									{
										$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
											('$idField','$inIdField6','$inAmField6','$inUnField6')";
										mysql_query($query) or die(mysql_error());

										if($counter >=7)
										{
											$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
												('$idField','$inIdField7','$inAmField7','$inUnField7')";
											mysql_query($query) or die(mysql_error());

											if($counter >=8)
											{
												$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
													('$idField','$inIdField8','$inAmField8','$inUnField8')";
												mysql_query($query) or die(mysql_error());

												if($counter >=9)
												{
													$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
														('$idField','$inIdField9','$inAmField9','$inUnField9')";
													mysql_query($query) or die(mysql_error());

													if($counter >=10)
													{
														$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
															('$idField','$inIdField10','$inAmField10','$inUnField10')";
														mysql_query($query) or die(mysql_error());

														if($counter >=11)
														{
															$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
																('$idField','$inIdField11','$inAmField11','$inUnField11')";
															mysql_query($query) or die(mysql_error());

															if($counter >=12)
															{
																$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
																	('$idField','$inIdField12','$inAmField12','$inUnField12')";
																mysql_query($query) or die(mysql_error());

																if($counter >=13)
																{
																	$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
																		('$idField','$inIdField13','$inAmField13','$inUnField13')";
																	mysql_query($query) or die(mysql_error());

																	if($counter >=14)
																	{
																		$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
																			('$idField','$inIdField14','$inAmField14','$inUnField14')";
																		mysql_query($query) or die(mysql_error());

																		if($counter >=15)
																		{
																			$query = "INSERT INTO Rel_RecipeIngredients(FkRecipe,FkIngredients,amount,unit)VALUES
																				('$idField','$inIdField15','$inAmField15','$inUnField15')";
																			mysql_query($query) or die(mysql_error());	
																		}	
																	}	
																}	
															}	
														}	
													}	
												}	
											}	
										}	
									}	
								}
							}	
						}	
					}
					header('Location: index.php');
				}
			}
			else
			{
				echo "Error, must give recepie a name!";
			}
		}
		else
		{
			echo "Error, must give a id";
		}

?>