<div class="sidebar" data-color="green" data-image="assets/img/sidebar-6.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="./" class="simple-text">
                Sistem Pendukung Keputusan <br>
                  Status Gizi Bayi
                </a>
            </div>

            <ul class="nav">
                <li <?php if (!isset($_GET['ap'])) echo "class='active'";?> >
                    <a href="?ap=home">
                        <i class="pe-7s-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>

                <li <?php if (isset($_GET['ap']) && $_GET['ap']=="data_bayi") echo "class='active'";?> >
                    <a href="?ap=data_bayi">
                        <i class="pe-7s-id"></i>
                        <p>Data Bayi</p>
                    </a>
                </li>

                <li <?php if (isset($_GET['ap']) && $_GET['ap']=="data_admin") echo "class='active'";?> >
                    <a href="?ap=data_admin">
                        <i class="pe-7s-id"></i>
                        <p>Data Admin</p>
                    </a>
                </li>

                <li <?php if (isset($_GET['ap']) && $_GET['ap']=="data_kriteria") echo "class='active'";?> >
                    <a href="?ap=data_kriteria">
                        <i class="pe-7s-folder"></i>
                        <P>Data Kriteria</P>
                    </a>
                </li>

                <li <?php if (isset($_GET['ap']) && $_GET['ap']=="menu_awal") echo "class='active'";?> >
                    <a href="?ap=menu_awal">
                        <i class="pe-7s-refresh"></i>
                        <p>Proses Hitung Peserta</p>
                    </a>
                </li>
            
            </ul>
        </div>
    </div>