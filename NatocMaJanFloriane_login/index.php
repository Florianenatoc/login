<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('dark.jpg');
            background-size: cover;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 login-container">
                <h2 class="text-center">Login</h2>
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<?php
session_start();
include("connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

   
        $sql = "SELECT * FROM tbl_users WHERE username = ?";
        $sec = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($sec, "s", $username);
        mysqli_stmt_execute($sec);
        $result = mysqli_stmt_get_result($sec);
        
        if(mysqli_num_rows($result)== 1){
            $row = mysqli_fetch_assoc($result);
            IF($username === $row['username'] && password_verify($password,$row['password'])){
                $_SESSION['user'] = $row['username'];
                $_SESSION['user_id'] = $row['id'];
                header('Location: user.php');

            }
            else{
                header('Location: index.php?error= Invalid Account');
            }
            
        }

}

?>
