<?php
    
    $connection = mysqli_connect('localhost', 'root' , '', 'test');

    if(mysqli_connect_errno()){
        die('connection failed'. mysqli_connect_error());
    }
    else{
        //echo ("connection succesfully");
    }

    if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $age = $_POST['age'];
    $NIC = $_POST['NIC'];
    $address = $_POST['address'];
    $username = $_POST['uname'];
    $password = $_POST['password'];


    $query = "INSERT INTO admin (Name, Age, NIC, Address, Username, password) VALUES ('{$name}','{$age}','{$NIC}','{$address}','{$username}','{$password}')";

    $result = mysqli_query($connection,$query);

    if($result){
        echo '<script>alert("Record Added Succesfully")</script>';
    }
    else{
        echo '<script>alert("Query Failed")</script>';
    }
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include "user_register.css" ?>
    </style>
</head>
<body>
<div class="header">
		<h1 id="heading"><span style="color:yellow;">Us</span>er <span style="color:yellow;">Regist</span>ration</h1>
		<button  onclick="document.location='home.html'" id="home-btn">Home</button>
	</div>
    <div class="form-box">
        <form action="user_register.php" method="POST">
            <fieldset>
                <legend><h1>Register</h1></legend>
                <lable>Name</lable>
                <input type="text" id="name" name="name"><br>
                <lable>Age</lable>
                <input type="number" id="age" name="age"><br>
                <lable>NIC</lable>
                <input type="text" id="NIC" name="NIC"><br>
                <lable>Address</lable>
                <textarea rows=5 id="address" name="address"></textarea><br>
                <lable>UserName</lable>
                <input type="text" id="uname" name="uname"><br>
                <lable>Password</lable>
                <input type="password" id="password" name="password"><br>
                <button type="submit" name="submit">Register</button>
            </fieldset>
        </form>
    </div>
    
</body>
</html>