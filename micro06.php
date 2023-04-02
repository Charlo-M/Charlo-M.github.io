<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>micro06.php</title>
  </head>
  <body>
    <?php
        if (isset($_GET['error'])) {
          echo "<p style='color: red'>" . $_GET['error'] . "</p>";
        }

        if (isset($_GET['secretText'])) {
        echo "<p>" . $_GET['secretText'] . "</p>";
      }
?>
    <form class="" action="micro06_process.php" method="POST">
      <label for="">Username: </label>
      <input type="text" name="username" value="">
      <br>
      <label for="">Password: </label>
      <input type="text" name="password" value="">
      <br>
      <input type="submit" name="submit" value="Log In">


    </form>

  </body>
</html>
