<?php 

$connection = mysqli_connect('localhost', 'root' , '', 'test');

$user_list = "";

if(mysqli_connect_errno()){
    die('connection failed'. mysqli_connect_error());
}
else{
   // echo ("connection succesfully");
}
if(isset($_POST['submit'])){

    $ID = $_POST['ID'];





$query = "SELECT * FROM jailor where ID='$ID'";
$users = mysqli_query($connection,$query);

if($users){
    while($user = mysqli_fetch_assoc($users))
    {
        $user_list .= "<tr>";
        $user_list .= "<td>{$user['ID']}</td>";
        $user_list .= "<td>{$user['NIC']}</td>";
        $user_list .= "<td>{$user['name']}</td>";
        $user_list .= "<td>{$user['age']}</td>";
        $user_list .= "<td>{$user['address']}</td>";
        $user_list .= "<td>{$user['phoneNo']}</td>";
        $user_list .= "</tr>";

    }
}
else{
    echo '<script>alert("Database query Failed")</script>';
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
    <style><?php include "jailor_detail.css" ?></style>
</head>
<body>
<div class="header">
		<h1 id="heading"><span style="color:yellow;">Jai</span>lor <span style="color:yellow;">Det</span>ails</h1>
		<button  onclick="document.location='home.html'" id="home-btn">Home</button>
	</div>

    <div class="search-box">
        <p>Enter Jailor ID to view Details</p>
        <form action="jailor_detail.php" method="POST">

            <input type="text" name="ID" id="ID" placeholder="Enter ID" required>
            <button type="submit" name="submit" id="submit">Search</button>

        </form>
    </div>

    <table class="user-list" border="1">
        <tr>
            <th>ID</th>
            <th>NIC</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Phone number</th>
        </tr>
        <?php   echo $user_list ?>

       
    </table>
</body>
</html>