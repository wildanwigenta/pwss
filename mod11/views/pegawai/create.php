<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai (MVC)</title>
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        .container {
            margin: 20px;
        }

        form {
            margin-top: 20px;
        }

        form label {
            display: block;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }

        .btn-back {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #f44336;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tambah Pegawai Baru</h1>
        <form action="index.php?controller=pegawai&action=create" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>
            <input type="submit" value="Simpan">
        </form>
        <a href="index.php?controller=pegawai&action=index" class="btn-back">Kembali</a>
    </div>
</body>

</html>