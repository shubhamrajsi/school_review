<?php
include('./include/config.php');
session_start();
if(empty($_SESSION['user_id']))
{

}
else
{
    $user_id = $_SESSION['user_id'];

}

$id = $_GET['id'];

$_SESSION['id']=$id;
?>
<html>
    <head> 
        <title>School Review</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" type="text/css" href="./node_modules/mdbootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./node_modules/mdbootstrap/css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="./node_modules/mdbootstrap/css/style.css">
        <link rel="stylesheet" type="text/css" href="./node_modules/mdbootstrap/css/loading-bar.css">
        <style>
        .ldBar-label {
        color: #fff;
        font-family: 'varela round';
        font-size: 1.5em;
        font-weight: 500;
        }
        .ldBar path.mainline {
        stroke-width: 10;
        stroke: #09f;
        stroke-linecap: round;
        }
        .ldBar path.baseline {
            stroke-width: 14;
            stroke: #f1f2f3;
            stroke-linecap: round;
            filter:url(#custom-shadow);
        }
        
        </style>
        <script type="text/javascript">
        function change(id)
        {
            var x=document.getElementById(id).src;
            var y=document.getElementById('1').src;
            document.getElementById('1').src=x;
            document.getElementById(id).src=y;
        }
       </script>
    </head>
<body>

<?php include('./include/header.php');?>
<!--end  navbar----------------------------------------------------------------------------------------->

<!--carosole section for school images------------------------------------------------------------------>
<?php

$sql1 = "SELECT * FROM school where school_id ='$id'";
$result1 = mysqli_query($conn,$sql1);
while($row = mysqli_fetch_assoc($result1))
{


?>
<div class="container-fluid" style="width: 100%;height: 330px; margin-top: 05px;">
       <img src="<?php echo $row['banner_url'];?>/1.jpg" style="width:100%;height:320px;"> 
            

</div>



<!--school address section------------------------------------------------------------------------>
<div class="row" style="margin: 30px;">
    
        <div class="col-sm-6">
                    <!-- Store -->
                    <div class="card card-cascade wider reverse">
                        <!-- Store image -->
                        <div class="view view-cascade overlay">
                                    <div class="mask rgba-white-slight">
                                    </div>
                                </a>
                            
                        </div>
                        <!-- Store content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Title -->
                            <h4 class="row card-title">
                                <div class="col-sm-4">
                                    <img alt="user" class="img-fluid user-image center z-depth-3 img-circle" src="<?php echo $row['logo'];?>">
                                </div>
                                <div class="col-sm-8">
                                    <strong style="line-height: 5">
                                     <?php echo $row['school_name'];?>
                                    </strong>
                                </div>
                            </h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2">
                                Total Review:
                                <?php
                                $sql2 = "SELECT * FROM review where school_id = '$id'";
                                $result2 = mysqli_query($conn,$sql2);
                                $x = mysqli_num_rows($result2);
                                echo $x;
                                ?>
                            </h6>
                            <!-- Text -->
                            <p class="card-text">
                                <?php echo $row['school_desc'];?>
                            </p>
                            <?php 
                            if(empty($user_id))
                            {
                                echo '<button type="button" class="btn btn-primary" >
                                <a href="./user/login.php" style="color:#fff;">Write Review</a>
                                </button>';
                            }
                            else
                            {
                                echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                                Write Review
                                </button>';
                            }
                            ?>
                            
                        </div>
                    </div>
                    <!-- Store End -->
        </div>
        <div class="col-sm-6">
                   <div class="row">

                       <div class="col-sm-12">
                            <img id="1" class="image_gallery" src="<?php echo $row['banner_url'];?>/1.jpg"style="width:100%;height:200px;">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <img  id="2"class="image_gallery" src="<?php echo $row['banner_url'];?>/3.jpg"style="width:100%;height:100px;" onclick="change(this.id);">
                        </div>
                        <div class="col-sm-4">
                            <img id="3" class="image_gallery" src="<?php echo $row['banner_url'];?>/2.jpg" style="width:100%;height:100px;" onclick="change(this.id);">
                        </div>
                        <div class="col-sm-4">
                            <img  id="4" class="image_gallery" src="<?php echo $row['banner_url'];?>/1.jpg" style="width:100%;height:100px;" onclick="change(this.id);">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12" style="height:40px; background: linear-gradient(145deg, #6d6027, #d3cbb8);margin: 12px;">
                        </div>
                    </div>
                   
        </div>
</div>
<!--end schooladress section----------------------------------------------------------------------->

<div class="row">
<!-- fee structure and timing --------------------------------------------------------------------->
    <div class="col-sm-6">
        <div class="row">

            <!-- div foe fee structure -->
            <div class="col-sm-1">
            </div>
            <div class="col-sm-6">
              <div class="card card1">
                
                <div class="card-head indigo lighten-1" style="background:linear-gradient(-145deg, #ffd86f, #fc6262) !important;height: 50px;">
                  
                    <h3 class="text-center" style="font-family: Times New Roman;font-size: bold;color:white;">Fee Structure</h3>
                  
                </div>

                <div class="card-body">   
                    <?php 
                    $sql3 = "SELECT * FROM fee_structure where school_id = '$id'";
                    $result3 = mysqli_query($conn,$sql3);
                    while($row1 = mysqli_fetch_assoc($result3))
                    {

                    ?>
                 <div class="row">
                    <div class="col-6 border border-bottom-0 center">
                      <p class="text-center" style="font-family: Times New Roman;"><?php echo $row1['tution_fee'];?></p>
                      <p class="text-center" style="font-family: Times New Roman;">Tution fee</p>
                    </div>
                    <div class="col-6 border border-bottom-0">
                      <p class="text-center" style="font-family: Times New Roman;"><?php echo $row1['transport_fee'];?></p>
                      <p class="text-center" style="font-family: Times New Roman;">Transport fee</p>
                    </div>
                     <div class="col-6 border border-bottom-0">
                      <p class="text-center" style="font-family: Times New Roman;"><?php echo $row1['food'];?></p>
                      <p class="text-center" style="font-family: Times New Roman;">Mess fee</p>
                    </div>
                    <div class="col-6 border border-bottom-0">
                      <p class="text-center" style="font-family: Times New Roman;"><?php echo $row1['library'];?></p>
                      <p class="text-center" style="font-family: Times New Roman;">Libaray fee</p>
                    </div>
                    <div class="col-6 border border-bottom-0">
                      <p class="text-center" style="font-family: Times New Roman;"><?php echo $row1['labs'];?></p>
                      <p class="text-center" style="font-family: Times New Roman;">Lab fee</p>
                    </div>
                    <div class="col-6 border border-bottom-0">
                      <p class="text-center" style="font-family: Times New Roman;"><?php echo $row1['hostel'];?></p>
                      <p class="text-center" style="font-family: Times New Roman;">Hostel fee</p>
                    </div>
                  </div>
                  <?php
                    }
                    ?>
               </div> 
                
              </div>
            </div>
            <!-- end for for fee structure -->

            <!-- school founded date -->
            <div class="col-sm-5">
                <div class="card card-cascade wider reverse">
                        <!-- Store image -->
                       
                        <!-- Store content -->
                        <div class="card-body card-body-cascade text-center">
                            <!-- Title -->
                            
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold text-left">
                               Timing:&nbsp;<?php echo $row['timing'];?>
                            </h6>
                            <h6 class="font-weight-bold text-left">
                               Type:&nbsp;<?php echo $row['type'];?>
                            </h6>
                            <h6 class="font-weight-bold text-left">
                               Affiliated:&nbsp;<?php echo $row['affiliated'];?> 
                            </h6>
                            <h6 class="font-weight-bold text-left">
                               Established:&nbsp;<?php echo $row['established'];?>
                            </h6>
                            <h6 class="font-weight-bold text-left">
                               Classes:&nbsp;<?php echo $row['classes'];?>
                            </h6>
                            <h6 class="font-weight-bold text-left">
                                Medium:&nbsp;<?php echo $row['medium'];?> 
                            </h6>
                            <!-- Text -->
                            
                            
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <!-- school founded date -->

        </div>
    </div>
    <!-- end fee structure and timing ----------------------------------------------------------------->


    <!-- Based on recent review ------------------------------------------------------------------------->
    <?php
    $sql4 = "SELECT * from review where school_id = '$id'";
    $result4 = mysqli_query($conn,$sql4);

    $i =0;
    $facility=$academics=$faculty=$curriculum=0;
    while($row = mysqli_fetch_assoc($result4))
    {
        $i=$i+1;
        $facility=$facility+$facility+$row['facility'];
        $academics=$academics+$row['academics'];
        $faculty=$faculty+$row['faculty'];
        $curriculum=$curriculum+$row['curriculum'];
    }

    $facility=($facility/$i)*20;
    $academics=($academics/$i)*20;
    $faculty=($faculty/$i)*20;
    $curriculum=($curriculum/$i)*20;

    ?>
    <div class="col-sm-6">
        <div class="card card-cascade wider">
             <div class="card-head text-center h3 pt-2" >Based on Recent Review
             </div>

             <div class="card-body">
                <div class="row">  
                    
                    <div class="col-sm-12">   
                        <h5 style="display: flex;">
                            Facility:
                        </h5>       
                        <div class="progress md-progress" style="height: 20px">

                            <div class="progress-bar" role="progressbar" style="width: <?php echo $facility;?>%; height: 20px" aria-valuenow="<?php echo $facility;?>" aria-valuemin="0" aria-valuemax="100"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">  
                    
                    <div class="col-sm-12">   
                        <h5 style="display: flex;">
                            Academics:
                        </h5>       
                        <div class="progress md-progress" style="height: 20px">

                            <div class="progress-bar" role="progressbar" style="width: <?php echo $academics;?>%; height: 20px" aria-valuenow="<?php echo $academics;?>" aria-valuemin="0" aria-valuemax="100"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">  
                    
                    <div class="col-sm-12">   
                        <h5 style="display: flex;">
                            Faculty:
                        </h5>       
                        <div class="progress md-progress" style="height: 20px">

                            <div class="progress-bar" role="progressbar" style="width: <?php echo $faculty;?>%; height: 20px" aria-valuenow="<?php echo $faculty;?>" aria-valuemin="0" aria-valuemax="100"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">  
                    
                    <div class="col-sm-12">   
                        <h5 style="display: flex;">
                            Curriculum:
                        </h5>       
                        <div class="progress md-progress" style="height: 20px">

                            <div class="progress-bar" role="progressbar" style="width: <?php echo $curriculum;?>%; height: 20px" aria-valuenow="<?php echo $curriculum;?>" aria-valuemin="0" aria-valuemax="100"> 
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                
                ?>
                
             </div>
        </div>


    </div>


</div>
<!--end Based on recent review ---------------------------------------------------------------------->
<!-- top review and comment section------------------------------------------------------------------------------------->
<div class="row" style="margin: 12px;">
<!-- review start -->
    <div class="col-sm-8 text-center">
        
            <h3 class=" h3">Top Reviews</h3>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="text-muted">User Reviews</h3>
                    <div class="row justify-content-center">
                    <?php
                    $sql5 = "SELECT user.user_name1 as uname,user.img as uimage,review.* from review join user on user.user_id=review.user_id where review.school_id = '$id'";
                    $result5 = mysqli_query($conn,$sql5);
                    if(mysqli_num_rows($result5)>0)
                    {
                        while($row = mysqli_fetch_assoc($result5))
                        {
                            echo '
                            <div class="card mb-1 mr-2" style="width:100%;">
                                <div class="row">
                                    <div class="col-4 pt-2">
                                        <img src="schoolreview/'.$row["uimage"].'" class="review_img">
                                    </div>
                                    <div class="col-8 pt-2">
                                        <span class="text-muted">'.$row["uname"].'</span> &nbsp;&nbsp;<span class="text-warning">'.$row["overall"].'<i class="fa fa-star"></i></span>
                                        <p>'.$row["feedback"].'</p>
                                    </div>
                                </div>
                            </div>';
                        }

                    }
                    else
                    {
                        echo "nopes";
                    }
                    ?>
                    
                        
                    </div>
                            
                </div>
                <div class="col-sm-6">
                    <h3 class="text-muted">Parent Reviews</h3>
                    <div class="row">
                    <?php
                    $sql6 = "SELECT parent.parent_name as pname,parent.parent_img as pimage,review.* from review join parent on parent.parent_id=review.parent_id where review.school_id = '$id'";
                    $result6 = mysqli_query($conn,$sql6);
                    if(mysqli_num_rows($result6)>0)
                    {
                        while($row = mysqli_fetch_assoc($result6))
                        {
                            echo ' <div class="card mb-1 ml-2" style="width:100%;">
                            <div class="row">
                                <div class="col-4 pt-2">
                                    <img src="schoolreview/'.$row["pimage"].'" class="review_img">
                                </div>
                                <div class="col-8 pt-2">
                                    <span class="text-muted">'.$row["pname"].'</span> &nbsp;&nbsp;<span class="text-warning">'.$row["overall"].'<i class="fa fa-star"></i></span>
                                    <p>'.$row["feedback"].'</p>
                                </div>

                            </div>
                            
                        </div>';
                        }

                    }
                    else
                    {
                        echo "nopes";
                    }
                    ?>
                    </div>
                </div>
            </div>
        
    </div>
    <div class="col-sm-4">
        <div class="card pl-2 pr-2">
                    
            <h3 class="text-center">Featured in</h3>
            <div class="row">
                <div class="col-sm-6 ">
                    <div class="card text-center" style="height:70px;margin-top: 20px; background-color:#00bfa5;color:#fff;font-size: 20px;">
                        #givechance
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-center" style="height:70px;margin-top: 20px; background-color:#ff455f;color:#fff;font-size: 20px;">
                        #newopportuinity
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="card text-center" style="height:70px;margin-top: 20px; background-color:#7e57c2;color:#fff;font-size: 20px;">
                        #newlife
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-center" style="height:70px;margin-top: 20px; background-color:#ff9800;color:#fff;font-size: 20px;">
                        #bestschool
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- review breaking down--------------------------------------------------------------------------->
<div class="row">
    <div class="col-sm-12 "style="background-image: url('./images/a.png');background-repeat:repeat;background-size: cover;">
      <div class="row pt-5" style="background: rgba(0, 0, 0, 0.2);height:300px;" >

                  <div class="col-sm-5">
                      <div class="rating-block">
                          <h4 class="text-center" style="color:#fff;">
                              Average user rating
                          </h4>
                          <div class="space">
                          </div>
                          <div class="ldBar label-center" data-preset="circle" data-value="80" style="width:50%;height:50%;margin:auto">
                          </div>
                          <div class="user-rating text-center" style="color:#fff;">
                              <i aria-hidden="true" class="fa fa-star-o" style="color: #4285f4;">
                              </i>
                              20 Ratings
                              <i aria-hidden="true" class="fa fa-user-o" style="color: #4285f4;">
                              </i>
                              56 Reviews
                          </div>
                      </div>
                  </div>
                  <div class="col-sm-7">
                      <h4 class="text-center" style="color:#fff;">
                          Rating breakdown
                      </h4>
                      <div class="space">
                      </div>
                      <div class="row">
                          <div class="col-md-2 col-md-offset-2">
                              <div class="ldBar label-center" data-preset="circle" data-value="30" style="margin: auto;">
                              </div>
                              <div class="user-rating text-center">
                                  1
                                  <i aria-hidden="true" class="fa fa-star" style="color: red;">
                                  </i>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="ldBar label-center" data-preset="circle" data-value="66" style="margin: auto;">
                              </div>
                              <div class="user-rating text-center">
                                  2
                                  <i aria-hidden="true" class="fa fa-star" style="color: orange;">
                                  </i>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="ldBar label-center" data-preset="circle" data-value="83" style="margin: auto;">
                              </div>
                              <div class="user-rating text-center">
                                  3
                                  <i aria-hidden="true" class="fa fa-star" style="color: yellow;">
                                  </i>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="ldBar label-center" data-preset="circle" data-value="89" style="margin: auto;">
                              </div>
                              <div class="user-rating text-center">
                                  4
                                  <i aria-hidden="true" class="fa fa-star" style="color: springgreen;">
                                  </i>
                              </div>
                          </div>
                          <div class="col-md-2">
                              <div class="ldBar label-center" data-preset="circle" data-value="50" style="margin: auto;">
                              </div>
                              <div class="user-rating text-center">
                                  5
                                  <i aria-hidden="true" class="fa fa-star" style="color: green;">
                                  </i>
                              </div>
                          </div>
                      </div>
                  </div>
      </div>
    </div>
  </div>
  <!-- end breakdown--------------------------------------------------------------------------------->



<!-- Footer --------------------------------------------------------------------------------------------->
<footer class="page-footer font-small lighten-2" style="background-color:#4e4d4a;">

  
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        
        <!-- Grid column -->

        <!-- Grid column -->
        
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
 <div class="container text-center text-md-left mt-5">

              <!-- Grid row -->
              <div class="row mt-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                  <!-- Content -->
                  <h6 class="text-uppercase font-weight-bold">School Review</h6>
                  <hr class="orange accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <br>
                  
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                
                <!-- Grid column -->

                <!-- Grid column -->
               
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                  <!-- Links -->
                  <h6 class="text-uppercase font-weight-bold">Contact</h6>
                  <hr class="orange accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>
                    <i class="fa fa-home mr-3"></i>Lovely Profestional Univarsity</p>
                    <p>
                    <i class="fa fa-envelope mr-3"></i>neharahman877@gmail.com</p>
                  <p>
                  <p>
                    <i class="fa fa-envelope mr-3"></i>shubhamrajabc@gmail.com</p>
                  <p>
                    <i class="fa fa-phone mr-3"></i>7992303840</p>
                  <p>
                    <i class="fa fa-print mr-3"></i>7992303840</p>

                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

            </div>
            <!-- Footer Links -->

          
            <div class="footer-copyright text-center py-3"><br>
               
                <span>Made with <i style="color: red;" class="fa fa-2x fa-heart"></i> By <a href="#" target="_blank">Neha Rahman , Pankaj Kumar &nbsp;&</a></span>
                <span><a href="#" target="_blank">Shubham Raj</a></span>

            </div>
  <!-- Copyright -->

</footer>
<!--end Footer ----------------------------------------------------------------------------------------->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="./school/review.php" method="POST">
                    
                    <div class="row mb-2">

                        <div class="col-6 congress pt-1">Facility</div>
                        <div class="col-6 bjp text-left pt-2">
                            <span id="rating-1" data-stars="0"></span>
                            
                            </div>
                    </div>
                    <div class="row mb-2">

                        <div class="col-6 congress pt-1">Academics</div>
                        <div class="col-6 bjp text-left pt-2">
                            <span id="rating-2" data-stars="0"></span>
                            
                            </div>
                    </div>
                   
                    <div class="row mb-2">

                        <div class="col-6 congress pt-1 ">Curriculum</div>
                        <div class="col-6 bjp text-left pt-2">
                            <span id="rating-4" data-stars="0"></span>
                            
                        </div>
                    </div>
                    <div class="row mb-2">

                        <div class="col-6 congress pt-1">Facility</div>
                        <div class="col-6 bjp text-left pt-2">
                            <span id="rating-5" data-stars="0"></span>
                            

                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <textarea  name="feedback" style="width:100%" placeholder="Enter Feedback" rows="2"></textarea>

                        </div>
                        
                    </div>
                    <button class="btn btn-primary" type="submit">Submit Review</button>
                </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>




        




        <script src="./node_modules/mdbootstrap/js/jquery.min.js"></script>
        <script src="./node_modules/mdbootstrap/js/bootstrap.min.js"></script>
        <script src="./node_modules/mdbootstrap/js/popper.min.js"></script>
        <script src="./node_modules/mdbootstrap/js/mdb.min.js"></script>
        <script src="./node_modules/mdbootstrap/js/particles.js"></script>
        <script src="./node_modules/mdbootstrap/js/app.js"></script>
        <script src="./node_modules/mdbootstrap/js/loading-bar.js" type="text/javascript">
        </script>
        <script src="./node_modules/mdbootstrap/js/jquery-rate-picker.js"></script>
        <script>
        
            $.ratePicker("#rating-1", {
                rate : function (stars){
                    // $('#value1').value=stars;
                }
            });
            $.ratePicker("#rating-2", {
                rate : function (stars){
                    // $('#value2').value=stars;
                }
            });
            $.ratePicker("#rating-3", {
                rate : function (stars){
                    // $('#value3').value=stars;
                }
            });
            $.ratePicker("#rating-4", {
                rate : function (stars){
                    // $('#value4').value=stars;
                }
            });$.ratePicker("#rating-5", {
                rate : function (stars){
                    // $('#value5').value=stars;
                }
            });
        </script>
</body>
</html>