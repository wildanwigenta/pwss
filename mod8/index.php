<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi</title>
</head>

<body>
    <h2>CRUD DATA MAHASISWA</h2>
    <br />
    <a href="tambah.php">+ TAMBAH MAHASISWA</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>EMAIL</th>
            <th>ALAMAT</th>
            <th>NOMOR HP</th>
            <th>PRODI</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'koneksi.php';
        $data = mysqli_query($koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_assoc($data)) {
        ?>
            <tr>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['hp']; ?></td>
                <td>
                    <?php
                    $prodi = mysqli_query($koneksi, "SELECT namaProdi FROM prodi WHERE kodeProdi='" . $d['kodeProdi'] . "'");
                    $p = mysqli_fetch_assoc($prodi);
                    echo $p['namaProdi'];
                    ?>
                <td>
                    <a href="edit.php?nim=<?php echo $d['nim']; ?>">EDIT</a>
                    <a href="delete.php?nim=<?php echo $d['nim']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>