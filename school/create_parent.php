<?php
include('../include/config.php');
$id=1;

$name = $_POST['name'];
echo $name;
$email = $_POST['email'];
echo $email;
$pass = $_POST['pass'] ;
echo $pass;

$image = $_FILES['myImage']['name'];


$temp_name = $_FILES["myImage"]["tmp_name"];
$img = ".uploads/".$id."/".$image;
echo $img;
$ward_id = $_POST['ward_id'];
echo $ward_id;
$ward_name = $_POST['ward_name'];
echo $ward_name;
$ward_class = $_POST['ward_class'];
echo $ward_class;
$ward_section = $_POST['ward_section'];
echo $ward_section;


$sql = "INSERT INTO parent(school_id,parent_name,parent_email,parent_pass,parent_img,ward_id,ward_name,ward_class,ward_section) VALUES('$id', '$name', '$email', '$pass', '$img', '$ward_id', '$ward_name', '$ward_class', '$ward_section')";
$result = mysqli_query($conn,$sql);
if($result)
{
    mkdir('../uploads/'.$id);
    move_uploaded_file($temp_name,"../uploads/".$id."/".$image);
    echo "<script>
    alert('Successfully Created New User');
    window.location.href='profile1.php';
    </script>";
}
else
{
    echo mysqli_error($conn);
}
