<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location: ../login.php");
}else{
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../../assets/img/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Sistem Pendukung Keputusan Status Gizi Bayi</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <?php
        // include "include/sidebar.php"; 
        // include "include/navbar.php";
    ?>
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
                        include "../../koneksi.php";
                        include "controller.php";
                    ?>
            </div>
<body>
            <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy;<a href="index.php">FKTI</a>, Susanti <?php echo Date('Y') ?>.
                </p>
            </div>
        </footer>
    </div>
</div>
    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>

    <script src="include/search.js"></script>

    <script type="text/javascript">

        // $(document).ready(function(){

        //     demo.initChartist();

        //     $.notify({
        //         icon: 'pe-7s-gift',
        //         message: "Selamat Datang di <b>Sistem Pendukung Keputusan</b> Tinjau Ulang Uang Kuliah Tunggal FKTI."

        //     },{
        //         type: 'info',
        //         timer: 4000
        //     });

        // });
    </script>

    <script>
        var activeSystemClass = $('.list-group-item.active');
    $('#system-search').keyup( function() {
       var that = this;
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            //membuat teks menjadi lower case
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Mencari: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                //menyembunyikan baris
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        //apabila tidak ada data yang ke filter
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">Tidak ada data.</td></tr>');
        }
    });
    </script>

</html>
<?php } ?>