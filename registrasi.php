<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
        
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: #ADD8E6;
            background-size: 400% 400%;
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            width: 100%;
            max-width: 900px; /* Lebar kartu diperbesar */
            padding: 3rem; /* Padding diperbesar */
        }

        h3 {
            color: #4e54c8;
            font-size: 2rem; /* Ukuran font diperbesar */
        }

        .form-control {
            font-size: 1.1rem; /* Ukuran input diperbesar */
            padding: 1rem; /* Padding input diperbesar */
        }

        .form-control.large-textarea {
            height: 200px; /* Tinggi textarea lebih besar */
        }

        .container {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }

        .btn-primary {
            padding: 1rem;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="col-md-8"> <!-- Kolom lebih besar untuk mengisi layar -->
            <div class="card shadow-sm">
                <h3 class="text-center mb-4">Registrasi Pegawai</h3>

                <form action="proses_registrasi.php" method="post">
                    <div class="mb-3">
                        <label for="NIK" class="form-label">NIK</label>
                        <input type="text" name="NIK" class="form-control" placeholder="Masukkan NIK" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" name="Nama" class="form-control" placeholder="Masukkan Nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="Alamat" class="form-label">Alamat</label>
                        <textarea name="Alamat" class="form-control large-textarea" rows="3" placeholder="Masukkan Alamat" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="Jenis_Kelamin" class="form-select" required>
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="No_tlp" class="form-label">Nomor Telepon</label>
                        <input type="text" name="No_tlp" class="form-control" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="Jabatan" class="form-label">Jabatan</label>
                        <select name="jabatan" class="form-control" required>
                            <option>Pilih Jabatan Anda</option>
                            <?php
                            include "koneksi.php";
                            $qry_jabatan = mysqli_query($conn, "select * from tabel_jabatan");
                            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                                echo '<option value="' . $data_jabatan['id_jabatan'] . '">' . $data_jabatan['nama_jabatan'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="simpan" class="btn btn-primary">Tambah Pegawai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
