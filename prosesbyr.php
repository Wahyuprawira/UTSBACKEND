<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$mp = $_POST['mp'];
$bukti = $_POST['bukti'];
include "koneksi.php";
$path = "images/".$bukti;

$qry = "INSERT INTO pembayaran VALUES (
    '$nim', '$nama', '$jurusan', '$mp', '$bukti'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'formbyr.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}