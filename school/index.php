<?php
include('../include/config.php');
$id = $_GET['id'];
$sql ="SELECT * FROM school WHERE school_id ='$id'";
$result= mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))
{
    echo $row['school_id'];
    echo $row['school_name'];
}
?>