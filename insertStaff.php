<?php

include "connect.php";
//echo $staffnum;

$conn_id = connect() or exit ();
$result = mysqli_query ($conn_id, "SELECT BNO FROM branch") or exit ();

//echo 'Hello World';   
$i = 0;
while ($row = mysqli_fetch_row ($result))
{
$branchlist[$i] = $row[0];
$i++;
}

mysqli_free_result ($result);

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Dreamhome Database</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<script src="js/modernizr.custom.js"></script>
		<style>
			
			#container {
			  width: 960px;
			  margin: auto;
			  background-color: #E1F1F2;
			}

			footer {
			  height: 50px;
			  background-color: lightgrey;
			  clear: both;
			}
			
			#main {
			  width: 650px;
			  float: right;
			  margin-right: 30px;
			  line-height: 20px;
			}
			
			.wrapper {
			  display: grid;
			  grid-template-rows: 300px;
			  grid-template-columns: 300px 300px 300px;
			  grid-gap: 10px;
			  background-color: #fff;
			  color: #444;
			}

			.box {
			  background-color: #444;
			  color: #fff;
			  border-radius: 5px;
			  padding: 20px;
			  font-size: 150%;
			}
			
			
			</style>
	</head>
	<body>
		<div class="container">
			<header class="clearfix">
				<!--<span>Dreamhome<span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>-->
				<h1>Dreamhome Database</h1>
			</header>	
			<div class="main">
				<nav class="cbp-hsmenu-wrapper" id="cbp-hsmenu-wrapper">
					<div class="cbp-hsinner">
						<ul class="cbp-hsmenu">
							<li>
								<a href="index.php">Home</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>

			<div id="container">

				<form name= "insertStaff" method="GET" action="insert.php">
					<div class="form-group">
				      <label for="inputEmail4">Staff Number</label>
				       <input type="text" class="form-control" name="sno" placeholder="Staff No">	
				    </div>

				    <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">First name :</label>
					       <input type="text" class="form-control" name="fname" placeholder="First name">	
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Last name :</label>
					       <input type="text" class="form-control" name="lname" placeholder="Last name">	
					    </div>
					</div>

					<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Address :</label>
					       <input type="text" class="form-control" name="address" placeholder="Address">	
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Telephone No :</label>
					       <input type="text" class="form-control" name="telno" placeholder="Telephone No">	
					    </div>
					</div>	

					<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Position :</label>
					       <input type="text" class="form-control" name="pos" placeholder="Position">	
					    </div>
					    <div class="form-group col-md-6">
					      <label for="exampleFormControlSelect1">Sex :</label>
							<select class="form-control" name="sex">
								<option value="M">Male</option>
								<option value="F">Female</option>
							</select>
					    </div>
					</div>	

					<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Date of birth (yyyy-mm-dd) :</label>
					       <input type="text" class="form-control" name="dob" placeholder="Date of birth">	
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Salary :</label>
					       <input type="text" class="form-control" name="salary" placeholder="Salary">	
					    </div>
					</div>

					<div class="form-group">
				      <label for="inputEmail4">NIN :</label>
				       <input type="text" class="form-control" name="nin" placeholder="NIN">	
				    </div>

				    <div class="form-group">
						<label for="exampleFormControlSelect1">Branch Number :</label>
						<select class="form-control" name="bno">
						<?php
						foreach($branchlist as $bid)
						{
						print ("<option value=\"$bid\"> $bid </option\n>");
						}
						?>
						</select>
					</div>
					<br>
					<input type="hidden" value="staff" name="type">
					<button type="submit" class="btn btn-primary">Insert Record</button>
				</form>
				
			<section id="main">
			

			</section>
			<footer>
				<p> Student Name : Nikesh Hegde | Student Id: 119220167</p>
			</footer>
			</div> 


		</div>
		<script src="js/cbpHorizontalSlideOutMenu.min.js"></script>
		<script>
			var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
		</script>
	</body>
</html>