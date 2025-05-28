<?php
// Koneksi ke database
include "koneksi.php";
// Query join tabel pegawai dan jabatan
$sql = "SELECT pegawai.id_pegawai,pegawai.nama, jabatan.nama_jabatan, jabatan.gaji_pokok
    FROM pegawai
    INNER JOIN jabatan ON pegawai.id_jabatan = jabatan.id_jabatan 
	order by pegawai.id_pegawai desc";
$hasil = $koneksi->query($sql);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Data Pegawai</title>

</head>

<body>
    <h2>Daftar Pegawai dan Jabatan</h2>
    <a href="form_select.php">Tambah Data </a>
    <table border=1>
        <thead>
            <tr>
                <th>Id </th>
                <th>Nama Pegawai</th>
                <th>Jabatan</th>
                <th>Gaji Pokok</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($hasil->num_rows > 0) {
                while ($row = $hasil->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id_pegawai'] ?></td>

                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['nama_jabatan'] ?></td>
                        <td>Rp <?= $row['gaji_pokok'] ?></td>
                        <td><a href="hapus_pegawai.php?id_hapus=<?php echo $row['id_pegawai']; ?>"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a> </td>


                        <td><a href="edit_pegawai.php?id_edit=<?php echo $row['id_pegawai']; ?>"
                                onclick="return confirm('Apakah Anda mau edit record ini ?')">Edit</a></td>




                    </tr>
                <?php }
            } else { ?>
                <tr>
                    <td colspan="3"> Tidak ada data</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>


<?php
$koneksi->close();
?>