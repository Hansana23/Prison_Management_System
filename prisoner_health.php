<?php
    
    $connection = mysqli_connect('localhost', 'root' , '', 'test');

    if(mysqli_connect_errno()){
        die('connection failed'. mysqli_connect_error());
    }
    else{
      //  echo ("connection succesfully");
    }

    if(isset($_POST['submit'])){

	$reg_no = $_POST['reg_no'];
	$bp = $_POST['bp'];
    $cl = $_POST['cl'];
    $dl = $_POST['dl'];
    $other = $_POST['other'];
    

    $query = "INSERT INTO health (ID, bloodPresure, cholesterolLevel, diabetesLevel, otherHealthIssues) VALUES ('{$reg_no}','{$bp}','{$cl}','{$dl}','{$other}')";

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

    
	
	
	<title>health</title>
	
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
		<h1 id="heading"><span style="color:yellow;">Pris</span>oner <span style="color:yellow;">Hea</span>lth <span style="color:yellow;">Det</span>ails</h1>
		<button  onclick="document.location='home.html'" id="home-btn">Home</button>
	</div>
		<div class = "form-box">
			<h1 style="font-family: Garamond, serif; font-size: 40px; color:darkblue; text-align: center">HEALTH DETAILS</h1>
			<p style="font-family: Garamond, serif; font-size: 25px; color:darkblue; text-align: center"> ***</p>
				
				<form action="prisoner_health.php" method="POST">
				
					<label for="text">HEALTH REPORT ID:</label>
					<input type = "text" class = "input-field" name="reg_no" id="reg_no" placeholder=" enter registered number.." required >
					
					<br><br>
					
					<label for="text"> BLOOD PRESURE:</label>
					<input type = "text" class = "input-field" name="bp" id="bp"placeholder="enter blood presure  (mmHg).." required>
					
					<br><br>
                    <label for="text"> CHOLESTEROL LEVEL:</label>
					<input type = "text" class = "input-field" name="cl" id="cl"placeholder="enter cholesterol level (mmol/litre).." required >
					
					<br><br>
                    <label for="text">DIABETES LEVEL:</label>
					<input type = "text" class = "input-field" name="dl" id="dl"placeholder="enter diabetes level (mmol/litre).." required >
					
					<br><br>
                    <label for="text"> OTHER HEALTH ISSUIES:</label>
					<input type = "text" class = "input-field" name="other" id="other"placeholder="enter other helth issuies .." required>
					
					
					<br><br>
                    <br>
				
					<input type="Submit" name="submit">
                </form>
                    

					
					
                    
            





</body>

</html>

