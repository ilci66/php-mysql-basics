<?php 
	include('config/db_connect.php');

	// write query for all pizzas, standard sql
	$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array (MYSQLI_ASSOC makes the results and associative array)
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise, clear up memory/free space)
	mysqli_free_result($result);

	// close connection (again, good practise)
	// in sequelize I diidn't have to close thanks to the pool. 
	// Each call actually borrows a connection temporarily 
	// and then returns it to the pool when done.
	mysqli_close($conn);

	// print_r($pizzas);
	// print_r("Title ==> " . $pizzas[0]["title"])
?>

<!DOCTYPE html>
<html>
	
	<?php include('header-footer/header.php'); ?>

	
	<h4 class="center grey-text">Pizzas!</h4>

	<div class="container">
		<div class="row">

			<?php foreach($pizzas as $pizza): ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
							<ul class="grey-text">
								<?php foreach(explode(',', $pizza['ingredients']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">more info</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

			<?php if(count($pizzas) >= 3): ?>
				<p>There is more than 3 pizza</p>
			<?php else: ?>
				<p>There are fewer than 3 pizzas</p>
			<?php endif; ?>

		</div>
	</div>

	<?php include('header-footer/footer.php'); ?>

</html>