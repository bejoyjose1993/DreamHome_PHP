<?php

include "connectDB.php";
//echo $staffnum;

$conn_id = connectDB() or exit ();
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

<div id="deleteContainer">
	<form name= "deleteBranch" method="GET" action="delete.php">
    	<div class="form-group fieldPadding">
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
    	<input type="hidden" value="branch" name="type">
    	<button type="submit" class="btn btn-primary">Delete Record</button>
    </form>
</div>	