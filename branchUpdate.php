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
<div id="branchUpdateContainer">
    <form name= "updateBranch" method="GET" action="update.php">
    	<div class="form-group fieldPadding">
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
    
    	<div class="form-row fieldPadding">
    	    <div class="form-group col-md-6">
    	      <label for="inputEmail4">Street :</label>
    	       <input type="text" class="form-control" name="street" placeholder="Street">	
    	    </div>
    	    <div class="form-group col-md-6">
    	      <label for="inputEmail4">Area :</label>
    	       <input type="text" class="form-control" name="area" placeholder="Area">	
    	    </div>
    	</div>
    
    	<div class="form-row fieldPadding">
    	    <div class="form-group col-md-6">
    	      <label for="inputEmail4">City :</label>
    	       <input type="text" class="form-control" name="city" placeholder="City">	
    	    </div>
    	    <div class="form-group col-md-6">
    	      <label for="inputEmail4">Pincode :</label>
    	       <input type="text" class="form-control" name="pcode" placeholder="Pincode">	
    	    </div>
    	</div>
    
    	<input type="hidden" value="branch" name="type">
    	<button type="submit" class="btn btn-primary">Update Record</button>
    </form>
</div>				