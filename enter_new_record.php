<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Enter New Game </title>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
    <script src="js/enter.js"></script>
</head>

<body>
<div id="container">

<h1>Add a game to the catalog </h1>

<p class="middle"><a href="inventory_update.php">View full inventory</a></p>

<div id="games">

<form id="gameform" method="post" autocomplete="off">
<!-- autocomplete="off" ensures form will be empty if user clicks
     the browser's Back button -->
    <label for="game">Game Title </label>
	<input type="text" name="game" id="game" required>

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

    <label for="quantity">Quantity </label>
	<input type="number" name="quantity" id="quantity" max="999" required>

    <label for="price">Unit Price </label>
	<input type="number" name="price" id="price" max="99.99" step="0.01" required>
    <!-- step="0.01" (above) allows decimal to be entered -->

	<input type="submit" id="submit" value="Submit">
</form>

</div>

<div id="success">
    <p class="announce">Thank you! Your order has been received..</p>
    <p class="middle"><a href="enter_new_record.php">Return to the form</a></p>
</div>

</div> <!-- close container -->
</body>
</html>
