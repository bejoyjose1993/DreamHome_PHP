<?php

include "connectDB.php";

$type = $_GET["type"];

//echo $staffnum;
$conn_id = connectDB()
or exit ("Cannot connect to database");

//insert into staff table
if($type == "staff"){
	$table = 'staff';
	
	$sno = $_GET["sno"];
	$fname = $_GET["fname"];
	$lname = $_GET["lname"];
	$address = $_GET["address"];
	$telno = $_GET["telno"];
	$pos = $_GET["pos"];
	$sex = $_GET["sex"];
	$dob = $_GET["dob"];
	$salary = $_GET["salary"];
	$nin = $_GET["nin"];
	$bno = $_GET["bno"];

	$sql = "INSERT INTO $table (Sno, FName, LName, Address, Tel_No, Position, Sex, DOB, Salary ,NIN, Bno) 
	VALUES ('$sno', '$fname', '$lname', '$address', '$telno', '$pos', '$sex', '$dob', '$salary', '$nin', '$bno')";
	
}
//insert into branch table
else if($type == "branch"){
	$table = 'branch';
	
	$bno = $_GET["bno"];
	$street = $_GET["street"];
	$area = $_GET["area"];
	$city = $_GET["city"];
	$pcode = $_GET["pcode"];
	$telno = $_GET["telno"];
	$faxno = $_GET["faxno"];
	
	$sql = "INSERT INTO $table (Bno, Street, Area, City, Pcode, Tel_No, Fax_No) 
	VALUES ('$bno', '$street', '$area', '$city', '$pcode', '$telno', '$faxno')";
}

//insert into property table
else if($type == "property"){
	$table = 'property_for_rent';
	
	$pno = $_GET["pno"];
	$street = $_GET["street"];
	$area = $_GET["area"];
	$city = $_GET["city"];
	$pcode = $_GET["pcode"];
	$htype = $_GET["htype"];
	$rooms = $_GET["rooms"];
	$rent = $_GET["rent"];
	$ono = $_GET["ono"];
	$sno = $_GET["sno"];
	$bno = $_GET["bno"];
	
	
	$sql = "INSERT INTO $table (Pno, Street, Area, City, Pcode, Type, Rooms, Rent, Ono, Sno, Bno) 
	VALUES ('$pno', '$street', '$area', '$city', '$pcode', '$htype', '$rooms', $rent, '$ono', '$sno', '$bno')";
	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="../favicon.ico">
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<script src="jquery-3.4.1.js"></script> 

<style>

body {font-family: Arial;}


</style>
</head>
<body>

<div class="ucc_logo_header"> 
     <a href="/en/" style="height: 100px">
   		<img class="logo_img" src="ucc.jpg">
	</a>
   		<img class="home_img" src="home1.jpg">
	<h1>DREAM HOME</h1>
	
		
	
</div> 
<div class="tab_main">
<a href="index.php" role="button" class="green"> <button class="active">Property Home</button></a>
<a href="branchHome.php" role="button" class="green"> <button class="">Branch Home</button></a>
<a href="staffHome.php" role="button" class="green"><button class="" onclick="openCity(event, 'Tokyo')">Staff Home</button></a>
</div>

<div class="confMessage">
		<?php
    		if(mysqli_query($conn_id, $sql)){
    		    echo "Records inserted successfully.";
    		} else{
    		    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn_id);
    		}
		?>
</div>

<script>

</script> 

</script>

</body>
</html>
