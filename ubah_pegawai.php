<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        body {
            background-color: #E3F2FD;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h3 {
            color: #2196F3;
            text-align: center;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .form-label {
            color: #1976D2;
            font-weight: bold;
        }

        .btn-primary {
            background-color: #2196F3;
            border-color: #1976D2;
        }

        .btn-primary:hover {
            background-color: #1976D2;
        }

        textarea {
            resize: none;
        }

        .form-select, .form-control {
            border: 2px solid #BBDEFB;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include "koneksi.php";
        $qry_get_pegawai = mysqli_query($conn, "SELECT * FROM tabel_pegawai WHERE id_pegawai = '" . $_GET['id_pegawai'] . "'");
        $data_pegawai = mysqli_fetch_array($qry_get_pegawai);
        $qry_get_jabatan = mysqli_query($conn, "SELECT * FROM tabel_jabatan");
        ?>
        <h3>Ubah Pegawai</h3>
        <form action="proses_ubah_pegawai.php" method="post">
            <input type="hidden" name="id_pegawai" value="<?= $data_pegawai['id_pegawai'] ?>" />

            <div class="mb-3">
                <label class="form-label">Nama:</label>
                <input type="text" name="Nama" value="<?= $data_pegawai['Nama'] ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">NIK:</label>
                <input type="text" name="NIK" value="<?= $data_pegawai['NIK'] ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Jenis Kelamin:</label>
                <select name="Jenis_Kelamin" class="form-select" required>
                    <option value="" disabled>Pilih Jenis Kelamin</option>
                    <?php
                    $arr_Jenis_Kelamin = array('L' => 'Laki-laki', 'P' => 'Perempuan');
                    foreach ($arr_Jenis_Kelamin as $key_Jenis_Kelamin => $val_Jenis_Kelamin):
                        $selek = ($key_Jenis_Kelamin == $data_pegawai['Jenis_Kelamin']) ? "selected" : "";
                    ?>
                        <option value="<?= $key_Jenis_Kelamin ?>" <?= $selek ?>><?= $val_Jenis_Kelamin ?></option>
                    <?php endforeach ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">No Telepon:</label>
                <input type="text" name="No_tlp" value="<?= $data_pegawai['No_tlp'] ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat:</label>
                <textarea name="Alamat" class="form-control" rows="4" required><?= $data_pegawai['Alamat'] ?></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Jabatan:</label>
                <select name="id_jabatan" class="form-select">
                    <option disabled>Pilih Jabatan</option>
                    <?php
                    include "koneksi.php";
                    while ($data_jabatan = mysqli_fetch_array($qry_get_jabatan)) {
                        $selek_jabatan = ($data_jabatan['id_jabatan'] == $data_pegawai['jabatan']) ? "selected" : "";
                        echo '<option value="' . $data_jabatan['id_jabatan'] . '" ' . $selek_jabatan . '>' . $data_jabatan['nama_jabatan'] . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Username:</label>
                <input type="text" name="username" value="<?= $data_pegawai['username'] ?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password (biarkan kosong jika tidak ingin diubah):</label>
                <input type="password" name="password" class="form-control">
            </div>

            <div class="text-center">
                <input type="submit" name="simpan" value="Ubah Pegawai" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>
