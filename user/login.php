<html>
    <head>
        <title>Healthcare </title>
        <?php include('../include/style.php');?>
       
        <style>
        .modal
        {
            display:inline-block;
        }
        .pbg1
{
    background: #bdc3c7!important;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7)!important;  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #2c3e50, #bdc3c7)!important; 
}
        </style>
    </head>
    <body>
        <?php
        include('../include/header.php');
        ?>

        <div class="row justify-content-center mt-5">
        <div class="col-md-6 text-center pt2">
            <div class="card">
                    <br>
                    <br>
                    <h1 class="text-muted h1">User Login </h1> 
                    <br>
                    <div class="row">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-8">
                            <form action="new.php" method="POST">
                                <div class="form-group">
                                    <input class="form-control form-style" type="text" name="email1" placeholder="Enter Email">
                                    <br>
                                    <input class="form-control form-style" type="password" name="pass" placeholder="Enter Password">
                                    <br>
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </form>
                            <br>
                            <h3 class="text-muted">Don't Have A Account ? Create One <a href="signup.php">Sign Up</a></h3>
                        </div>
                    </div>

            </div>
            
            
        </div>
        </div>
        
        

        
    <?php include('../include/scripts.php');?>

    </body>
</html>