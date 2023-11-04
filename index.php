<?php
$nama = "ADHE IRYANTOO";
if(empty($nama)){
    cetaknama("sapril");
    // ini kondisi pertama
    echo "Tidak ada nama";
} else {
    for($i=0; $i<5; $i++){
        cetaknama ("iqbal");
   
    //ini kondisi lainya
echo "Hello......".$nama."....";
}
}

function cetaknama($nama){
    echo "Hallo".$nama;
}


function hitungLuasRuangan($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}
$panjang = 2;
$lebar = 1; 
$luasRuangan = hitungLuasRuangan($panjang, $lebar);
echo "Luas ruangan dengan panjang $panjang meter dan lebar $lebar meter adalah: $luasRuangan meter persegi.";


?>