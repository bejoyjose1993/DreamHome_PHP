<?php
?>
<div id="branchInsertcontainer">
				<form name= "insertBranch" method="GET" action="insert.php">
				    <div class="form-group fieldPadding">
				      <label for="inputEmail4">Branch Number</label>
				       <input type="text" class="form-control" name="bno" placeholder="Branch No">	
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

					<div class="form-row fieldPadding">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Telephone No :</label>
					       <input type="text" class="form-control" name="telno" placeholder="Telephone No">	
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Fax No :</label>
					       <input type="text" class="form-control" name="faxno" placeholder="Fax No">	
					    </div>
					</div>
					<input type="hidden" value="branch" name="type">
					<button type="submit" class="btn btn-primary">Insert Record</button>
				</form>
</div>
