<!DOCTYPE html>
<html>
<head>
  <title>Form Input Data Pegawai</title>
</head>
<body>
  <h2>Form Input Pegawai</h2>
  <form action="simpan_select.php" method="post">
    Nama: <input type="text" name="nama" required><br><br>
    Alamat: <input type="text" name="alamat" required><br><br>
	<?php 
     include "koneksi.php";	
	 $sql_jabatan = "SELECT id_jabatan, nama_jabatan FROM jabatan";
	 $hasil = $koneksi->query($sql_jabatan);
	 ?>
	
	Jabatan : 
	<select name="id_jabatan" >
        <?php while ($row = $hasil->fetch_assoc()) { ?>
            <option value="<?php echo $row['id_jabatan']; ?>">
                <?php echo $row['id_jabatan'] . " - " . $row['nama_jabatan']; ?>
            </option>
        <?php } ?>
    </select>
    <input type="submit" value="Simpan">
  </form>
</body>
</html>
