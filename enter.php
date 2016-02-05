<?php include 'database.php'; ?>

<?php

if (isset($_POST['game']) && isset($_POST['console'])) {

    $game = sanitizeMySQL($conn, $_POST['game']);
    $console = sanitizeMySQL($conn, $_POST['console']);
    $price = sanitizeMySQL($conn, $_POST['price']);
    $quantity = sanitizeMySQL($conn, $_POST['quantity']);

    $query = "INSERT INTO game_catalog (game, console, price, quantity) VALUES (?, ?, ?, ?)";

    if ( $stmt = mysqli_prepare($conn, $query) ) {

        mysqli_stmt_bind_param($stmt, 'ssdi',
        $game,
        $console,
        $price,
        $quantity
        );

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
  } else {
    echo "Failed to enter!";
  }

  function sanitizeMySQL($conn, $var) {
      $var = strip_tags($var);
      $var = mysqli_real_escape_string($conn, $var);
      return $var;
  }
?>
