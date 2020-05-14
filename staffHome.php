
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

<div class="side_tab" >
  <button class="tablinks" onclick="recordQueries(event, 'StaffFetch')" id="defaultOpen">Fetch Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'StaffInsert')">Insert Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'StaffUpdate')">Update Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'StaffDelete')">Delete Records</button>
</div>

<div id="StaffFetch" class="tabcontent">
	<div id="StaffFetch" class="innerContent">
		<div id="includedStaffFetch"></div>
		<div id="staffQuery"></div>
	</div>
</div>

<div id="StaffInsert" class="tabcontent">
	<div id="StaffInsert" class="innerContent">
		<div id="includedStaffInsert"></div>
	</div>
</div>

<div id="StaffUpdate" class="tabcontent">
	<div id="StaffUpdate" class="innerContent">
		<div id="includedStaffUpdate"></div>
	</div>
</div>

<div id="StaffDelete" class="tabcontent">
	<div id="StaffDelete" class="innerContent">
		<div id="includedStaffDelete"></div>
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
	  if (type =="ByName"){
		  $('#includedStaffFetch').hide();
 		  $("#staffQuery").load("staffQuery1.php"); 
	  }else if (type =="ByAdd"){
		  $('#includedStaffFetch').hide();
 		  $("#staffQuery").load("staffQuery2.php"); 
	  }else if (type =="Salary"){
		  $('#includedStaffFetch').hide();
 		  $("#staffQuery").load("staffQuery3.php"); 
	  }else if (type =="branch"){
		  $('#includedStaffFetch').hide();
 		  $("#staffQuery").load("staffQuery4.php"); 
	  }
}

$(function(){
  $("#includedStaffInsert").load("staffInsert.php"); 
});
$(function(){
	  $("#includedStaffFetch").load("fetchStaff.php"); 
});
$(function(){
	$("#includedStaffUpdate").load("staffUpdate.php"); 
});
$(function(){
	$("#includedStaffDelete").load("staffDelete.php"); 
});
</script> 

</script>

</body>
</html>
