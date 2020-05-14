<?php
include "connectDB.php";

//echo $staffnum;

$con = connectDB()
or "Connection Failed";
$result = mysqli_query($con, "SELECT BNO FROM branch") or exit ();

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
	<h1>DREAM HOMES</h1>
	
		
	
</div> 
<div class="tab_main">
<a href="index.php" role="button" class="green"> <button class="active">Property Home</button></a> 
<a href="branchHome.php" role="button" class="green"> <button class="">Branch Home</button></a>
<a href="staffHome.php" role="button" class="green"><button class="" onclick="openCity(event, 'Tokyo')">Staff Home</button></a>
</div>

<div class="side_tab" >
  <button class="tablinks" onclick="recordQueries(event, 'PropertyFetch')" id="defaultOpen">Fetch Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'PropertyInsert')">Insert Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'PropertyUpdate')">Update Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'PropertyDelete')">Delete Records</button>
</div>

<div id="PropertyFetch" class="tabcontent">
	<div id="PropertyFetch" class="innerContent">
		<div id="includedPropertyFetch"></div>
		<div id="propertyQuery"></div>
	</div>
</div>

<div id="PropertyInsert" class="tabcontent">
	<div id="PropertyInsert" class="innerContent">
		<div id="includedPropertyInsert"></div>
	</div>
</div>

<div id="PropertyUpdate" class="tabcontent">
	<div id="PropertyUpdate" class="innerContent">
		<div id="includedPropertyUpdate"></div>
	</div>
</div>

<div id="PropertyDelete" class="tabcontent">
	<div id="PropertyDelete" class="innerContent">
		<div id="includedPropertyDelete"></div>
	</div>
</div>



<script>
function recordQueries(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function fetchQueries(type) {
	var tabcontent;
	  if (type =="AddByProperty"){
		  $('#includedPropertyFetch').hide();
 		  $("#propertyQuery").load("propertyQuery1.php"); 
	  }else if (type =="DetailByProperty"){
		  $('#includedPropertyFetch').hide();
 		  $("#propertyQuery").load("propertyQuery2.php"); 
	  }
}

$(function(){
	  $("#includedPropertyFetch").load("fetchProperty.php"); 
});
	
$(function(){
  $("#includedPropertyInsert").load("propertyInsert.php"); 
});
$(function(){
	$("#includedPropertyUpdate").load("propertyUpdate.php"); 
});
$(function(){
	$("#includedPropertyDelete").load("propertyDelete.php"); 
});
</script> 

</script>

</body>
</html>
