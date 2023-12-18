<?php

session_start();
include "konek.php";

$user = $_POST['usernamediweb'];
$pass = $_POST['passworddiweb'];

// echo "ini adalah username " .$user. " dan ini adalah password " .$pass;

if (empty($user)) {
    $_SESSION['info'] = 'user dan password tidak boleh kosong';
    header("location:../login.php");
    exit();
}else {
    if (empty($pass)) {
    $_SESSION['info'] = 'user dan password tidak boleh kosong';
    header("location:../login.php");
    exit();
    }else {
        $sql = "SELECT * FROM tb_akun WHERE ID_AKUN LIKE '$user' AND USER_NAME LIKE '$pass'";
$cek = mysqli_query($kon, $sql);
$row = mysqli_fetch_assoc($cek);

if($row['ID_AKUN'] === $user && $row['USER_NAME'] === $pass){
    $_SESSION['login'] = true;

    
}else{
    $_SESSION['info'] = 'username/password salah';
    header ("location:../login.php");
    
}
    if (isset($_SESSION['login'])) {
       header ("location:../index.php");
    }else {
        header ("location:../login.php");
        exit();
    }

    }

}





?>

