<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$mk1 = $_POST['mk1'];
$mk2 = $_POST['mk2'];
$mk3 = $_POST['mk3'];

include "koneksi.php";

$qry = "UPDATE krs SET 
        nama = '$nama',
        jurusan = '$jurusan',
        mk1 = '$mk1',
        mk2 = '$mk2',
        mk3 = '$mk3'
        WHERE nim = '$nim'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'formkrs.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}