<?php
$connection = mysqli_connect('localhost', 'root' , '', 'test');

if(mysqli_connect_errno()){
    die('connection failed'. mysqli_connect_error());
}
else{
  //  echo ("connection succesfully");
}

if(isset($_POST['submit'])){

    $errors = array();

    if(!isset($_POST['uname']) || strlen(trim($_POST['uname']))<1){

        $errors[] = 'Username is Missing / Invalid';
    }
    if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){

        $errors[] = 'Password is Missing / Invalid';
    }

    if(empty($errors)){
        $username = mysqli_real_escape_string($connection,$_POST['uname']);
        $password = mysqli_real_escape_string($connection,$_POST['password']);

        $query = "SELECT * FROM admin
                    WHERE Username = '{$username}' AND password = '{$password}' LIMIT 1";
        
        $result = mysqli_query($connection,$query);

        if($result){

            if(mysqli_num_rows($result)==1){

                header('Location:home.html');

            }
            else{
                $errors[] = 'inavlid username / password';
            }
        }
        else{
           $errors[] = 'Database query failed';
        }
    }
    if(!empty($errors)){
        echo "Invalid username / password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Login</title>

    <style>
        <?php include "login.css" ?>
    </style>
</head>
<body>
    <div class="form-box">

        <form method="POST" action="login.php">
            <fieldset>
                <legend><h1>Log In</h1></legend>
                <lable>Username</lable>
                <input type="text" id="uname" name="uname"><br>
                <lable>Password</lable>
                <input type="password" id="password" name="password"><br>
                <button  type="submit"name="submit">Login</button>
            </fieldset>
        </form>
    </div>
    
</body>
</html>