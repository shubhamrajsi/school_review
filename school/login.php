<html>
    <head>
        <title>School Review  </title>
        <!-- Latest compiled and minified CSS -->
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
           
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 text-center pt2">
                    <div class="card">
                            <br>
                            <br>
                            <h1 class="text-muted h1">School Login </h1> 
                            <br>
                            <div class="row justify-content-center">
                                
                                <div class="col-sm-8 text-center">
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
                                    
                                </div>
                            </div>

                    </div>
                    
                    
                </div>
            </div>
        <?php include('../include/scripts.php')?>
    </body>
</html>