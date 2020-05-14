<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
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
<a href="dbHome.php" role="button" class="green"> <button class="active">Home</button></a> 
<a href="branchHome.php" role="button" class="green"> <button class="">Branch</button></a>
<a href="staffHome.php" role="button" class="green"><button class="" onclick="openCity(event, 'Tokyo')">Staff </button></a>
</div>

<div class="side_tab" >
  <button class="tablinks" onclick="recordQueries(event, 'London')" id="defaultOpen">Fetch Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'Paris')">Insert Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'Tokyo')">Update Records</button>
  <button class="tablinks" onclick="recordQueries(event, 'Tokyo')">Delete Records</button>
</div>

<?php
include "connectDB.php";


$fName = $_GET["fName"];
$lName = $_GET["lName"];
$address = $_GET["address"];
$telNo = $_GET["telNo"];
$position = $_GET["position"];
$sex = $_GET["sex"];
$dOB = $_GET["dOB"];
$salary = $_GET["salary"];
$nIN = $_GET["nIN"];
$bno = $_GET["bno"];
$buttonName = $_GET["branchInsert"];
$sno = $_GET["sno"];


$con = connectDB()
or "Connection Failed";

if($buttonName == "Insert Record"){
    
    $sql = "INSERT INTO staff VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $query = "Select * from staff";
    $stmt = mysqli_prepare($con,$sql);
    $stmt->bind_param('sssssssssss',$sno, $fName, $lName, $address, $telNo, $position, $sex, $dOB, $salary, $nIN, $bno);
//     $stmt->execute();
    if(!$stmt->execute()){trigger_error("there was an error....".$con->error, E_USER_WARNING);}
}


// $result1 = mysqli_query($con,$query1)
// or "No Results Found";

$result = mysqli_query($con,$query)
or "No Results Found";

print "<table border = '1'>\n";

While($row = mysqli_fetch_row($result)){
    print "<tr>\n";
    
    for($i =0; $i < mysqli_num_fields($result); $i++){
        
        printf("<td>%s</td>\n", htmlspecialchars($row[$i]));
        
    }
    print "</tr>\n";
    
}

print "</table>\n";

?>



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
</script>

</body>
</html>
