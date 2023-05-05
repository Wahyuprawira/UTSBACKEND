<?php

$iddosen = $_GET['iddosen'];
include "koneksi.php";

$qry = "DELETE FROM dosen WHERE iddosen = '$iddosen'";
$exec = mysqli_query($con, $qry);
if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'formdosen.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}