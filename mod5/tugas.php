<?php
$namakota = [
    "Bandung" => "Jawa Barat",
    "Semarang" => "Jawa Tengah",
    "Surabaya" => "Jawa Timur",
    "Serang" => "Banten",
    "Jakarta" => "DKI Jakarta",
    "Yogyakarta" => "DI Yogyakarta"
];

foreach ($namakota as $kota => $provinsi) {
    echo "Kota $kota ada di provinsi $provinsi.<br>";
}
?>
