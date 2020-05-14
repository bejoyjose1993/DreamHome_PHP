<?php

include "connectDB.php";
//echo $staffnum;

$conn_id = connectDB() or exit ();
$result = mysqli_query ($conn_id, "SELECT PNO FROM property_for_rent") or exit ();

//echo 'Hello World';
$i = 0;
while ($row = mysqli_fetch_row ($result))
{
    $proplist[$i] = $row[0];
    $i++;
}

mysqli_free_result ($result);

?>
	<div id="deleteContainer">
    	<form name= "deleteProperty" method="GET" action="delete.php">
    		<div class="form-group fieldPadding">
    			<label for="exampleFormControlSelect1">Property Number :</label>
    			<select class="form-control" name="pno">
    				<?php
    				foreach($proplist as $pid)
    				{
    				print ("<option value=\"$pid\"> $pid </option\n>");
    				}
    				?>
    			</select>
    		</div>
    	<input type="hidden" value="property" name="type">
    	<button type="submit" class="btn btn-primary">Delete Record</button>
	</form>

</div>
