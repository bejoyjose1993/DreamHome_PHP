<?php

include "connectDB.php";

$salary = $_GET["salary"];

//echo $staffnum;

$conn_id = connectDB() or exit ();
$result = mysqli_query ($conn_id, "SELECT SNO,LNAME,FNAME FROM staff WHERE SALARY < '$salary'") or exit ();

//echo 'Hello World';

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
<a href="branchHome.php" role="button" class="green"> <button class="">Branch Home</button></a>
<a href="staffHome.php" role="button" class="green"><button class="active" onclick="openCity(event, 'Tokyo')">Staff Home</button></a>
</div>

<div >
	<table  class="table table-striped">
		<thead>
		    <tr>
		      <th scope="col">Staff Number</th>
		      <th scope="col">First Name</th>
		      <th scope="col">Last Name</th>
		    </tr>
		</thead>    
		<tbody>
			<?php
			while ($row = mysqli_fetch_row($result)){

				printf("<tr>");
				for ($i = 0; $i < mysqli_num_fields ($result); $i++)
				{
					printf ("<td>%s</td>\n", htmlspecialchars ($row[$i]));
				}
				print ("</tr>\n");
			} 
			?>
		</tbody> 
	</table>
</div>

<script>

</script> 

</script>

</body>
</html>

			