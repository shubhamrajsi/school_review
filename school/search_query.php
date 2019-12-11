<?php
    include('../include/config.php');
    session_start();
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
        
        </style>
    </head>
    <body>
    <?php
    $search = $_POST['search'];

    $sql = " SELECT * FROM school WHERE school_name LIKE '%$search%'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result))
    {
        echo '<a href="index.php?id='.$row["school_id"].'">'.$row["school_name"].'</a>';
    }
    ?>


        <script src="./node_modules/mdbootstrap/js/jquery.min.js"></script>
        <script src="./node_modules/mdbootstrap/js/bootstrap.min.js"></script>
        <script src="./node_modules/mdbootstrap/js/popper.min.js"></script>
        <script src="./node_modules/mdbootstrap/js/mdb.min.js"></script>
        <script src="./node_modules/mdbootstrap/js/particles.js"></script>
        <script src="./node_modules/mdbootstrap/js/app.js"></script>
        <script src="./node_modules/mdbootstrap/js/loading-bar.js" type="text/javascript">
        </script>
    </body>
</html>