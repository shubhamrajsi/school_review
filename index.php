<?php
include('./include/config.php');
session_start();
?>
<html>
    <head> 
        <title>School Review</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" type="text/css" href="./node_modules/mdbootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./node_modules/mdbootstrap/css/mdb.min.css">
        <link rel="stylesheet" type="text/css" href="./node_modules/mdbootstrap/css/style.css">
        <style>
            .navbar
            {

              background-color: #24305E;
              border-radius: 0px;

            }
            /*search input in container*/
            .searchinput
            {
              margin-left:30%;
              height:40px;
              box-shadow: 0 1px 2px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);

            }
            /*search button in container*/
            #searchbutton
            {
              height: 37px;
              border-radius: 4px;
              box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
            }

            /*.school caegory*/
            .abc1
            {
              background-color: #3b3e50;
              height: 150px;
            }
            /*toprated school card image*/
            .card-img-top
            {
              height: 120px;

            }
            .toprated_h6
            {
              font-family: Times New Roman;
              font-size: bold;
            }
            /*toprated school adress*/
            .span_address
            {
              font-size: 13px;
            }
            .toprated_logo
            {
              height: 44px;
              width:44px;
              border-radius:50%;
            }
            .btn
            {
              
              margin:0px;
              border-radius:06px;
              letter-spacing:01px;
              background-color: #BD3F32;
              color:#fff;

            }
            h1
            {
              font-family: verdana;
            }
            body
            {
                
            }
        </style>
    </head>
<body>
    <?php include('./include/header.php');?>

<!-- searchbar and particles------------------------------------------------------------------------ -->
    <div id="particles-js"></div>
    <div class="container-fluid" style="background-color:rgba(0,0,0,0);height:500px;">
    
      <div class="row justify-content-center">
      
        <div class="col-sm-12 text-center "style="margin-top:100px; ">
        <h1 class="h1" style="color:#fff;">Find Best Schools In Your Location</h1>
        <h3 class="h3" style="color:#fff;">Search Schools Nearby</h3>

        <div class="row justify-content-center">
                <div class="col-sm-8 mt-3">
                    <form action="school_search.php" method="POST">
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col-sm-9 pl-0 pr-0 " style="padding-top:02px;">
                                    <input class="form-control mt-1 h-5" name="search" placeholder="Enter School Name">
                                </div>
                                <div class="col-3 pl-0 pr-0 pt-1">
                                    <button class="btn btn-success form-control h-5 ml-3"  type="submit"><i class="fa fa-search"></i> Search</button></div>
                                </div>

                            </div>
                            
                        </div>
                    </form>
            </div>
      </div>
      </div>
    </div>
<!-- end searchbar and particles-------------------------------------------------------------------->

<!-- categories-------------------------------------------------------------------------------------->


  <div class="col-sm-12 text-center"style="background-color:#fff;">
    <h1 class="text-center pt-5 bold">
      Categories
    </h1>
    <div class="row">
      <div class="col-sm-4 ">
        <div class="card card-cascade wider abc1 pt-5" style="  background: linear-gradient(to right, #360033, #0b8793);">
          <h1 class="text-center" >
            <a href="./school/type.php?board=cbse" style="color:#fff;">CBSE</a>
          </h5>
        </div>
      
      </div>
      <div class="col-sm-4 ">
        <div class="card card-cascade wider abc1 pt-5" style="background: linear-gradient(to right, #485563, #29323c);">
          <h1 class="text-center" >
            <a href="./school/type.php?type=coed" style="color:#fff;">COED</a>
          </h5>
        </div>
      
      </div>
      <div class="col-sm-4 ">
        <div class="card card-cascade wider abc1 pt-5" style="background: linear-gradient(to right, #5f2c82, #49a09d);">
          <h1 class="text-center" >
            <a href="./school/type.php?medium=english" style="color:#fff;">ENGLISH</a>
          </h5>
        </div>
      
      </div>
    </div>
    
    
</div>
<!-- end categories--------------------------------------------------------------------------------->

<!-- how we operat---------------------------------------------------------------------------------->
<h1 class="text-center pt-5 bold">
  
</h1>
<div class="row" style="background-image:url('a.png');height: 380px;">
  <div class="col-sm-12" style="background: rgba(3,3,3,0.6);">
        <h1 class="text-center pt-5 bold" style="color:#fff; font-family:vardana;">
      How we operate
       </h1>
    <img src="images/banner.jpeg" style="height:200px;width:80%;margin-left:10%;margin-top:2%;">
  </div>
</div>
<!-- end how we operat------------------------------------------------------------------------------>

<!-- top rated schools------------------------------------------------------------------------------>
<h1 class="text-center pt-5 bold">
  Top Rated Schools
</h1>
    <div class="row">
    <?php
                    $sql5 = "SELECT review.overall as overall,school.* from school join review on review.school_id=school.school_id";
                    $result5 = mysqli_query($conn,$sql5);
                    if(mysqli_num_rows($result5)>0)
                    {
                        while($row = mysqli_fetch_assoc($result5))
                        {
                            echo ' 
                            <div class="col-sm-3">
                                <div class="card">
                                    <img class="card-img-top" src="'.$row["banner_url"].'/1.jpg" alt="Card image cap">
                                    <div class="card-header text-center">
                                
                                        <h6 class="text-center toprated_h6">'.$row["school_name"].'</h6>
                                        <span class="span_address">'.$row["school_address"].'</span>
                                        
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-sm-6">
                                
                                            <span class="text-muted">type : '.$row["type"].'</span>
                                
                                        </div>
                                        <div class="col-sm-6">
                                
                                            <span class="badge badge-warning">Review : '.$row["overall"].'<i class="fas fa-star"></i></span>
                                
                                
                                        </div>
                                
                                        
                                        <div class="col-sm-12 text-center" style="width:100%;">
                                            <button class="btn"><a style="color:#ffffffff;" href="../schoolreview/school.php?id='.$row["school_id"].'"> Visit School Profile</a></button>
                                        </div>
                                        </div>
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

<!-- end top rated schools------------------------------------------------------------------------------>

<!-- total schools complaints review user--------------------------------------------------------------->
<h1 class="text-center pt-5 bold">
  
</h1>
<div class="row" style="margin: 10px;">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-2">
        <div class="card" style="background-color: #4f503b;">
            <div class="card-header">
                <img src="images/download.png" style="margin:40px;border-radius:50%;width:70px;height:70px;border: 2px solid white;">
                <?php
                $sql1 = "SELECT * FROM school ";
                $result = mysqli_query($conn,$sql1);
                $x = mysqli_num_rows($result);
                ?>
                 <p class="h5 text-center" style="margin-top:-30px;color:#fff;">Schools</p>
                 <p class=" text-center" style="margin-top:-5px;color:#fff;"><?php echo $x;?></p>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card" style="background-color: #772940;">
            <div class="card-header">
                <img src="images/download.png" style="margin:40px;border-radius:50%;width:70px;height:70px;border: 2px solid white;">
                <?php
                $sql2 = "SELECT * FROM parent ";
                $result1 = mysqli_query($conn,$sql2);
                $y = mysqli_num_rows($result1);
                ?>
                 <p class="h5 text-center" style="margin-top:-30px;color:#fff;">Parents</p>
                 <p class=" text-center" style="margin-top:-5px;color:#fff;"><?php echo $y;?></p>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card" style="background-color: #c37f04;">
            <div class="card-header">
                <img src="images/download.png" style="margin:40px;border-radius:50%;width:70px;height:70px;border: 2px solid white;">
                <?php
                $sql3 = "SELECT * FROM review ";
                $result2 = mysqli_query($conn,$sql3);
                $z = mysqli_num_rows($result2);
                ?>
                 <p class="h5 text-center" style="margin-top:-30px;color:#fff;">Reviews</p>
                 <p class=" text-center" style="margin-top:-5px;color:#fff;"><?php echo $z;?></p>
            </div>
           
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card" style="background-color: #7e5f4c;">
            <div class="card-header">
                <img src="images/download.png" style="margin:40px;border-radius:50%;width:70px;height:70px;border: 2px solid white;">
                <?php
                $sql4 = "SELECT * FROM feedback ";
                $result3 = mysqli_query($conn,$sql4);
                $a = mysqli_num_rows($result3);
                ?>

                 <p class="h5 text-center" style="margin-top:-30px;color:#fff;">Complaints</p>
                 <p class=" text-center" style="margin-top:-5px;color:#fff;"><?php echo $a;?></p>
            </div>
        </div>
    </div>
    <div class="col-sm-2">
        <div class="card" style="background-color: #898c52;">
            <div class="card-header">
                <img src="images/download.png" style="margin:40px;border-radius:50%;width:70px;height:70px;border: 2px solid white;">
                <?php
                $sql5 = "SELECT * FROM user ";
                $result4 = mysqli_query($conn,$sql5);
                $b = mysqli_num_rows($result4);
                ?>
                 <p class="h5 text-center" style="margin-top:-30px;color:#fff;">User</p>
                 <p class=" text-center" style="margin-top:-5px;color:#fff;"><?php echo $b;?></p>
            </div>
        </div>
    </div>
    <div class="col-sm-1">
    </div>
</div>

<!-- end total schools complaints review user--------------------------------------------------------------->

<!-- testimonial --------------------------------------------------------------------- -->
<!-- Section: Testimonials---------------------------------------------->
<section class="team-section text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold my-5">Testimonials</h2>
  <!-- Section description -->
  <p class="dark-grey-text w-responsive mx-auto mb-5"></p>

  <!--Grid row-->
  <div class="row text-center">

    <!--Grid column-->
    
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-sm-4 mb-md-0 mb-5">

      <div class="testimonial">
        <!--Avatar-->
        <div class="">
          <img src="./public/img/pankaj.jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">Pankaj Kumar</h4>
        <h6 class="font-weight-bold blue-text my-3">Assistant Professor</h6>
        <p class="font-weight-normal dark-grey-text">
          <i class="fas fa-quote-left pr-2"></i>Great initiative got the best school search from them..</p>
        <!--Review-->
        <div class="orange-text">
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
        </div>
      </div>

    </div>
     <div class="col-sm-4 mb-md-0 mb-5">

      <div class="testimonial">
        <!--Avatar-->
        <div class="">
          <img src="./public/img/shubham.jpg" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">Shubham Raj</h4>
        <h6 class="font-weight-bold blue-text my-3">Teacher</h6>
        <p class="font-weight-normal dark-grey-text">
          <i class="fas fa-quote-left pr-2"></i>Decides on the real basis of feedback and ratings good service.</p>
        <!--Review-->
        <div class="orange-text">
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
        </div>
      </div>

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-sm-4">

      <div class="testimonial">
        <!--Avatar-->
        <div class="avatar mx-auto">
          <img src="./public/img/b.png" class="rounded-circle z-depth-1 img-fluid">
        </div>
        <!--Content-->
        <h4 class="font-weight-bold dark-grey-text mt-4">Neha Rahman</h4>
        <h6 class="font-weight-bold blue-text my-3">Web Developer</h6>
        <p class="font-weight-normal dark-grey-text">
          <i class="fas fa-quote-left pr-2"></i>Got Best School searches with this school.</p>
        <!--Review-->
        <div class="orange-text">
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="fas fa-star"> </i>
          <i class="far fa-star"> </i>
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!-- Section: Testimonials v.3 -->
<!-- end testimonial----------------------------------------------------------------------- -->

<!-- Footer --------------------------------------------------------------------------------------------->
<footer class="page-footer font-small lighten-2" style="background: #4e4d4a;">

  <div style="background-color: #353432;">
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
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                  <!-- Links -->
                  <h6 class="text-uppercase font-weight-bold">Products</h6>
                  <hr class="orange accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>
                    <a href="#!">Php</a>
                  </p>
                  <p>
                    <a href="#!">Html</a>
                  </p>
                  <p>
                    <a href="#!">CSS</a>
                  </p>
                  <p>
                    <a href="#!">Bootstrap</a>
                  </p>
                  <p>
                    <a href="#!">Mdbootstrap</a>
                  </p>
                  <p>
                    <a href="#!">Java script</a>
                  </p>
                  <p>
                    <a href="#!">Jquery</a>
                  </p>
                  
                </div>
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

        





<script src="./node_modules/mdbootstrap/js/jquery.min.js"></script>
<script src="./node_modules/mdbootstrap/js/bootstrap.min.js"></script>
<script src="./node_modules/mdbootstrap/js/popper.min.js"></script>
<script src="./node_modules/mdbootstrap/js/mdb.min.js"></script>
<script src="./node_modules/mdbootstrap/js/particles.js"></script>
<script src="./node_modules/mdbootstrap/js/app.js"></script>
</body>
</html>