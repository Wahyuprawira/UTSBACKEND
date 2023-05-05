<?php

$nim = $_GET['nim'];
include "koneksi.php";

$qry = "DELETE FROM bayar WHERE nim = '$nim'";
$exec = mysqli_query($con, $qry);
if($exec){
    echo "<script>alert('Data berhasil dihapus'); 
    window.location = 'formbyr.php';</script>";
}else{
    echo "<script>alert('Data gagal dihapus');</script>";
}