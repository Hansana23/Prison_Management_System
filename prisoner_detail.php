<?php 

$connection = mysqli_connect('localhost', 'root' , '', 'test');

$user_list1 = "";
$user_list2 = "";
$user_list3 = "";
$user_list4 = "";
$user_list5 = "";


if(mysqli_connect_errno()){
    die('connection failed'. mysqli_connect_error());
}
else{
   //echo ("connection succesfully");
}
if(isset($_POST['submit1'])){

    $ID1 = $_POST['ID1'];

    $query = "SELECT * FROM prisoner where register_ID='$ID1'";
    $users = mysqli_query($connection,$query);

    if($users){
        while($user = mysqli_fetch_assoc($users))
        {
            $user_list1 .= "<tr>";
            $user_list1 .= "<td>{$user['register_ID']}</td>";
            $user_list1 .= "<td>{$user['NIC']}</td>";
            $user_list1 .= "<td>{$user['name']}</td>";
            $user_list1 .= "<td>{$user['age']}</td>";
            $user_list1 .= "<td>{$user['address']}</td>";
            $user_list1 .= "<td>{$user['crime']}</td>";
            $user_list1 .= "<td>{$user['punishment']}</td>";
            $user_list1 .= "</tr>";

        }
    }
    else{
        echo '<script>alert("Database query Failed")</script>';
    }
}
if(isset($_POST['submit2'])){

    $ID2 = $_POST['ID2'];

    $query = "SELECT * FROM health where ID='$ID2'";
    $users1 = mysqli_query($connection,$query);

    if($users1){
        while($user1 = mysqli_fetch_assoc($users1))
        {
            $user_list2 .= "<tr>";
            $user_list2 .= "<td>{$user1['ID']}</td>";
            $user_list2 .= "<td>{$user1['bloodPresure']}</td>";
            $user_list2 .= "<td>{$user1['cholesterolLevel']}</td>";
            $user_list2 .= "<td>{$user1['diabetesLevel']}</td>";
            $user_list2 .= "<td>{$user1['otherHealthIssues']}</td>";
            $user_list2 .= "</tr>";

        }
    }
    else{
        echo '<script>alert("Database query Failed")</script>';
    }
}
if(isset($_POST['submit3'])){

    $Disease= $_POST['disease'];
    $Condition = $_POST['condition'];
    $Value = $_POST['value'];

   

    if($Disease=="bp"){
        

        if($Condition=="less"){
           
            $query = "SELECT * FROM health where bloodPresure< '$Value'";
        }
        else if($Condition=="equal"){
          
            $query = "SELECT * FROM health where bloodPresure = '$Value'";
        } 
        else{
           
            $query = "SELECT * FROM health where bloodPresure > '$Value'";
    
        }

    }
    if($Disease=="cl"){
        

        if($Condition=="less"){
           
            $query = "SELECT * FROM health where cholesterolLevel< '$Value'";
        }
        else if($Condition=="equal"){
           
            $query = "SELECT * FROM health where cholesterolLevel = '$Value'";
        } 
        else{
            
            $query = "SELECT * FROM health where cholesterolLevel> '$Value'";
    
        }

    }
    if($Disease=="dl"){
      

        if($Condition=="less"){
           
            $query = "SELECT * FROM health where diabetesLevel< '$Value'";
        }
        else if($Condition=="equal"){
           
            $query = "SELECT * FROM health where diabetesLevel = '$Value'";
        } 
        else{
           
            $query = "SELECT * FROM health where diabetesLevel > '$Value'";
    
        }

    }

    $users2 = mysqli_query($connection,$query);

    if($users2){
        while($user2 = mysqli_fetch_assoc($users2))
        {
           
            $user_list3 .= "<tr>";
            $user_list3 .= "<td>{$user2['ID']}</td>";
            $user_list3 .= "<td>{$user2['bloodPresure']}</td>";
            $user_list3 .= "<td>{$user2['cholesterolLevel']}</td>";
            $user_list3 .= "<td>{$user2['diabetesLevel']}</td>";
            $user_list3 .= "<td>{$user2['otherHealthIssues']}</td>";
            $user_list3 .= "</tr>";


        }
    }
    else{
        echo '<script>alert("Database query Failed")</script>';
    }
}
if(isset($_POST['submit4'])){

    $crime = $_POST['crime'];

    $query = "SELECT  register_ID,name,crime,punishment FROM prisoner where crime='$crime'";
    $users3 = mysqli_query($connection,$query);

    if($users3){
        while($user3 = mysqli_fetch_assoc($users3))
        {
            $user_list4 .= "<tr>";
            $user_list4 .= "<td>{$user3['register_ID']}</td>";
            $user_list4 .= "<td>{$user3['name']}</td>";
            $user_list4 .= "<td>{$user3['crime']}</td>";
            $user_list4 .= "<td>{$user3['punishment']}</td>";
            $user_list4 .= "</tr>";

        }
    }
    else{
        echo '<script>alert("Database query Failed")</script>';
    }
}

if(isset($_POST['submit5'])){

    $Condition = $_POST['condition'];
    $Value = $_POST['value'];

    if($Condition=="less"){
           
        $query = "SELECT register_ID,name,crime,punishment FROM prisoner where punishment < '$Value'";
    }
    else if($Condition=="equal"){
      
        $query = "SELECT register_ID,name,crime,punishment FROM prisoner where punishment = '$Value'";
    }
    else{
       
        $query = "SELECT register_ID,name,crime,punishment FROM prisoner where punishment > '$Value'";
    }
   
    $users4 = mysqli_query($connection,$query);

    if($users4){
        while($user4 = mysqli_fetch_assoc($users4))
        {
           
            $user_list5 .= "<tr>";
            $user_list5 .= "<td>{$user4['register_ID']}</td>";
            $user_list5 .= "<td>{$user4['name']}</td>";
            $user_list5 .= "<td>{$user4['crime']}</td>";
            $user_list5 .= "<td>{$user4['punishment']}</td>";
            $user_list5 .= "</tr>";


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
    <style>
        <?php include "prisoner_detail.css" ?>
    </style>
</head>
<body>
<div class="header">
		<h1 id="heading"><span style="color:yellow;">Pris</span>oner <span style="color:yellow;">Det</span>ails </h1>
		<button  onclick="document.location='home.html'" id="home-btn">Home</button>
	</div>
    <div class="prison-info">
        <div class="search-box">
            <p>Enter Prisoner Id to View Prisoner Details</p>
            <form action ="prisoner_detail.php" method="POST">
                <input type="text" name="ID1" class="ID">
                <button type="submit" name="submit1" class="btn">Search</button>
            </form>
        </div>
        <table class="table1" border="1">
        <tr>
            <th>ID</th>
            <th>NIC</th>
            <th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>Crime</th>
            <th>punishment(in Years)</th>
        </tr>

        <?php echo $user_list1; ?>

       
    </table>
    </div>
    
    <div class="prison-health">
        <div class="search-box">
        <p>Enter Prisoner Id to View Prisoner Health Details</p>
            <form action ="prisoner_detail.php" method="POST">
            <input type="text" name="ID2" class="ID">
                <button type="submit" name="submit2" class="btn">Search</button>
            </form>
        </div>
        <table class="table2" border="1">
        <tr>
            <th>ID</th>
            <th>Blood Pressure</th>
            <th>Cholosterol Level</th>
            <th>Diabetes Level</th>
            <th>Other Health Issues</th>
        </tr>

        <?php echo $user_list2; ?>
        </table>

    </div>
    
    
    <div class="disease-search">
        <div class="search-box" style="width:930px;">
        <p>Select option to search by Disease</p>
            <form action ="prisoner_detail.php" method="POST">  
               
                <lable>Disease</lable>
                <select name="disease">
                    <option value="">--Select Category--</option>
                    <option value="bp">Blood Presure</option>
                    <option value="cl">Cholesterol Level</option>
                    <option value="dl">Diabetes Level</option>
                </select>
                <lable>Condition</lable>
                <select name="condition">
                    <option value="">--Select Category--</option>
                    <option value="less">Less than</option>
                    <option value="equal">Equal</option>
                    <option value="greater">Greater than</option>
                </select>
                <lable>Value</lable>
                <input type="number" name="value" id="value">
                <button type="submit" name="submit3">Search</button>
            </form>
        </div>
        <table class="table3" border="1">
        <tr>
            <th>ID</th>
            <th>Blood Pressure</th>
            <th>Cholosterol Level</th>
            <th>Diabetes Level</th>
            <th>Other Health Issues</th>
        </tr>
        <?php echo $user_list3; ?>

        </table>
    </div>

    <div class="crime">
        <div class="search-box">
            <p>View Prisoners By Crime</p>
            <form action="prisoner_detail.php" method="POST">
                <select name="crime" id="crime-select">
                    <option>--Select Category--</option>
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
                <button type="submit" name="submit4">Search</button>
            </form>
        </div>
        <table class="table4" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Crime</th>
            <th>punishment(in Years)</th>
        </tr>
        <?php echo $user_list4; ?>

        </table>
    </div>
    <div class="punishment">
        <div class="search-box" style="width:800px;">
            <p>View Prisoners By Punishment Durations</p>
            <form action="prisoner_detail.php" method="POST">
                 <lable>Condition</lable>
                <select name="condition">
                    <option value="">--Select Category--</option>
                    <option value="less">Less than</option>
                    <option value="equal">Equal</option>
                    <option value="greater">Greater than</option>
                </select>
                <lable>Years :</lable>
                <input type="number" name="value" id="years" placeholder="Enter punishment durartion in Years" style="width:250px;">
                <button type="submit" name="submit5">Search</button>
            </form>
        </div>
        <table class="table5" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Crime</th>
            <th>punishment(in Years)</th>
        </tr>
        <?php echo $user_list5; ?>


        </table>
    </div>


    
</body>
</html>