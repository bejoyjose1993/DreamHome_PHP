<?php

include "connectDB.php";


$type = $_GET["type"];

//echo $staffnum;

$conn_id = connectDB() or exit ("Cannot connect to database");

//delete from staff table
if($type == "staff"){
	$table = 'staff';
	$sno = $_GET["sno"];
	$sql = "delete from $table where sno ='$sno'";
	
}
//delete from branch table
else if($type == "branch"){
	$table = 'branch';
	$bno = $_GET["bno"];
	
	$sql = "delete from $table where bno ='$bno'";
}
//delete from property table
else if($type == "property"){
	$table = 'property_for_rent';
	$pno = $_GET["pno"];
	
	$sql = "delete from $table where pno ='$pno'";

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
    		    echo "Records deleted successfully.";
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