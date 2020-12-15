<?php
  session_start();

  $user = (isset($_SESSION['user_id'])) ? ['user' => $_SESSION['user_id'], 'email' => $_SESSION['email']] : null;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Derecho</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="login.php">Login</a> or
      <a href="signup.php">SignUp</a>
    <?php endif; ?>
  </body>
</html>
