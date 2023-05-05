<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$mp = $_POST['mp'];
$jp = $_POST['jp'];

include "koneksi.php";

$qry = "UPDATE bayar SET 
        nama = '$nama',
        jurusan = '$jurusan',
        mp = '$mp',
        jp = '$jp',
        WHERE nim = '$nim'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'formbyr.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}