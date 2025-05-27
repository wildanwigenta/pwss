<?php echo "<br> Pengaruh penggunaan <b>htmlspecialchars</b> <hr>";?>
<!-- form.html -->
<form method="post" action="">
  Nama: <input type="text" name="nama">
  <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    echo "Tanpa htmlspecialchars:<br>";
    echo $nama;

    echo "<br>Dengan htmlspecialchars:<br>";
    echo htmlspecialchars($nama);
}

echo "<br><br>Contoh penggunaan ".htmlspecialchars("&lt dan &gt"). "<hr>";
$teks_mentah = "<script>alert('Halo!');</script> Teks biasa > lainnya.";
echo "Teks Mentah: ". $teks_mentah . "<br>";
$teks_aman = htmlspecialchars($teks_mentah);
echo "Teks Aman (setelah htmlspecialchars): ". $teks_aman;
?>