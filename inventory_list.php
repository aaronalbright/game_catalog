<?php include 'database.php'; ?>
<?php
	$query = "SELECT * FROM game_catalog ORDER BY game";
	$games = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>Games Galor Inc. Inventory</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<div class="container">
	<div class="row">
		<section class="col-md-12">
<h1>GamesGalor Inc.</h1>

<h2>Used Game Inventory</h2>

<table class="table table-striped">
    <tr>
        <th>Game</th>
        <th>Console</th>
        <th>Quantity</th>
        <th>Price</th>
				<th>Customer</th>
    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($games)) :  ?>

<tr>
    <td><?php echo $row['game']; ?></td>
    <td><?php echo $row['console']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['price']; ?></td>
		<td><?php echo $row['customer_initials']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop -->
</table>

<a class="btn btn-lg btn-primary" href="enter_new_game.php">Add a game</a>
<a class="btn btn-lg btn-default" href="index.html">Home</a>
		</section>
	</div>
</div> <!-- close container -->
</body>
<script src="js/bootstrap.min.js"></script>
</html>
