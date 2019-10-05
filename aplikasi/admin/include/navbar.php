<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
            </button>

            <!-- Judul Halaman -->
            <?php 
                if (isset($_GET['ap']) && $_GET['ap']=="home") 
                    echo "<h3>Beranda Admin</h3>";
                    //section bayi
                else if (isset($_GET['ap']) && $_GET['ap']=="data_bayi")      
                    echo "<h3>Data Bayi</h3>";
                else if (isset($_GET['ap']) && $_GET['ap']=="tambah_bayi")      
                    echo "<h3>Tambah Data Bayi</h3>";
                else if (isset($_GET['ap']) && $_GET['ap']=="data_kriteria")      
                    echo "<h3>Data Kriteria Bayi</h3>";
                else if (isset($_GET['ap']) && $_GET['ap']=="data_bulanan")      
                    echo "<h3>Data Bulanan Bayi</h3>";
                    
                    //section akun/admin
                else if (isset($_GET['ap']) && $_GET['ap']=="data_admin") 
                    echo "<h3>Data Akun Admin</h3>";    
                else if (isset($_GET['ap']) && $_GET['ap']=="edit_admin") 
                    echo "<h3>Edit Akun</h3>";
            ?>
            <!-- End Judul Halaman -->
        </div>
        <ul class="nav navbar-nav navbar-right">
        <?php
            include "../../koneksi.php";
            $nama = $_SESSION['nama'];
            $qry = mysqli_query($dbh,"select * from user where username='$nama'") or die (mysql_error());
            $us = mysqli_fetch_array($qry);

            $id_user = $_SESSION['username'];
            $sql = mysqli_query($dbh,"SELECT * FROM user where username='$id_user'");
            $row = mysqli_fetch_array($sql);
        ?>
            <li> <a class="btn" href="?ap=edit_admin&no=<?php echo $row['no'];?>"><span class="glyphicon glyphicon-user"></span>
            <?php echo $_SESSION['nama'] ?>
            </a></li>
        <li>
            <a class="btn" href="logout.php">
            <span class="glyphicon glyphicon-log-out"></span>    
            <span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
        </ul>
        
    </div>
</nav> 