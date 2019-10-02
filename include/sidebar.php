<div class="sidebar" data-color="green" data-image="assets/img/sidebar-6.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="./" class="simple-text">
                    Sistem Pendukung Keputusan <br>
                    Lomba Bayi Sehat 
                </a>
            </div>

            <ul class="nav">
                <li <?php if (!isset($_GET['ap'])) echo "class='active'";?> >
                    <a href="./">
                        <i class="pe-7s-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>


                <li <?php if (isset($_GET['ap']) && $_GET['ap']=="data_bayi") echo "class='active'";?> >
                    <a href="?ap=data_bayi">
                        <i class="pe-7s-note2"></i>
                        <p>Data Bayi</p>
                    </a>
                </li>


                <li <?php if (isset($_GET['ap']) && $_GET['ap']=="about") echo "class='active'";?> >
                    <a href="?ap=about">
                        <i class="pe-7s-note2"></i>
                        <p>About</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>