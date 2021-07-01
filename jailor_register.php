<?php
    
    $connection = mysqli_connect('localhost', 'root' , '', 'test');

    if(mysqli_connect_errno()){
        die('connection failed'. mysqli_connect_error());
    }
    else{
        //echo ("connection succesfully");
    }

    if(isset($_POST['submit'])){

	$reg_no = $_POST['reg_no'];
	$NIC = $_POST['nic'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $phoneNo = $_POST['noe'];
    


    $query = "INSERT INTO jailor (ID, NIC, name, age, address,phoneNo) VALUES ('{$reg_no}','{$NIC}','{$name}','{$age}','{$address}','{$phoneNo}')";

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
<html>

<head>

    <link rel="stylesheet" href="p_css.css">
    
	
	
	<title>guard</title>
	
			<style>
		/* style the background */
			body {
				  background-image: url('background image.jpg');
				  background-repeat: no-repeat;
				  background-attachment: fixed;
				  background-size: cover;
			}
			<?php include "prisoner_register.css" ?>
		</style>
	
	
	
	
</head>

<body>
	<div class="header">
		<h1 id="heading"><span style="color:yellow;">Jai</span>lor <span style="color:yellow;">Regist</span>ration</h1>
		<button  onclick="document.location='home.html'" id="home-btn">Home</button>
	</div>
		<div class = "form-box">
			<h1 style="font-family: Garamond, serif; font-size: 40px; color:darkblue; text-align: center">DETAILS OF GUARD</h1>
			<p style="font-family: Garamond, serif; font-size: 25px; color:darkblue; text-align: center"> ***</p>
				
				<form action="jailor_register.php" method="POST">
				
					<label for="text">G_REGISTATION NO:</label>
					<input type = "text" class = "input-field" name="reg_no" id="reg_no" placeholder=" enter registered number.." required onchange="maxChar()">
					
					<br><br>
					
					<label for="text"> NIC:</label>
					<input type = "text" class = "input-field" name="nic" id="nic"placeholder="enter NIC number.." required onchange="maxChar()">
					
					<br><br>
                    <label for="text"> NAME:</label>
					<input type = "text" class = "input-field" name="name" id="name"placeholder="enter guard's name.." required onchange="maxChar()">
					
					<br><br>
                    <label for="text">AGE:</label>
					<input type = "text" class = "input-field" name="age" id="age"placeholder="enter age.." required onchange="maxChar()">
					
					<br><br>
                    <label for="text"> ADDRESS:</label>
					<input type = "text" class = "input-field" name="address" id="address"placeholder="enter address.." required onchange="maxChar()">
					
					<br><br>
                    <label for="text"> PHONE NO:</label>
					<input type = "text" class = "input-field" name="noe" id="no"placeholder="enter the phone number.." required onchange="maxChar()">
					
					<!--<br><br>
                    <label for="text"> DUTY HOURS:</label>
					<input type = "text" class = "input-field" name="hours" id="hours"placeholder="enter duty hours.." required onchange="maxChar()">
					
					<br><br>
                    <br><br>
                    <label for="text"> SHIFT:</label>
					<input type = "text" class = "input-field" name="s" id="s"placeholder="shift.." required onchange="maxChar()">
					-->
					<br><br>
                    <br>
				
					<input type="Submit" name="submit">
                </form>
                    

					
					
                    
            





</body>

</html>
