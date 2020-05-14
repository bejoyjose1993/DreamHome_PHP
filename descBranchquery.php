<?php

include "connectDB.php";

$bno = $_GET["bno"];

//echo $bno;

$conn_id = connectDB() or exit ("Cannot connect to database");
$result = mysqli_query ($conn_id, "SELECT BNO,STREET,AREA,CITY,PCODE,TEL_NO,FAX_NO FROM branch WHERE BNO='$bno'") or exit ("Cannot execute the query");

//echo 'Hello World';

$row = mysqli_fetch_assoc($result);

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
<a href="index.php" role="button" class="green"> <button class="">Property Home</button></a>
<a href="branchHome.php" role="button" class="green"> <button class="active">Branch Home</button></a>
<a href="staffHome.php" role="button" class="green"><button class="" onclick="openCity(event, 'Tokyo')">Staff Home</button></a>
</div>

<div >
	<table  class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Branch Number</th>
		    	<th scope="col">Street</th>
		    	<th scope="col">Area</th>
		  		<th scope="col">City</th>
		    	<th scope="col">Pincode</th>
		    	<th scope="col">Telephone Number</th>
		    	<th scope="col">Fax Number</th>
		    </tr>
		</thead>
		<tbody>
		    <tr>
		    	<td><?php echo $row["BNO"];?></td>
		    	<td><?php echo $row["STREET"];?></td>
		    	<td><?php echo $row["AREA"];?></td>
		    	<td><?php echo $row["CITY"];?></td>
		    	<td><?php echo $row["PCODE"];?></td>
		    	<td><?php echo $row["TEL_NO"];?></td>
		    	<td><?php echo $row["FAX_NO"];?></td>
		    </tr>
		</tbody>  	
	</table>
</div>

<script>

</script> 

</script>

</body>
</html>
	
