<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "school-review";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    
}
else
{
    echo "not connected";
}
?>
