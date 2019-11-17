<?php
include('include/config.php');
$sql = "SELECT parent.parent_name as parent_name,parent.parent_img as parent_image,feedback. * FROM feedback join parent on parent.parent_id = feedback.parent_id WHERE feedback.school_id = 1 AND feedback.status =1";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        echo $row['parent_name'];
        echo $row['parent_image'];
        echo $row['complaint'];
        echo $row['status'];
    }
}
else
{
    echo mysqli_error($conn);
}

echo '</br></br>';

$sql1 = "SELECT parent.parent_name as parent_name,parent.parent_img as parent_image,feedback. * FROM feedback join parent on parent.parent_id = feedback.parent_id WHERE feedback.school_id = 1 AND feedback.status =0";
$result1 = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0)
{
    while($row = mysqli_fetch_assoc($result1))
    {
        echo $row['parent_name'];
        echo $row['parent_image'];
        echo $row['complaint'];
        echo $row['school_reply'];
        echo $row['status'];
    }
}
else
{
    echo mysqli_error($conn);
}
?>