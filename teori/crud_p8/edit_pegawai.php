<?php
include "koneksi.php";
$idEdit=$_GET['id_edit'];
$sql="select * from pegawai where  id_pegawai='$idEdit'";
$hasil = $koneksi->query($sql);
$row = $hasil->fetch_assoc();
$namaEdit= $row['nama'];
$alamatEdit=$row['alamat'];
$jabatanEdit=$row['id_jabatan'];
echo "$idEdit  $namaEdit    $alamatEdit  $jabatanEdit" ;
?>


<!-- Program dibawah dimidifikasi dari form_select.php-->
<html>
<head>
  <title>EDdit  Data Pegawai</title>
</head>
<body>
  <h2>Edit  Pegawai</h2>
  <form action="simpan_edit.php" method="post">
     <input type="hidden" name="id_pegawai" value="<?=$idEdit?>" >
    Nama: <input type="text" name="nama"  value="<?=$namaEdit?>"><br><br>
    Alamat: <input type="text" name="alamat" value="<?=$alamatEdit?>"  ><br><br>
<?php	
	include "koneksi.php";	
	 $sql_jabatan = "SELECT id_jabatan, nama_jabatan FROM jabatan";
	 $hasil = $koneksi->query($sql_jabatan);
	 ?>


	Jabatan : <select name="id_jabatan" >
        <?php while ($row = $hasil->fetch_assoc()) { ?>
            <option value="<?php echo $row['id_jabatan'];?>"        
            <?php 
			if($row['id_jabatan']==$jabatanEdit)
			echo "selected";?>
			>
                <?php echo $row['id_jabatan'] . " - " . $row['nama_jabatan']; 
				?>			
            </option>
        <?php } ?>
    </select>
	
	
    <br><input type="submit" value="Simpan">
  </form>
</body>
</html>
