<?php
require 'koneksi.php';

if( isset($_POST["login"]) ) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user 
    WHERE username = '$username' AND password = '$password'");

    //cek username

    if( mysqli_num_rows($result) === 1 ) {

    //cek pass 

        $row = mysqli_fetch_assoc($result);
        if ($password = $row["password"]) {
            header("location:projek.php");
            exit;
        }
    }
}
?>
<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Halaman Login</title>
        <link rel="stylesheet" href="login.css" />
      </head>
      <body>
        <div class="container">
          <h1>Log-in</h1>
          <br />
          <form>
            <input type="text" name="username" placeholder="Username" />
            <br> <br>
            <input type="password" name="password" placeholder="Password" />
            <div class="button-container">
            <button type="submit" name="login">Log-In</button>
          </form>
          <br>
          <div class="forgot">
            <a href="register.php">Register</a> 
          </div>
        </div>
      </body>
    </html>