<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Puskesmas Sungai Siring</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <style type="text/css">
        body{
            color: #666;
        }
    </style>
</head>

<body>
    <?php include "include/delAlert.php"; ?>
    <div class="wrapper">
        <?php include "include/sidebar.php"; ?>
        <div class="main-panel">
            <?php include "include/navbar.php"; ?>
            <div class="content">
                    <?php 
                        include "koneksi.php";
                        include "controller.php";
                    ?>
            </div>
</body>
            <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy;<a href="index.php">FKTI</a>, Susanti <?php echo Date('Y') ?>.
                </p>
            </div>
        </footer>
    
    
</html>