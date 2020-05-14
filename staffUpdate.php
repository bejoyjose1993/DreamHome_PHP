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
<div id="staffUpdateContainer">
    <form name= "updateStaff" method="GET" action="update.php">
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
    
    	<div class="form-group">
          <label for="inputEmail4">Address :</label>
           <input type="text" class="form-control" name="add" placeholder="Address">	
        </div>
    
    	<input type="hidden" value="staff" name="type">
    	<button type="submit" class="btn btn-primary">Update Record</button>
    </form>
</div>