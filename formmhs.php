<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
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
  <li><a class="active" href="formmhs.php">Mahasiswa</a></li>
  <li><a href="formdosen.php">Dosen</a></li>
  <li><a href="formkrs.php">KRS</a></li>
  <li><a href="formbyr.php">Pembayaran</a></li>
</ul> 
<br>
    <form action="prosesmhs.php" method="POST">
        <fieldset>
            <legend>Form Input Data Mahasiswa</legend>
            <h2>Lengkapi Biodata dengan Benar</h2>
            <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
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
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" value="1"> Laki-laki
                        <input type="radio" name="gender" value="2"> Perempuan
                        <input type="radio" name="gender" value="3"> Others
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <!--<td><input type="text" name="alamat"></td>-->
                    <td><textarea name="alamat" rows="4" cols="50" ></textarea></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
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
                <th>Gender</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Act</th>
            </tr>
            <?php
                include "koneksi.php";
                $qry = "SELECT * FROM mahasiswa";
                $exec = mysqli_query($con, $qry);
                while($data = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['nama_mhs'] ?></td>
                <td><?= $data['kode_jurusan'] ?></td>
                <td><?= $data['gender'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['no_hp'] ?></td>
                <td><?= $data['email'] ?></td>
                <td>
                    <a href="editmhs.php?nim=<?= $data['nim'] ?>">
                        <button>Edit</button>
                    </a>
                    <a href="deletemhs.php?nim=<?= $data['nim'] ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>