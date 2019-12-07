<?php
include('include/config.php');
$id=1;
$sql2 = "SELECT parent.parent_name as parent_name,parent.parent_img as parent_image,review.*  from review join parent on parent.parent_id=review.parent_id where review.school_id='$id'";
$result1 = mysqli_query($conn,$sql2);
if(mysqli_num_rows($result1)>0)
{
    while($row = mysqli_fetch_assoc($result1))
    {
        $img = $row['parent_image'];
        echo $img;
        echo '<img height="100px;" width="100px;" src="'.$img.'" >';
        echo $row['parent_name'];
        echo $row['review_id'];
        echo $row['facility'];
        echo $row['feedback'];
    }

}
else
{
    echo "nhi hua bidu";
}

?>