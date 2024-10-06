<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='login.php';</script>";
        } else if(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from tabel_pegawai where username = '".$username."' and password = '".md5($password)."'");
            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['Id_pegawai']=$dt_login['Id_pegawai'];
                $_SESSION['Nama']=$dt_login['Nama'];
                $_SESSION['status_login']=true;
                header("location: home.php");
            } else {
                echo "<script>alert('username dan password tidak benar');location.href='login.php';</script>";
            }
        }
    }
?>