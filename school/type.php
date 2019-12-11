<?php
include('../include/config.php');

?>
<html>
    <head> 
        <?php include('../include/style.php');?>
        <style>
            .navbar
            {

              background-color: #24305E;
              border-radius: 0px;

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
              border-radius:02px;
              letter-spacing:01px;
              background-color: #BD3F32;
              color:#fff;

            }
            h1
            {
              font-family: vardana;
            }
        
        
        </style>
    </head>
    <body>

    <?php include('../include/header.php');?>
    <div class="col-sm-12 mt-1 text-center">
    <h3 class="text-muted h1">School Search</h3>
    <div class="row mt-5 mr-2 ml-2 text-center">
    <?php
    if(isset($_GET['type'])==TRUE)
    {
        $type= $_GET['type'];
        $sql = "SELECT * FROM school WHERE type LIKE '%$type%'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                echo '

        
               <div class="col-sm-3">
                <div class="card">
                <img class="card-img-top" src="../'.$row["logo"].'" alt="Card image cap">
                <div class="card-header text-center">
            
                    <h6 class="text-center toprated_h6">'.$row["school_name"].'</h6>
                    <span class="span_address">'.$row["school_address"].'</span>
                    
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-6">
            
                        <span class="text-muted">Type : '.$row["type"].'</span>
            
                    </div>
                    <div class="col-sm-6">
            
                        <span class="text-muted">Medium : '.$row["medium"].'</span>
            
            
                    </div>
            
                    
                    <div class="col-sm-12 text-center" style="width:100%;">
                        <button class="btn"><a style="color:#ffffffff;" href="../school.php?id='.$row["school_id"].'">Visit school profile</a></button>
                    </div>
                    </div>
                </div> 
                </div>
              </div>';
            }
        }
        else
        {
            echo mysqli_error($conn);
        }
        echo "</br>";

    }

    elseif(isset($_GET['medium'])==TRUE)
    {
        $medium= $_GET['medium'];
        $sql = "SELECT * FROM school WHERE medium LIKE '%$medium%'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                echo '

        
               <div class="col-sm-3">
                <div class="card">
                <img class="card-img-top" src="../'.$row["logo"].'" alt="Card image cap">
                <div class="card-header text-center">
            
                    <h6 class="text-center toprated_h6">'.$row["school_name"].'</h6>
                    <span class="span_address">'.$row["school_address"].'</span>
                    
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-6">
            
                        <span class="text-muted">Type : '.$row["type"].'</span>
            
                    </div>
                    <div class="col-sm-6">
            
                        <span class="text-muted">Medium : '.$row["medium"].'</span>
            
            
                    </div>
            
                    
                    <div class="col-sm-12 text-center" style="width:100%;">
                        <button class="btn"><a style="color:#ffffffff;" href="school.php?id='.$row["school_id"].'">Visit school profile</a></button>
                    </div>
                    </div>
                </div> 
                </div>
              </div>';
            }
        }
        else
        {
            echo mysqli_error($conn);
        }
        echo "</br>";

    }
    elseif(isset($_GET['board'])==TRUE)
    {
        $board= $_GET['board'];
        $sql = "SELECT * FROM school WHERE affiliated LIKE '%$board%'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                echo '

        
               <div class="col-sm-3">
                <div class="card">
                <img class="card-img-top" src="../'.$row["logo"].'" alt="Card image cap">
                <div class="card-header text-center">
            
                    <h6 class="text-center toprated_h6">'.$row["school_name"].'</h6>
                    <span class="span_address">'.$row["school_address"].'</span>
                    
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-6">
            
                        <span class="text-muted">Type : '.$row["type"].'</span>
            
                    </div>
                    <div class="col-sm-6">
            
                        <span class="text-muted">Medium : '.$row["medium"].'</span>
            
            
                    </div>
            
                    
                    <div class="col-sm-12 text-center" style="width:100%;">
                        <button class="btn"><a style="color:#ffffffff;" href="../school.php?id='.$row["school_id"].'">Visit school profile</a></button>
                    </div>
                    </div>
                </div> 
                </div>
              </div>';
            }
        }
        else
        {
            echo mysqli_error($conn);
        }
        echo "</br>";

    }
    elseif(isset($_GET['ownership'])==TRUE)
    {
        $ownership= $_GET['ownership'];
        $sql = "SELECT * FROM school WHERE ownership LIKE '%$ownership%'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                echo '

        
               <div class="col-sm-3">
                <div class="card">
                <img class="card-img-top" src="../'.$row["logo"].'" alt="Card image cap">
                <div class="card-header text-center">
            
                    <h6 class="text-center toprated_h6">'.$row["school_name"].'</h6>
                    <span class="span_address">'.$row["school_address"].'</span>
                    
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-6">
            
                        <span class="text-muted">Type : '.$row["type"].'</span>
            
                    </div>
                    <div class="col-sm-6">
            
                        <span class="text-muted">Medium : '.$row["medium"].'</span>
            
            
                    </div>
            
                    
                    <div class="col-sm-12 text-center" style="width:100%;">
                        <button class="btn"><a style="color:#ffffffff;" href="../school.php?id='.$row["school_id"].'">Visit school profile</a></button>
                    </div>
                    </div>
                </div> 
                </div>
              </div>';
            }
        }
        else
        {
            echo mysqli_error($conn);
        }
        echo "</br>";

    }
    elseif(isset($_GET['location'])==TRUE)
    {
        $location= $_GET['location'];
        $sql = "SELECT * FROM school WHERE school_address LIKE '%$location%'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                echo '

        
               <div class="col-sm-3">
                <div class="card">
                <img class="card-img-top" src="../'.$row["logo"].'" alt="Card image cap">
                <div class="card-header text-center">
            
                    <h6 class="text-center toprated_h6">'.$row["school_name"].'</h6>
                    <span class="span_address">'.$row["school_address"].'</span>
                    
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-6">
            
                        <span class="text-muted">Type : '.$row["type"].'</span>
            
                    </div>
                    <div class="col-sm-6">
            
                        <span class="text-muted">Medium : '.$row["medium"].'</span>
            
            
                    </div>
            
                    
                    <div class="col-sm-12 text-center" style="width:100%;">
                        <button class="btn"><a style="color:#ffffffff;" href="../school.php?id='.$row["school_id"].'">Visit school profile</a></button>
                    </div>
                    </div>
                </div> 
                </div>
              </div>';
            }
        }
        else
        {
            echo mysqli_error($conn);
        }
        echo "</br>";

    }
    else
    {
        echo "sb kharab ho gya bc";
    }


    ?>
            
        


    </div>

    
        
    

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
                    <a href="#!">Material Design</a>
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

          
            <div class="footer-copyright text-center py-3 pt-5"><br>
               
                <span>Made with <i style="color: red;" class="fa fa-2x fa-heart"></i> By <a href="#" target="_blank">Neha Rahman &nbsp;&</a></span>
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
