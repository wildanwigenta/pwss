<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi SIMPEG (MVC)</title>
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table,
        th,
        td {
            border: 1px solid black;
        }
        th,
        td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }

        .container {
            margin: 20px;
        }

        .btn {
            padding: 8px 12px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 4px;
        }

        .btn-edit {
            background-color: #008CBA;
        }

        .btn-delete {
            background-color: #f44336;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Data Pegawai</h1>
        <a href="index.php?controller=pegawai&action=create" class="btn">Tambah Pegawai</a>
        <?php
        // Data $stmt dan $num berasal dari controller
        if (isset($num) && $num > 0) {
            echo "<table>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>ID Pegawai</th>";
            echo "<th>Nama</th>";
            echo "<th>Alamat</th>";
            echo "<th>Aksi</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                echo "<tr>";
                echo "<td>{$id_pegawai}</td>";
                echo "<td>{$nama}</td>";
                echo "<td>{$alamat}</td>";
                echo "<td>";
                echo "<a href='index.php?controller=pegawai&action=edit&id=" . $id_pegawai . "' class='btn btn-edit'>Edit</a> ";
                echo "<a href='index.php?controller=pegawai&action=delete&id=" . $id_pegawai . "' class='btn btn-delete' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "<p>Belum ada data pegawai.</p>";
        }
        ?>
    </div>
</body>

</html>