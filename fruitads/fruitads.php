<!-- 
Name: Juanita Hales
Date: December 9th, 2014
Assignment: Week 3 Homework
-->
<!-- declare variables for fruitget to output imagelink from json/db-->
<?php
$content = file_get_contents('http://localhost:8888/Week3/fruitads/fruitget.php');
$contents = json_decode($content);
//setup database connection
$user = "root";
$pass = "root";
$db = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);
// if POST take user input and insert into database
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$fruitname  = $_POST['fruitname']; //get POST values
	$fruitcolor = $_POST['fruitcolor'];
	$fruitimage = $_POST['fruitimage'];
	$stmt   = $db->prepare("INSERT INTO fruits (fruitname, fruitcolor, fruitimage) VALUES (:fruitname, :fruitcolor, :fruitimage);");
	$stmt->bindParam(':fruitname', $fruitname);
	$stmt->bindParam(':fruitcolor', $fruitcolor);
	$stmt->bindParam(':fruitimage', $fruitimage);
	$stmt->execute();
};
?>
<!-- HTML for display page and results -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="author" content="Juanita Hales">
		<meta name="description" content="Homework2">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/custom.css" type="text/css" />
		<title>Fruits!</title>
	</head>
	<body>
		<div id ="logo">
			<h1>Fruits Database</h1>
		</div>
		<!-- form for user to add fruit, color, and submit button -->
		<div id="fruitform">
			<h2 id="addfruit">Add a fruit</h2>
			<form enctype="multipart/form-data" action="fruitads.php" method="POST">
				<label>Fruit Name:</label>
					<input type="text" name="fruitname" placeholder="fruit name" required><br />
				<label>Color:</label>
					<input type="text" name="fruitcolor" placeholder="color" required><br />
				<label>Image:</label>
					<input type="text" name="fruitimage" placeholder="image url" required><br />
					<input id="submit" type="submit" name="submit" value="Submit" />
			</form>
		</div>
		<!-- image container for h2 and fruitget image inserted from parsed json -->
		<div id="imagecontainer">
			<?php 
				foreach($contents->fruits as $fruit){
					echo '<h2 id="rfruit">Featured Fruit</h2>';
					echo "<img id='imagecontainer' src='".$fruit->fruitimage."'/>";
				};
			?>
		</div>
		<!-- table for data to get inserted into -->
		<table id = "fruitdisplay">
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Color</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		<!--query script for database and display in table fruit display-->
		<?php
			$stmt = $db->prepare('SELECT * FROM fruits order by id ASC;');
			$stmt->execute();
			$result = $stmt->fetchall(PDO::FETCH_ASSOC);
			foreach ($result as $row){
				echo 
				'<tr><td>'.$row['id'].'</td>
				<td>'.$row['fruitname'].'</td>
				<td>'.$row['fruitcolor'].'</td>
				<td><a href='.$row['fruitimage'].'>'.$row['fruitimage'].'</a></td>
				<td><a href="deletefruit.php?id='.$row['id'].'">Delete</a></td></tr>';
			}
			echo "</table>";

		?>
		<!-- added tinyurl link to create.php to make links smaller without searching -->
		<div id="tinyurl">
			<form action="http://tinyurl.com/create.php" method="post" target="_blank">
				<table align="center" cellpadding="5" bgcolor="#E7E7F7">
					<tr><td>
						<b>Enter a long URL to make <a href="http://tinyurl.com">tiny</a>:</b><br />
						<input type="text" name="url" size="30">
						<input type="submit" name="submit" value="Make TinyURL!">
					</td></tr>
				</table>
			</form>
		</div>

	</body>
</html>
