<?php
class Kalkulator {
    public function tambah($a, $b) {
        return $a + $b;
    }
}

$kalkulator = new Kalkulator();
echo $kalkulator->tambah(5, 3);
?>