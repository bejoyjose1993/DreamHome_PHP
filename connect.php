<?php
function connect()
{
$server = "cs1.ucc.ie";
$database = "DREAMHOME_nvh1";
$username = "nvh1";
$password = "quogh";
$connection = mysqli_connect ($server, $username, $password, $database);
if ($connection)
return ($connection);
return (FALSE);
}
?>