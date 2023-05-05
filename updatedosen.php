<?php

$iddosen = $_POST['iddosen'];
$namadosen = $_POST['namadosen'];
$kelas = $_POST['kelas'];
$matakuliah = $_POST['matakuliah'];
$ruangkelas = $_POST['ruangkelas'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "UPDATE dosen SET 
        namadosen = '$namadosen',
        kelas = '$kelas',
        matakuliah = '$matakuliah',
        ruangkelas = '$ruangkelas',
        nohp = '$nohp',
        email = '$email'
        WHERE iddosen = '$iddosen'
        ";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil diupdate'); 
    window.location = 'formdosen.php';</script>";
}else{
    echo "<script>alert('Data gagal diupdate');</script>";
}
