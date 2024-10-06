<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #ADD8E6;
            font-family: Arial, sans-serif;
        }

        .table-container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h3 {
            color: #2c3e50;
            font-weight: bold;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
        }

        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        .btn-success {
            background-color: #27ae60;
            border-color: #27ae60;
        }

        .btn-success:hover {
            background-color: #2ecc71;
            border-color: #2ecc71;
        }

        .btn-danger {
            background-color: #e74c3c;
            border-color: #e74c3c;
        }

        .btn-danger:hover {
            background-color: #c0392b;
            border-color: #c0392b;
        }

        .btn-back {
            background-color: #3498db;
            color: white;
            margin-top: 20px;
        }

        .btn-back:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
<?php include 'header.php'; ?>
    <div class="container">
        <div class="text-center">
            <h3>Daftar Pegawai</h3> <!-- Tulisan ini lebih ke bawah dan dekat dengan tabel -->
        </div>
        <div class="table-container">
            <table class="table table-hover table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Pegawai</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Gender</th>
                        <th>No Telepon</th>
                        <th>Username</th>
                        <th>Jabatan</th>
                        <th>Gaji Pokok</th>
                        <th>Tunjangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "koneksi.php";
                    $qry_pegawai = mysqli_query($conn, "select * from tabel_pegawai join tabel_jabatan on tabel_jabatan.id_jabatan=tabel_pegawai.jabatan");
                    $no = 0;
                    while ($data_pegawai = mysqli_fetch_array($qry_pegawai)) {
                        $no++; ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data_pegawai['Nama'] ?></td>
                            <td><?= $data_pegawai['NIK'] ?></td>
                            <td><?= $data_pegawai['Alamat'] ?></td>
                            <td><?= $data_pegawai['Jenis_Kelamin'] ?></td>
                            <td><?= $data_pegawai['No_tlp'] ?></td>
                            <td><?= $data_pegawai['username'] ?></td>
                            <td><?= $data_pegawai['nama_jabatan'] ?></td>
                            <td><?= $data_pegawai['gaji_pokok'] ?></td>
                            <td><?= $data_pegawai['tunjangan'] ?></td>
                            <td>
                                <a href="ubah_pegawai.php?id_pegawai=<?= $data_pegawai['id_pegawai'] ?>" class="btn btn-success btn-sm">Ubah</a>
                                <a href="hapus.php?id_pegawai=<?= $data_pegawai['id_pegawai'] ?>"
                                    onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                                    class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
