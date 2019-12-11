<?php
include('../include/config.php');
session_start();
if(empty($_SESSION['parent_id']))
{
  echo "<script>
    alert('Please Login To Continue');
    window.location.href='login.php';
    </script>";
    
}
else
{
  
  
 $parent_id = $_SESSION['parent_id'];

//   $sql3 = "SELECT * FROM users WHERE id='$id'";
        
//   $result =mysqli_query($conn,$sql3);
//   if(mysqli_num_rows($result) > 0)
//   {
//     while($row = mysqli_fetch_assoc($result))
//     {
//       echo $row['id'];
//       $_SESSION['id'] = $row['id'];
//       echo $row['fullname'];

//     }
//   }
//   else
//   {
//     echo mysqli_error($conn);
//   }



}



?>
<html>
    <head>
        <title>Healthcare </title>
        <?php include('../include/style.php');?>
        
        <style>
        .modal
        {
            display:inline-block;
        }
        </style>
    </head>
    <body>
            <?php
            include('../include/header.php');
            ?>
            <div id="particles-js"></div>

            <div class="col-sm-12 justify-content-center mt-15">
                <div class="row justify-content-center">
                    <div class="col-sm-8 text-center">
                        <div class="card justify-content-center">
                            <?php
                            $sql1 = "SELECT * from parent where parent_id = '$parent_id'";
                            $result = mysqli_query($conn,$sql1);
                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                            
                            <img class="card-img-top profile_img" src="<?php echo $row['parent_img'];?>">
                            <h3 class="text-muted"><?php echo $row['parent_name'];?></h3>
                            <h4 class="text-muted"><?php echo $row['parent_email'];?></h4>
                            <?php
                            }
                            ?>
                            <div>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs md-tabs nav-justified " role="tablist">
                                    <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#panel555" role="tab">
                                        <i class="fas fa-user pr-2"></i>Reviews</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#panel666" role="tab">
                                        <i class="fas fa-heart pr-2"></i>Complaint</a>
                                    </li>
                                </ul>
                                    <!-- Nav tabs -->
                                    
                                <!-- Tab panels -->
                                <div class="tab-content">
                                
                                    <!-- Panel 1 -->
                                    <div class="tab-pane fade in show active" id="panel555" role="tabpanel">
                                
                                        <!-- Nav tabs -->
                                        <div class="row justify-content-center">
                                            <?php
                                            $sql4 = "SELECT school.school_name as sname,school.logo as simage,review.* from review join school on school.school_id=review.school_id where review.parent_id = '$parent_id'";
                                            $result4 = mysqli_query($conn,$sql4);
                                            if(mysqli_num_rows($result4)>0)
                                            {
                                                while($row = mysqli_fetch_assoc($result4))
                                                {
                                                    echo '<div class="col-sm-5 m-2">
                                                    <div class="card">
                                                        <div class="row">
                                                            <div class="col-4 pt-2">
                                                                <img src="'.$row["simage"].'" class="review_img">
                                                            </div>
                                                            <div class="col-8 pt-2">
                                                                <span class="text-muted">'.$row["sname"].'</span> &nbsp;&nbsp;<span class="text-warning">'.$row["overall"].' <i class="fa fa-star"></i></span>
                                                                <p>'.$row["feedback"].'</p>
                                                            </div>
    
                                                        </div>
                                                        
                                                    </div>
                                                </div>';
                                                }
                                            }
                                            else
                                            {
                                                echo "error aa gya";
                                            }
                                            ?>
                                            
                                            

                                        </div>
                                        <!-- Nav tabs -->
                                
                                    </div>
                                    <!-- Panel 1 -->
                                
                                    <!-- Panel 2 -->
                                    <div class="tab-pane fade" id="panel666" role="tabpanel">
                                        
                                        <div class="card">
                                            <?php
                                            $sql5="SELECT school.school_name as sname,school.logo as simage,feedback.* from feedback join school on school.school_id=feedback.school_id where feedback.parent_id = '$parent_id'";
                                            $result5 = mysqli_query($conn,$sql5);
                                            if(mysqli_num_rows($result5)>0)
                                            {
                                                while($row = mysqli_fetch_assoc($result5))
                                                {
                                                    $status = '';
                                                    if($row['status']=='1')
                                                    {
                                                        $status = 'Active';

                                                    }
                                                    elseif($row['status']=='0')
                                                    {
                                                        $status = 'Resolved';
                                                    }
                                                    else
                                                    {
                                                       
                                                    }
                                                    echo '<div class="row justify-content-center mt-2">
                                                    <div class="col-3 pt-5">
                                                            <img src="'.$row["simage"].'" class="complaint_img">
                                                            <p class="text-muted">'.$row["sname"].'</p>
            
                                                    </div>
                                                    <div class="col-9">
                                                        <label>Your Complaint</label>
                                                        <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" readonly >'.$row["complaint"].'      
                                                        </textarea>
                                                        <label>School Reply</label>
                                                        <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" readonly>'.$row["school_reply"].'       
                                                        </textarea>
                                                        
                                                        <button class="btn btn-primary">Status : '.$status.'</button>
                                                    </div>
                                                </div>';
                                                }
                                            }
                                            else
                                            {
                                                echo "nopes dudie";
                                            }
                                            ?>
                                            
                                        </div>
                                            
                                        </div>
                                
                                        
                                    
                                    </div>
                                    <!-- Panel 2 -->
                                
                                </div>
                                <!-- Tab panels -->

                                            <!-- </div>
                                        </div>
                                    </div>

                                </div>   -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php include('../include/scripts.php');?>       
    </body>
</html>