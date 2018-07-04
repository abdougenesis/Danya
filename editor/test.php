<?php
    extract($_POST);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="This is a test for project n°3 team 26">
        <meta name="author" content="0m3ga-K0d3r">
        <link rel="icon" href="">


        <!-- Bootstrap & FontAwesome Stylesheets -->
        <link rel="stylesheet" href="../assets/css/vendors/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/vendors/font-awesome.min.css">
        <!-- For Icons -->
        <!-- Custom CSS File -->
        <!-- Animation CSS -->
        <link rel="stylesheet" href="../assets/css/vendors/animate.min.css">

        <link rel="stylesheet" href="../assets/css/resources/style.css">

        <link rel="stylesheet" href="../assets/css/resources/styleSheet.css">

        <script src="../assets/js/vendors/jquery-3.1.1.min.js"></script>
        <script src="../assets/js/vendors/bootstrap.min.js"></script>

        <!--The main library -->
        <script src="../assets/js/resources/libraryDanyaProject.js"></script>


        <title>Website id
            <?php echo uniqid(); ?>
        </title>

       <style>
           #visualisationArea .panel-body {
               font-family: sans-serif;
           }    
        </style>
    </head>

    <body>
       <div class="container-fluid">
           
                        <?php echo $_POST['viewFullScreen']; ?>
        
       </div>
    </body>

    </html>