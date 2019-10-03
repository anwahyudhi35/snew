<?php

$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir,TIMESTAMPDIFF(MONTH, tgl_lahir,now()) as umur FROM bayi where TIMESTAMPDIFF(MONTH, tgl_lahir,now()) < 7" ) or die(mysqli_error($dbh));

switch ($data[kelamin]) {
    case 'Pria':
        print("anak anda lelaki");
        break;

    case 'Perempuan':
        print("anak anda perempuan");
        break;

    default:
        print("tidak terdapat data anak");
        break;
}

?>