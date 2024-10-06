<?php
if($_POST){
    $NIK=$_POST['NIK'];
    $Nama=$_POST['Nama'];
    $Alamat=$_POST['Alamat'];
    $Jenis_Kelamin=$_POST['Jenis_Kelamin'];
    $No_tlp=$_POST['No_tlp'];
    $jabatan=$_POST['jabatan'];
    $username=$_POST['username'];
    $password= $_POST['password'];
    
    if(empty($NIK)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='registrasi.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='registrasi.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"INSERT INTO `tabel_pegawai` (`NIK`, `Nama`, `Alamat`, `Jenis_Kelamin`, `No_tlp`, `jabatan`, `username`, `password`) VALUES ('".$NIK."','".$Nama."','".$Alamat."','".$Jenis_Kelamin."','".$No_tlp."', '".$jabatan."','".$username."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Pegawai');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Pegawai');location.href='login.php.php';</script>";
        }
    }
}
?>