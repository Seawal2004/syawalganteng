<?php
// Superglobals
$hostname= "localhost";
$username= "root";
$pasword= "";
$database= "db_kelas_c";

$koneksi = mysqli_connect($hostname,$username,$pasword,$database);

if($koneksi){
    echo "koneksi berhasil";
} else {
    echo "koneksi gagal";
}



// Variabel
$nama = "SYAWAL";
$umur = 30;

// Echo / Print
echo "Halo, nama saya $nama dan saya berumur $umur tahun.";
print "Halo, nama saya $nama dan saya berumur $umur tahun.";

// Data Types
$integerVar = 10;
$floatVar = 3.14;
$stringVar = "Hello, World!";
$booleanVar = true;

// Strings
$pesan = "Halo......";
echo strlen($pesan); // Menghitung panjang string
echo strtoupper($pesan); // Mengubah string menjadi huruf besar
echo strtolower($pesan); // Mengubah string menjadi huruf kecil

// Numbers
$angka1 = 10;
$angka2 = 5;

// Operasi Matematika
$hasilTambah = $angka1 + $angka2;
$hasilKurang = $angka1 - $angka2;
$hasilKali = $angka1 * $angka2;
$hasilBagi = $angka1 / $angka2;

// Constants
define("PI", 3.14);

// Magic Constants
echo __FILE__; // Menampilkan path file skrip saat ini
echo __LINE__; // Menampilkan nomor baris saat ini

// If...Else...Elseif
if ($umur >= 18) {
    echo "Anda adalah dewasa.";
} elseif ($umur >= 13) {
    echo "Anda adalah remaja.";
} else {
    echo "Anda adalah anak-anak.";
}

// Switch
$warna = "merah";
switch ($warna) {
    case "merah":
        echo "Warna favorit Anda adalah merah.";
        break;
    case "biru":
        echo "Warna favorit Anda adalah biru.";
        break;
    default:
        echo "Warna favorit Anda tidak diketahui.";
}

// Loops
for ($i = 1; $i <= 5; $i++) {
    echo "Nomor: $i <br>";
}

$i = 1;
while ($i <= 5) {
    echo "Nomor: $i <br>";
    $i++;
}

// Functions
function jumlah($a, $b) {
    return $a + $b;
}

echo jumlah(2, 3); // Output: 5

// Arrays
$buah = array("Apel", "Jeruk", "Mangga");
echo $buah[0]; // Output: Apel




?>