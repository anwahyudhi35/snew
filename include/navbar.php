<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
        <!-- jika ap anu maka navbar-brand ganti -->
        <?php

        if(isset($_GET['ap'])){
        $ap = $_GET['ap'];
        
        if ($ap=="data_bayi"){
        ?> <a class="navbar-brand" href="#">Data Bayi</a>
        <?php }

        if($ap=="about"){
        ?><a class="navbar-brand" href="#">Tentang</a><?php
        }

        }else{
        ?> <a class="navbar-brand" href="#">Beranda</a>
        <?php }

        ?>   
    </div>
    </div>
</nav>