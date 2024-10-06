<?php
if ($_POST) {
    $id_pegawai = $_POST['id_pegawai'];
    $NIK = $_POST['NIK'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Jenis_Kelamin = $_POST['Jenis_Kelamin'];
    $id_jabatan = $_POST['id_jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($Nama)) {
        echo "<script>alert('Nama tidak boleh kosong');location.href='registrasi .php';</script>";

    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='registrasi.php';</script>";
    } else {
        include "koneksi.php";
        // Jika password kosong, jangan update password
        if (empty($password)) {
            $update = mysqli_query($conn, "UPDATE tabel_pegawai SET NIK='$NIK', Nama='$Nama', Alamat='$Alamat', Jenis_Kelamin='$Jenis_Kelamin', jabatan='$id_jabatan', username='$username' WHERE id_pegawai='$id_pegawai' ") or die(mysqli_error($conn));
        } else {
            // Jika password tidak kosong, update juga password
            $update = mysqli_query($conn, "UPDATE tabel_pegawai SET NIK='$NIK', Nama='$Nama', Alamat='$Alamat', Jenis_Kelamin='$Jenis_Kelamin', jabatan='$id_jabatan', username='$username', password='" . md5($password) . "' WHERE id_pegawai='$id_pegawai' ") or die(mysqli_error($conn));
        }

        if ($update) {
            echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=" . $id_pegawai . "';</script>";
        }
    }
}
?>
