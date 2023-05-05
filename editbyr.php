<?php

$nim = $_GET['nim'];
include "koneksi.php";
$qry = "SELECT * FROM bayar WHERE nim = '$nim'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
</head>
<body>
<form action="updatebyr.php" method="POST">
        <fieldset>
            <legend>Formulir Pembayaran</legend>
            <h2>Lengkapi data di bawah</h2>
            <table>
                <tr>
                    <td>NIM (Nomor Induk Mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim" value="<?= $data['nim'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?= $data['nama'] ?>"></td>
                </tr>
                <tr><td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option value="001">Sistem Komputer</option>
                            <option value="002">Sistem Informasi</option>
                            <option value="003">Teknologi Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Metode Pembayaran</td>
                    <td>:</td>
                    <td><select name="mp">
                            <option value="ch">Tunai</option>
                            <option value="tf">Transfer Bank</option>
                            <option value="va">Virtual Account</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pembayaran</td>
                    <td>:</td>
                    <td><input type="number" name="jp" value="<?= $data['jp'] ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>