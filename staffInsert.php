 <?php
include "connectDB.php";

//echo $staffnum;

$con = connectDB()
or "Connection Failed";
$result = mysqli_query($con, "SELECT BNO FROM branch") or exit ();

//echo 'Hello World';   
$i = 0;
while ($row = mysqli_fetch_row ($result))
{
$branchlist[$i] = $row[0];
$i++;
}

mysqli_free_result ($result);

?>
        <div id="staffInsertContainer">
                <form name= "insertStaff" method="GET" action="insert.php">
        					<div class="form-group fieldPadding">
        				      <label for="inputEmail4">Staff Number</label>
        				       <input type="text" class="form-control" name="sno" placeholder="Staff No">	
        				    </div>
        
        				    <div class="form-row fieldPadding">
        					    <div class="form-group col-md-6">
        					      <label for="inputEmail4">First name :</label>
        					       <input type="text" class="form-control" name="fname" placeholder="First name">	
        					    </div>
        					    <div class="form-group col-md-6">
        					      <label for="inputEmail4">Last name :</label>
        					       <input type="text" class="form-control" name="lname" placeholder="Last name">	
        					    </div>
        					</div>
        
        					<div class="form-row fieldPadding">
        					    <div class="form-group col-md-6">
        					      <label for="inputEmail4">Address :</label>
        					       <input type="text" class="form-control" name="address" placeholder="Address">	
        					    </div>
        					    <div class="form-group col-md-6">
        					      <label for="inputEmail4">Telephone No :</label>
        					       <input type="text" class="form-control" name="telno" placeholder="Telephone No">	
        					    </div>
        					</div>	
        
        					<div class="form-row fieldPadding">
        					    <div class="form-group col-md-6">
        					      <label for="inputEmail4">Position :</label>
        					       <input type="text" class="form-control" name="pos" placeholder="Position">	
        					    </div>
        					    <div class="form-group col-md-6">
        					      <label for="exampleFormControlSelect1">Sex :</label>
        							<select class="form-control" name="sex">
        								<option value="M">Male</option>
        								<option value="F">Female</option>
        							</select>
        					    </div>
        					</div>	
        
        					<div class="form-row fieldPadding">
        					    <div class="form-group col-md-6">
        					      <label for="inputEmail4">Date of birth (yyyy-mm-dd) :</label>
        					       <input type="text" class="form-control" name="dob" placeholder="Date of birth">	
        					    </div>
        					    <div class="form-group col-md-6">
        					      <label for="inputEmail4">Salary :</label>
        					       <input type="text" class="form-control" name="salary" placeholder="Salary">	
        					    </div>
        					</div>
        
        					<div class="form-group fieldPadding">
        				      <label for="inputEmail4">NIN :</label>
        				       <input type="text" class="form-control" name="nin" placeholder="NIN">	
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
        					<br>
        					<input type="hidden" value="staff" name="type">
        					<button type="submit" class="btn btn-primary">Insert Record</button>
        				</form>
        </div>