<?php

$iddosen = $_POST['iddosen'];
$namadosen = $_POST['namadosen'];
$kelas = $_POST['kelas'];
$matakuliah = $_POST['matakuliah'];
$ruangkelas = $_POST['ruangkelas'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "INSERT INTO dosen VALUES (
    '$iddosen', '$namadosen', '$kelas', '$matakuliah', '$ruangkelas', '$nohp', '$email'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'formdosen.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}
