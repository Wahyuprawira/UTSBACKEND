<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRS</title>
    <style>
        .tabel table {
            margin-top : 20px;
            width : 100%;
            border : 1px solid black;
            border-collapse: collapse;
            padding : 5px;
        }

        .tabel th {
            background-color: grey;
        }

        .tabel th, .tabel td, .tabel tr  {
            border : 1px solid black;
            padding : 5px;
        }
     
    </style>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<ul>
  <li><a href="home.php">Home</a></li>
  <li><a href="formmhs.php">Mahasiswa</a></li>
  <li><a href="formdosen.php">Dosen</a></li>
  <li><a class="active" href="formkrs.php">KRS</a></li>
  <li><a href="formbyr.php">Pembayaran</a></li>
</ul> 
<br>
    <form action="proseskrs.php" method="POST">
        <fieldset>
            <legend>Form KRS Mahasiswa</legend>
            <h2>Lengkapi Jadwal Matakuliah</h2>
            <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option value="SK">Sistem Komputer</option>
                            <option value="SI">Sistem Informasi</option>
                            <option value="TI">Teknologi Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah 1</td>
                    <td>:</td>
                    <td><select name="mk1">
                            <option value="PP">Pendidikan Pancasila</option>
                            <option value="PK">Pendidikan Kewarganegaraan</option>
                            <option value="BI">Bahasa Indonesia</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah 2</td>
                    <td>:</td>
                    <td><select name="mk2">
                            <option value="MD">Matematika Diskrit</option>
                            <option value="UX">User Experience</option>
                            <option value="KB">Kecerdasan Buatan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah 3</td>
                    <td>:</td>
                    <td><select name="mk3">
                            <option value="SO">Sistem Operasi</option>
                            <option value="FE">Front End</option>
                            <option value="BE">Back End</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <div class="tabel">
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Matakuliah 1</th>
                <th>Matakuliah 2</th>
                <th>Matakuliah 3</th>
                <th>Act</th>
            </tr>
            <?php
                include "koneksi.php";
                $qry = "SELECT * FROM krs";
                $exec = mysqli_query($con, $qry);
                while($data = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jurusan'] ?></td>
                <td><?= $data['mk1'] ?></td>
                <td><?= $data['mk2'] ?></td>
                <td><?= $data['mk3'] ?></td>
                <td>
                    <a href="editkrs.php?nim=<?= $data['nim'] ?>">
                        <button>Edit</button>
                    </a>
                    <a href="deletekrs.php?nim=<?= $data['nim'] ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>