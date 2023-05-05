<?php

$iddosen = $_GET['iddosen'];
include "koneksi.php";
$qry = "SELECT * FROM dosen WHERE iddosen = '$iddosen'";
$exec = mysqli_query($con,$qry);
$data = mysqli_fetch_assoc($exec);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit dosen</title>
</head>
<body>
<form action="updatedosen.php" method="POST">
        <fieldset>
            <legend>Form Input Mengajar Mahasiswa</legend>
            <h2>Lengkapi Data Mengajar Hari Ini</h2>
            <table>
                <tr>
                    <td>ID Dosen</td>
                    <td>:</td>
                    <td><input type="number" name="iddosen" value="<?= $data['iddosen'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td>:</td>
                    <td><input type="text" name="namadosen" value="<?= $data['namadosen'] ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><select name="kelas">
                            <option value="001">BA214</option>
                            <option value="002">BB214</option>
                            <option value="003">BC214</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah</td>
                    <td>:</td>
                    <td><select name="matakuliah">
                            <option value="001">Backend</option>
                            <option value="002">Frontend</option>
                            <option value="003">Basis Data</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ruang Kelas</td>
                    <td>:</td>
                    <td><select name="ruangkelas">
                            <option value="001">Lab Database</option>
                            <option value="002">Lab Web Technology</option>
                            <option value="003">Basis Data</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp" value="<?= $data['nohp'] ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" value="<?= $data['email'] ?>"></td>
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