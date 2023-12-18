<?php

include "konek.php";

$del = $_GET['del'];

$hapus = "DELETE from tb_siswa WHERE NO=".$del;

mysqli_query($kon,$hapus);
header("location:../index.php");

?>