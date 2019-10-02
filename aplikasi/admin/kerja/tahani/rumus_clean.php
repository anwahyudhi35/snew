<?php

$sql = mysqli_query($dbh, "SELECT *,DATE_FORMAT(tgl_lahir,'%d %M %Y') as lahir,TIMESTAMPDIFF(MONTH, tgl_lahir,now()) as umur FROM bayi where TIMESTAMPDIFF(MONTH, tgl_lahir,now()) < 7" ) or die(mysqli_error($dbh));

while ($data = mysqli_fetch_array($sql)) {
    
}

?>