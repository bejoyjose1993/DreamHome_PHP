<?php

include "connectDB.php";
//echo $staffnum;

$conn_id = connectDB() or exit ();
$result = mysqli_query ($conn_id, "SELECT bno FROM branch") or exit ();

//echo 'Hello World';
$i = 0;
while ($row = mysqli_fetch_row ($result))
{
    $branchlist[$i] = $row[0];
    $i++;
}
mysqli_free_result ($result);

?>
<div id="staffFetchContainer">
	<form name= "branchname" method="GET" action="addrbranchnumber.php">
    	<label for="exampleFormControlSelect1">Branch Number :</label>
    	<select class="form-control" name="bno">
        	<?php
        		foreach($branchlist as $bid)
        		{
        			print ("<option value=\"$bid\"> $bid </option\n>");
        		}
        	?>
    	</select><br>
    	<button type="submit" class="btn btn-primary">Accept Branch Id </button>
	</form>
</div>	