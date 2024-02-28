<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=0.1">
        <title>Register</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <div class="Container">
            <form action="register.php" method="post">
                <h2>Register</h2>
                <div class="content">
                    <div class="input-box">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Enter your name" name="name" required>
                    </div>
                    <div class="input-box">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Enter your username" name="username" required>
                    </div>
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" placeholder="Enter your password" name="password" required>
                    </div>
                    <div class="input-box">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter your valid email" name="email" required>
                    </div>
                    <span class="role-title">Role</span>
                    <div class="role-category">
                        <input type="radio" name="role" id="admin">
                        <label for="admin">Admin
                        <input type="radio" name="role" id="user">
                        <label for="user">User</label>
                    </div>
                    <div class="button-container">
                        <button type="submit" name="register">Register</button>
                    </div>
                </div>
                <?php
                 if(isset($_POST['register'])){
                    $name= $_POST['name'];
                    $username= $_POST['username'];
                    $password= $_POST['password'];
                    $email= $_POST['email'];
                    $role= $_POST['role'];

                    include_once("koneksi.php");
                    $result = mysqli_query($conn,
                    "INSERT INTO user(name,username,password,email,role)
                    VALUES ('$name','$username','$password', '$email', '$role')");
                    header("location:login.php");
                    }
                    ?>
            </form>
        </div>
    </body>
</html>
