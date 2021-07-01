<?php 

$connection = mysqli_connect('localhost', 'root' , '', 'test');

if(mysqli_connect_errno()){
    die('connection failed'. mysqli_connect_error());
}
else{
   // echo ("connection succesfully");
}

$user_list = "";

$query = "SELECT Name,NIC,Address FROM admin";
$users = mysqli_query($connection,$query);

if($users){
    while($user = mysqli_fetch_assoc($users))
    {
        $user_list .= "<tr>";
        $user_list .= "<td>{$user['Name']}</td>";
        $user_list .= "<td>{$user['NIC']}</td>";
        $user_list .= "<td>{$user['Address']}</td>";
        $user_list .= "</tr>";

    }
}
else{
    echo '<script>alert("Database query Failed")</script>';
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
        <?php include "user_detail.css" ?>
    </style>
</head>
<body>
<div class="header">
		<h1 id="heading"><span style="color:yellow;">Us</span>er <span style="color:yellow;">Det</span>ails</h1>
		<button  onclick="document.location='home.html'" id="home-btn">Home</button>
	</div>

    <table class="user-list" border="1">
        <tr>
            <th>Name</th>
            <th>NIC</th>
            <th>Address</th>
        </tr>

        <?php   echo $user_list ?>
    </table>

    
</body>
</html>