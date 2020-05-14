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
	<h1>DREAM HOME</h1>
	
		
	
</div> 
<div class="tab_main">
<a href="index.php" role="button" class="green"> <button class="">Property Home</button></a>
<a href="branchHome.php" role="button" class="green"> <button class="active">Branch Home</button></a>
<a href="staffHome.php" role="button" class="green"><button class="" onclick="openCity(event, 'Tokyo')">Staff Home</button></a>
</div>

<div class="side_tab" >
  <button class="tablinks" onclick="recordQueries(event, 'BranchFetch')" id="defaultOpen">Fetch Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'BranchInsert')">Insert Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'BranchUpdate')">Update Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'BranchDelete')">Delete Records</button>
</div>

<div id="BranchFetch" class="tabcontent">
	<div id="BranchFetch" class="innerContent">
		<div id="includedBranchFetch"></div>
		<div id="branchQuery"></div>
	</div>
</div>

<div id="BranchInsert" class="tabcontent">
	<div id="BranchInsert" class="innerContent">
		<div id="includedBranchInsert"></div>
	</div>
</div>
<div id="BranchUpdate" class="tabcontent">
	<div id="BranchUpdate" class="innerContent">
		<div id="includedBranchUpdate"></div>
	</div>
</div>

<div id="BranchDelete" class="tabcontent">
	<div id="BranchDelete" class="innerContent">
		<div id="includedBranchDelete"></div>
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
	  if (type =="AddByBranch"){
		  $('#includedBranchFetch').hide();
 		  $("#branchQuery").load("BranchQuery1.php"); 
	  }else if (type =="DetailByBranch"){
		  $('#includedBranchFetch').hide();
 		  $("#branchQuery").load("BranchQuery2.php"); 
	  }
}
$(function(){
	$("#includedBranchFetch").load("fetchBranch.php"); 
});
$(function(){
  	$("#includedBranchInsert").load("branchInsert.php"); 
});
$(function(){
	$("#includedBranchUpdate").load("branchUpdate.php"); 
});
$(function(){
	$("#includedBranchDelete").load("branchDelete.php"); 
});
</script> 

</script>

</body>
</html>
