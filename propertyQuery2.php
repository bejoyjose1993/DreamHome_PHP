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
<div id="staffFetchContainer">
    <form name= "propertyDesc" method="GET" action="descProperty.php">
        <label for="exampleFormControlSelect1">Property Number :</label>
        <select class="form-control" name="pno">
            <?php
                foreach($proplist as $pid)
                {
                print ("<option value=\"$pid\"> $pid </option\n>");
                }
            ?>
        </select><br>
        <button type="submit" class="btn btn-primary">Accept Property Id </button>
    </form>
</div>				