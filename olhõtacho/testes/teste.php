<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  // Connect to the database
  $dbc = mysqli_connect('localhost', 'username', 'password', 'database_name');

  // Insert the user data into the database
  $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
  mysqli_query($dbc, $query);

  // Close the connection
  mysqli_close($dbc);

  // Redirect to the home page
  header('Location: index.php');
  exit;
}
?>