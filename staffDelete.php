<?php

include "connectDB.php";
//echo $staffnum;

$conn_id = connectDB() or exit ();
$result = mysqli_query ($conn_id, "SELECT sno FROM staff") or exit ();

//echo 'Hello World';
$i = 0;
while ($row = mysqli_fetch_row ($result))
{
    $stafflist[$i] = $row[0];
    $i++;
}

mysqli_free_result ($result);

?>
<div id="deleteContainer">
	<form name= "deleteStaff" method="GET" action="delete.php">
		<div class="form-group">
			<label for="exampleFormControlSelect1">Staff Number :</label>
			<select class="form-control" name="sno">
				<?php
				foreach($stafflist as $sid)
				{
				    print ("<option value=\"$sid\"> $sid </option\n>");
				}
				?>
			</select>
		</div>
		<input type="hidden" value="staff" name="type">
		<button type="submit" class="btn btn-primary">Delete Record</button>
	</form>
</div>