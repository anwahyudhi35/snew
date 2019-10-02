<?php

$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir,TIMESTAMPDIFF(MONTH, tgl_lahir,now()) as umur FROM bayi where kelamin = 'pria' && TIMESTAMPDIFF(MONTH, tgl_lahir,now()) < 7" ) or die(mysqli_error($dbh));


//jadikan satu umur semua kriteria per kelamin

// 4 variabel = kelamin, umur, berat, panjang

//laki - laki tinggi
    //umur 0 bulan
if($data['umur']==0){
    //pendek
    if($data['tinggi']<45){
        $pendek=1;
    }
    elseif ($data['tinggi']>46.3) {
        $pendek=0;
    }
    elseif ($data['tinggi']<45 && $data['tinggi']<46.3) {
        $pendek=($data['tinggi']-45)/45;
    }

    //normal
    if($data['tinggi']<45 || $data['tinggi']>53.4 ){
        $sedang=0;
    }
    elseif ($data['tinggi']>45 && $data['tinggi']<46.3) {
        $sedang=($data['tinggi']-45)/45;
    }
    elseif ($data['tinggi']<53.4 && $data['tinggi']>46.3) {
        $sedang=(53.4-$data['tinggi'])/45;
    }

    //normal
    if($data['tinggi']>53.4 ){
        $tiang=1;
    }
    elseif ($data['tinggi']>46.3 && $data['tinggi']<53.4) {
        $tiang=($data['tinggi']-46.3)/46.3;
    }
    elseif ($data['tinggi']<46.3) {
        $tiang=0;
        }
} 
    //umur 1 bulan
    elseif ($data['umur']==1) {
        if($data['tinggi']<45){
            $pendek=1;
        }
        elseif ($data['tinggi']>46.3) {
            $pendek=0;
        }
        elseif ($data['tinggi']<45 && $data['tinggi']<46.3) {
            $pendek=($data['tinggi']-45)/45;
        }

        //normal
        if($data['tinggi']<45 || $data['tinggi']>53.4 ){
            $sedang=0;
        }
        elseif ($data['tinggi']>45 && $data['tinggi']<46.3) {
            $sedang=($data['tinggi']-45)/45;
        }
        elseif ($data['tinggi']<53.4 && $data['tinggi']>46.3) {
            $sedang=(53.4-$data['tinggi'])/45;
        }

        //normal
        if($data['tinggi']>53.4 ){
            $tiang=1;
        }
        elseif ($data['tinggi']>46.3 && $data['tinggi']<53.4) {
            $tiang=($data['tinggi']-46.3)/46.3;
        }
        elseif ($data['tinggi']<46.3) {
            $tiang=0;
            }
    }
    //umur 2 bulan
    elseif ($data['umur']==2) {
        if($data['tinggi']<45){
            $pendek=1;
        }
        elseif ($data['tinggi']>46.3) {
            $pendek=0;
        }
        elseif ($data['tinggi']<45 && $data['tinggi']<46.3) {
            $pendek=($data['tinggi']-45)/45;
        }
    
        //normal
        if($data['tinggi']<45 || $data['tinggi']>53.4 ){
            $sedang=0;
        }
        elseif ($data['tinggi']>45 && $data['tinggi']<46.3) {
            $sedang=($data['tinggi']-45)/45;
        }
        elseif ($data['tinggi']<53.4 && $data['tinggi']>46.3) {
            $sedang=(53.4-$data['tinggi'])/45;
        }
    
        //normal
        if($data['tinggi']>53.4 ){
            $tiang=1;
        }
        elseif ($data['tinggi']>46.3 && $data['tinggi']<53.4) {
            $tiang=($data['tinggi']-46.3)/46.3;
        }
        elseif ($data['tinggi']<46.3) {
            $tiang=0;
            }
        }
        //umur 3 bulan
        elseif ($data['umur']==3) {
            if($data['tinggi']<45){
                $pendek=1;
            }
            elseif ($data['tinggi']>46.3) {
                $pendek=0;
            }
            elseif ($data['tinggi']<45 && $data['tinggi']<46.3) {
                $pendek=($data['tinggi']-45)/45;
            }
        
            //normal
            if($data['tinggi']<45 || $data['tinggi']>53.4 ){
                $sedang=0;
            }
            elseif ($data['tinggi']>45 && $data['tinggi']<46.3) {
                $sedang=($data['tinggi']-45)/45;
            }
            elseif ($data['tinggi']<53.4 && $data['tinggi']>46.3) {
                $sedang=(53.4-$data['tinggi'])/45;
            }
        
            //normal
            if($data['tinggi']>53.4 ){
                $tiang=1;
            }
            elseif ($data['tinggi']>46.3 && $data['tinggi']<53.4) {
                $tiang=($data['tinggi']-46.3)/46.3;
            }
            elseif ($data['tinggi']<46.3) {
                $tiang=0;
                }
            }

            //umur 4 bulan
            elseif ($data['umur']==4) {
                if($data['tinggi']<45){
                    $pendek=1;
                }
                elseif ($data['tinggi']>46.3) {
                    $pendek=0;
                }
                elseif ($data['tinggi']<45 && $data['tinggi']<46.3) {
                    $pendek=($data['tinggi']-45)/45;
                }
            
                //normal
                if($data['tinggi']<45 || $data['tinggi']>53.4 ){
                    $sedang=0;
                }
                elseif ($data['tinggi']>45 && $data['tinggi']<46.3) {
                    $sedang=($data['tinggi']-45)/45;
                }
                elseif ($data['tinggi']<53.4 && $data['tinggi']>46.3) {
                    $sedang=(53.4-$data['tinggi'])/45;
                }
            
                //normal
                if($data['tinggi']>53.4 ){
                    $tiang=1;
                }
                elseif ($data['tinggi']>46.3 && $data['tinggi']<53.4) {
                    $tiang=($data['tinggi']-46.3)/46.3;
                }
                elseif ($data['tinggi']<46.3) {
                    $tiang=0;
                    }
                }
                // umur 5 bulan
                elseif ($data['umur']==5) {
                    if($data['tinggi']<45){
                        $pendek=1;
                    }
                    elseif ($data['tinggi']>46.3) {
                        $pendek=0;
                    }
                    elseif ($data['tinggi']<45 && $data['tinggi']<46.3) {
                        $pendek=($data['tinggi']-45)/45;
                    }
                
                    //normal
                    if($data['tinggi']<45 || $data['tinggi']>53.4 ){
                        $sedang=0;
                    }
                    elseif ($data['tinggi']>45 && $data['tinggi']<46.3) {
                        $sedang=($data['tinggi']-45)/45;
                    }
                    elseif ($data['tinggi']<53.4 && $data['tinggi']>46.3) {
                        $sedang=(53.4-$data['tinggi'])/45;
                    }
                
                    //normal
                    if($data['tinggi']>53.4 ){
                        $tiang=1;
                    }
                    elseif ($data['tinggi']>46.3 && $data['tinggi']<53.4) {
                        $tiang=($data['tinggi']-46.3)/46.3;
                    }
                    elseif ($data['tinggi']<46.3) {
                        $tiang=0;
                        }
                    }
                    //umur 6 bulan
                    elseif ($data['umur']==6) {
                        if($data['tinggi']<45){
                            $pendek=1;
                        }
                        elseif ($data['tinggi']>46.3) {
                            $pendek=0;
                        }
                        elseif ($data['tinggi']<45 && $data['tinggi']<46.3) {
                            $pendek=($data['tinggi']-45)/45;
                        }
                    
                        //normal
                        if($data['tinggi']<45 || $data['tinggi']>53.4 ){
                            $sedang=0;
                        }
                        elseif ($data['tinggi']>45 && $data['tinggi']<46.3) {
                            $sedang=($data['tinggi']-45)/45;
                        }
                        elseif ($data['tinggi']<53.4 && $data['tinggi']>46.3) {
                            $sedang=(53.4-$data['tinggi'])/45;
                        }
                    
                        //normal
                        if($data['tinggi']>53.4 ){
                            $tiang=1;
                        }
                        elseif ($data['tinggi']>46.3 && $data['tinggi']<53.4) {
                            $tiang=($data['tinggi']-46.3)/46.3;
                        }
                        elseif ($data['tinggi']<46.3) {
                            $tiang=0;
                            }
                        }

//laki - laki berat
    //umur 0 bulan
    if($data['umur']==0){
            //kurus
        if($data['berat']<1.5){
            $kurus=1;
        }
        elseif ($data['berat']>3.4) {
            $kurus=0;
        }
        elseif ($data['berat']<3.4 && $data['berat']<1.5) {
            $kurus=($data['berat']-1.5)/1.5;
        }

        //normal
        if($data['berat']<1.5 || $data['berat']>5.7 ){
            $berisi=0;
        }
        elseif ($data['berat']>1.5 && $data['berat']<3.4) {
            $berisi=($data['berat']-1.5)/1.5;
        }
        elseif ($data['berat']<5.7 && $data['berat']>3.4) {
            $berisi=(5.7-$data['berat'])/1.5;
        }

        //normal
        if($data['berat']>5.7 ){
            $gemuk=1;
        }
        elseif ($data['berat']>3.4 && $data['berat']<5.7) {
            $gemuk=($data['berat']-3.4)/3.4;
        }
        elseif ($data['berat']<3.4) {
            $gemuk=0;
            }
        }
        //umur 1 bulan
        elseif (umur==1) {
                //kurus
        if($data['berat']<1.5){
            $kurus=1;
        }
        elseif ($data['berat']>3.4) {
            $kurus=0;
        }
        elseif ($data['berat']<3.4 && $data['berat']<1.5) {
            $kurus=($data['berat']-1.5)/1.5;
        }

        //normal
        if($data['berat']<1.5 || $data['berat']>5.7 ){
            $berisi=0;
        }
        elseif ($data['berat']>1.5 && $data['berat']<3.4) {
            $berisi=($data['berat']-1.5)/1.5;
        }
        elseif ($data['berat']<5.7 && $data['berat']>3.4) {
            $berisi=(5.7-$data['berat'])/1.5;
        }

        //normal
        if($data['berat']>5.7 ){
            $gemuk=1;
        }
        elseif ($data['berat']>3.4 && $data['berat']<5.7) {
            $gemuk=($data['berat']-3.4)/3.4;
        }
        elseif ($data['berat']<3.4) {
            $gemuk=0;
            }
        }
        //umur 2 bulan
        elseif (umur==2) {
            //kurus
    if($data['berat']<1.5){
        $kurus=1;
    }
    elseif ($data['berat']>3.4) {
        $kurus=0;
    }
    elseif ($data['berat']<3.4 && $data['berat']<1.5) {
        $kurus=($data['berat']-1.5)/1.5;
    }

    //normal
    if($data['berat']<1.5 || $data['berat']>5.7 ){
        $berisi=0;
    }
    elseif ($data['berat']>1.5 && $data['berat']<3.4) {
        $berisi=($data['berat']-1.5)/1.5;
    }
    elseif ($data['berat']<5.7 && $data['berat']>3.4) {
        $berisi=(5.7-$data['berat'])/1.5;
    }

    //normal
    if($data['berat']>5.7 ){
        $gemuk=1;
    }
    elseif ($data['berat']>3.4 && $data['berat']<5.7) {
        $gemuk=($data['berat']-3.4)/3.4;
    }
    elseif ($data['berat']<3.4) {
        $gemuk=0;
        }
    }
    //umur 3 bulan
    elseif (umur==3) {
        //kurus
if($data['berat']<1.5){
    $kurus=1;
}
elseif ($data['berat']>3.4) {
    $kurus=0;
}
elseif ($data['berat']<3.4 && $data['berat']<1.5) {
    $kurus=($data['berat']-1.5)/1.5;
}

//normal
if($data['berat']<1.5 || $data['berat']>5.7 ){
    $berisi=0;
}
elseif ($data['berat']>1.5 && $data['berat']<3.4) {
    $berisi=($data['berat']-1.5)/1.5;
}
elseif ($data['berat']<5.7 && $data['berat']>3.4) {
    $berisi=(5.7-$data['berat'])/1.5;
}

//normal
if($data['berat']>5.7 ){
    $gemuk=1;
}
elseif ($data['berat']>3.4 && $data['berat']<5.7) {
    $gemuk=($data['berat']-3.4)/3.4;
}
elseif ($data['berat']<3.4) {
    $gemuk=0;
    }
}
//umur 4 bulan
elseif (umur==4) {
    //kurus
if($data['berat']<1.5){
$kurus=1;
}
elseif ($data['berat']>3.4) {
$kurus=0;
}
elseif ($data['berat']<3.4 && $data['berat']<1.5) {
$kurus=($data['berat']-1.5)/1.5;
}

//normal
if($data['berat']<1.5 || $data['berat']>5.7 ){
$berisi=0;
}
elseif ($data['berat']>1.5 && $data['berat']<3.4) {
$berisi=($data['berat']-1.5)/1.5;
}
elseif ($data['berat']<5.7 && $data['berat']>3.4) {
$berisi=(5.7-$data['berat'])/1.5;
}

//normal
if($data['berat']>5.7 ){
$gemuk=1;
}
elseif ($data['berat']>3.4 && $data['berat']<5.7) {
$gemuk=($data['berat']-3.4)/3.4;
}
elseif ($data['berat']<3.4) {
$gemuk=0;
}
}
//umur 5 bulan
elseif (umur==5) {
    //kurus
if($data['berat']<1.5){
$kurus=1;
}
elseif ($data['berat']>3.4) {
$kurus=0;
}
elseif ($data['berat']<3.4 && $data['berat']<1.5) {
$kurus=($data['berat']-1.5)/1.5;
}

//normal
if($data['berat']<1.5 || $data['berat']>5.7 ){
$berisi=0;
}
elseif ($data['berat']>1.5 && $data['berat']<3.4) {
$berisi=($data['berat']-1.5)/1.5;
}
elseif ($data['berat']<5.7 && $data['berat']>3.4) {
$berisi=(5.7-$data['berat'])/1.5;
}

//normal
if($data['berat']>5.7 ){
$gemuk=1;
}
elseif ($data['berat']>3.4 && $data['berat']<5.7) {
$gemuk=($data['berat']-3.4)/3.4;
}
elseif ($data['berat']<3.4) {
$gemuk=0;
}
}
//umur 6 bulan
elseif (umur==6) {
    //kurus
if($data['berat']<1.5){
$kurus=1;
}
elseif ($data['berat']>3.4) {
$kurus=0;
}
elseif ($data['berat']<3.4 && $data['berat']<1.5) {
$kurus=($data['berat']-1.5)/1.5;
}

//normal
if($data['berat']<1.5 || $data['berat']>5.7 ){
$berisi=0;
}
elseif ($data['berat']>1.5 && $data['berat']<3.4) {
$berisi=($data['berat']-1.5)/1.5;
}
elseif ($data['berat']<5.7 && $data['berat']>3.4) {
$berisi=(5.7-$data['berat'])/1.5;
}

//normal
if($data['berat']>5.7 ){
$gemuk=1;
}
elseif ($data['berat']>3.4 && $data['berat']<5.7) {
$gemuk=($data['berat']-3.4)/3.4;
}
elseif ($data['berat']<3.4) {
$gemuk=0;
}
}
?>