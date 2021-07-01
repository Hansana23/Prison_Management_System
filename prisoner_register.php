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
    $crime = $_POST['crime'];
    $punishment = $_POST['punishment'];


    $query = "INSERT INTO prisoner (register_ID, NIC, name, age, address, crime, punishment) VALUES ('{$reg_no}','{$NIC}','{$name}','{$age}','{$address}','{$crime}','{$punishment}')";

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
    <script src="main.js"></script>
	
	
	<title>TOTAL COST</title>
	
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
		<h1 id="heading"><span style="color:yellow;">Pris</span>oner <span style="color:yellow;">Regist</span>ration</h1>
		<button  onclick="document.location='home.html'" id="home-btn">Home</button>
	</div>
		<div class = "form-box">
			<h1 style="font-family: Garamond, serif; font-size: 40px; color:darkblue; text-align: center">DETAILS OF PRISONER</h1>
			<p style="font-family: Garamond, serif; font-size: 25px; color:darkblue; text-align: center"> ***</p>
				
				<form action="prisoner_register.php" method="POST">
				
					<label for="text">REGISTATION NO:</label>
					<input type = "text" class = "input-field" name="reg_no" id="reg_no" placeholder=" enter registered number.." required onchange="maxChar()">
					
					<br><br>
					
					<label for="text"> NIC:</label>
					<input type = "text" class = "input-field" name="nic" id="nic"placeholder="enter NIC number.." required onchange="maxChar()">
					
					<br><br>
                    <label for="text"> NAME:</label>
					<input type = "text" class = "input-field" name="name" id="name"placeholder="enter prisoner's name.." required onchange="maxChar()">
					
					<br><br>
                    <label for="text">AGE:</label>
					<input type = "text" class = "input-field" name="age" id="age"placeholder="enter age.." required onchange="maxChar()">
					
					<br><br>
                    <label for="text"> ADDRESS:</label>
					<input type = "text" class = "input-field" name="address" id="address"placeholder="enter address.." required onchange="maxChar()">
					
					<br><br>
                    <label for="text"> CRIME:</label>
					<select name="crime" id="crime">
						<option value="">--Select Category--</option>
						<option value="Theft">Theft</option>
						<option value="Threat">Threat</option>
						<option value="Rape">Rape</option>
						<option value="Fraud">Fraud</option>
						<option value="Drug">Drug</option>
						<option value="Robbery">Robbery</option>
						<option value="Firearm">Firearm</option>
						<option value="Violence">Violence</option>
						<option value="Suicide">Suicide</option>
						<option value="Other">Other</option>
					</select>
					
					
					<br><br>
                    <label for="text"> PUNISHMENT:</label>
					<input type = "number" class = "input-field" name="punishment" id="punishment"placeholder="enter the punishment.." required onchange="maxChar()">
					
					<br><br>
                    <br>
				
					<input type="Submit" name="submit">
                </form>
                    

					
					
                    
            





</body>

</html>
