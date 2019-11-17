<?php
include('../include/config.php');
session_start();

$search = $_POST['search'];

$sql = " SELECT * FROM school WHERE school_name LIKE '%$search%'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
    echo '<a href="index.php?id='.$row["school_id"].'">'.$row["school_name"].'</a>';
}
?>