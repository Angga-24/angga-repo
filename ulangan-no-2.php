<?php

$usia=79;
if(usia>=0 and $usia<12){
    $status="anak-anak";
}(usia>=13 and $usia<17){
    $status="remaja";
}(usia>=18 and $usia<59){
    $status="dewasa";
}(usia>=60){
    $status="lansia";
}
echo "Usia Anda".$usia",Anda termasuk kedalam kategori" $status;