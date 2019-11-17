<?php
include('include/config.php');

$sql = "INSERT INTO feedback(school_id,parent_id,complaint,status) VALUES(1,1,'mera bacha ka copy check nhi hua hai sun rhe ho',1)";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "ho gya submit";
}
else
{
    echo mysqli_error($conn);
}
?>