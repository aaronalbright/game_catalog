<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Enter New Game </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
<div class="container">
  <div class="row">
  <div class="col-xs-12">
<h1>GamesGalor</h2>

<h3>Add a game to the catalog</h3>

<p class="middle"><a href="inventory_list.php">View full inventory</a></p>
  </div>

<div class="col-xs-12">
<div id="games">

<form id="gameform" method="post" autocomplete="off">

    <div class="form-group">
    <label for="game">Game Title </label>
	<input class="form-control" type="text" name="game" id="game" required>
    </div>

    <div class="form-group">
    <label for="console">Console </label>
    <select name="console" id="console" required>
        <option value=""></option>
        <option value="PS3">Playstation 3</option>
        <option value="PS4">Playstation 4</option>
        <option value="X360">Xbox 360</option>
        <option value="XBO">Xbox One</option>
        <option value="Wii">Nintendo Wii</option>
        <option value="WiiU">Nintendo Wii U</option>
        <option value="PC">PC</option>
    </select>
  </div>

<div class="form-group">
    <label for="quantity">Quantity </label>
	<input class="form-control" type="number" name="quantity" id="quantity" max="999" required>
</div>

<div class="form-group">
    <label for="price">Price Paid</label>
	<input class="form-control" type="number" name="price" id="price" max="99.99" step="0.01" required>
</div>

<div class="form-group">
  <label for="customer">Customer Initials</label>
<input class="form-control" type="text" name="customer" id="customer" required>
</div>

<div class="form-group">
	<input class="btn btn-success" type="submit" id="submit" value="Submit">
</form>
</div>

</div>

<div id="success">
    <p class="announce">Thank you! Your order has been received..</p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div>
</div> <!-- close container -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
