<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "insertretrive";
$con = mysqli_connect("$host", "$user", "$pass");
if (!$con) {
    echo "Not Connected to Server";
}
if (!mysqli_select_db($con,$db)) {
    echo "Database Not Selected";
}
?>
