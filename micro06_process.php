<?php

if($_POST['submit']){

  // $username = $_POST['username'];
  // $password = $_POST['password'];

  if(empty($_POST['username'])){
    header("Location: micro06.php?error=Username is missing");
    exit;
  }

  if(empty($_POST['password'])){
    header("Location: micro06.php?error=Password is missing");
    exit;
  }

  if ($_POST['username'] !== 'pikachu' || $_POST['password'] !== 'pokemon') {
  header("Location: micro06.php?error=Incorrect username or password");
  exit;
}

    // Login successful
  header("Location: micro06.php?secretText=You are logged in!");
  exit;

}

 ?>
