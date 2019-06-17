<?php

	include('config/db_connect.php');
	require_once('templates/header.php');
	
	
	// write query for all pizzas
	//$sql = "SELECT * FROM my_table WHERE id=$_GET[id]";
  //$result = mysql_query($sql);
//$row = mysql_fetch_array($result);
	$sql = "SELECT title,ingredients,id FROM pizzas WHERE id=$_SESSION[id]";
	
	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	
	// close connection
	mysqli_close($conn);


?>

<!DOCTYPE html>
<html>

	

	<h4 class="center grey-text">Pizzas!</h4>
	
	<div class="container">
		<div class="row">

			<?php foreach($pizzas as $pizza): ?>

				<div class="col s6 m4">
					<div class="card medium z-depth-0">
						<img src="img/pizza.svg"class="pizza">
						<div class="card-content center">
							<h5><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul class="grey-text">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>"><img src="img/i.svg"height="22.5px" class="i"></a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

	<?php include('templates/footer.php'); ?>

</html>
