<?php
function bday_data() {
    $mybday = date_create("2015-01-16");
    $today = date_create(date("Y-m-d"));
    $diff = date_diff($today, $mybday);
    //$discount_f = "$".number_format($discount, 2);
    echo $diff->format("%a");
}
bday_data();
echo $bday_data();
?>
