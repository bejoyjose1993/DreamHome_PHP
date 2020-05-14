<?php

include "connectDB.php";
//echo $staffnum;

$conn_id = connectDB() or exit ("Could not connect to database");
$result = mysqli_query ($conn_id, "SELECT sno FROM staff") or exit ("Could not execute the query");

//echo 'Hello World';
$i = 0;
while ($row = mysqli_fetch_row ($result))
{
    $stafflist[$i] = $row[0];
    $i++;
}

mysqli_free_result ($result);
?>
<div id="staffFetchContainer">
				
				<form name= "BranchIdentify" method="GET" action="namestaffnumber.php">
				<label for="exampleFormControlSelect1">Staff Number :</label>
				<select class="form-control" name="staffnum">
				<?php
				foreach($stafflist as $sid)
				{
				print ("<option value=\"$sid\"> $sid </option\n>");
				}
				?>
				</select><br>
				<button type="submit" class="btn btn-primary">Accept Staff Id </button>
				<br>
				</form>
</div>		
