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

<table class="table-striped">
    <tr>
        <th>Game</th>
        <th>Console</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
<!-- begin PHP while-loop to display database query results
     with each row enclosed in LI tags -->
<?php while($row = mysqli_fetch_assoc($games)) :  ?>

<tr>
    <td><?php echo $row['game']; ?></td>
    <td><?php echo $row['console']; ?></td>
    <td><?php echo $row['quantity']; ?></td>
    <td><?php echo $row['price']; ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>

<p class="middle"><a href="enter_new_record.php">Add games</a>: Open the used game entry form.</p>
		</section>
	</div>
</div> <!-- close container -->
</body>
<script src="js/bootstrap.min.js"></script>
</html>
