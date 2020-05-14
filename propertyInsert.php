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

$result1 = mysqli_query ($conn_id, "SELECT SNO FROM staff") or exit ();

//echo 'Hello World';
$i1 = 0;
while ($row1 = mysqli_fetch_row ($result1))
{
    $stafflist[$i1] = $row1[0];
    $i1++;
}

$result2 = mysqli_query ($conn_id, "SELECT ONO FROM owner") or exit ();

//echo 'Hello World';
$i2 = 0;
while ($row2 = mysqli_fetch_row ($result2))
{
    $ownerlist[$i2] = $row2[0];
    $i2++;
}
mysqli_free_result ($result);
mysqli_free_result ($result1);
mysqli_free_result ($result2);

?>
<div id="propertyInsertContainer">

					<form name= "insertStaff" method="GET" action="insert.php">
					<div class="form-group fieldPadding">
				      <label for="inputEmail4">Property Number :</label>
				       <input type="text" class="form-control" name="pno" placeholder="Property Number">	
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

					<div class="form-group fieldPadding">
						<label for="exampleFormControlSelect1">Type :</label>
						<select class="form-control" name="htype">
							<option value="House">House</option>
							<option value="Flat">Flat</option>
						</select>
					</div>

					<div class="form-group fieldPadding">
						<label for="exampleFormControlSelect1">Rooms :</label>
						<select class="form-control" name="rooms">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
						</select>
					</div>	

					<div class="form-group fieldPadding">
				      <label for="inputEmail4">Rent :</label>
				       <input type="text" class="form-control" name="rent" placeholder="Rent">	
				    </div>

					<div class="form-group fieldPadding">
						<label for="exampleFormControlSelect1">Owner Number :</label>
						<select class="form-control" name="ono">
						<?php
						foreach($ownerlist as $oid)
						{
						print ("<option value=\"$oid\"> $oid </option\n>");
						}
						?>
						</select>
					</div>		

					<div class="form-group fieldPadding">
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


					<br><br>
					<input type="hidden" value="property" name="type">
					<button type="submit" class="btn btn-primary">Insert Record</button>
				</form>
</div>
				