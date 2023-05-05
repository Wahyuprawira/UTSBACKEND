<?php

$nim = $_GET['nim'];
include "koneksi.php";
$qry = "SELECT * FROM krs WHERE nim = '$nim'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit KRS</title>
</head>
<body>
<form action="updatekrs.php" method="POST">
        <fieldset>
            <legend>Form krs Mahasiswa</legend>
            <h2>Lengkapi Jadwal Matakuliah</h2>
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
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option value="001">Sistem Komputer</option>
                            <option value="002">Sistem Informasi</option>
                            <option value="003">Teknologi Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah 1</td>
                    <td>:</td>
                    <td><select name="mk1">
                            <option value="pp">Pendidikan Pancasila</option>
                            <option value="pk">Pendidikan Kewarganegaraan</option>
                            <option value="bi">Bahasa Indonesia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah 2</td>
                    <td>:</td>
                    <td><select name="mk2">
                            <option value="md">Matematika Diskrit</option>
                            <option value="ux">User Experience</option>
                            <option value="kb">Kecerdasan Buatan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah 3</td>
                    <td>:</td>
                    <td><select name="mk3">
                            <option value="so">Sistem Operasi</option>
                            <option value="fe">Front End</option>
                            <option value="be">Back End</option>
                        </select>
                    </td>
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