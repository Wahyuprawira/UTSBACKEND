<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
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
  <li><a class="active" href="formdosen.php">Dosen</a></li>
  <li><a href="formkrs.php">KRS</a></li>
  <li><a href="formbyr.php">Pembayaran</a></li>
</ul> 
<br>
    <form action="prosesdosen.php" method="POST">
        <fieldset>
            <legend>Form Input Mengajar Dosen</legend>
            <h2>Lengkapi Data Mengajar Hari Ini</h2>
            <table>
                <tr>
                    <td>ID Dosen</td>
                    <td>:</td>
                    <td><input type="number" name="iddosen"></td>
                </tr>
                <tr>
                    <td>Nama Dosen</td>
                    <td>:</td>
                    <td><input type="text" name="namadosen"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><select name="kelas">
                            <option value="BA">BA214</option>
                            <option value="BB">BB214</option>
                            <option value="BC">BC214</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Matakuliah</td>
                    <td>:</td>
                    <td><select name="matakuliah">
                            <option value="BE">Backend</option>
                            <option value="FE">Frontend</option>
                            <option value="MP">Mobile Programing</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Ruang Kelas</td>
                    <td>:</td>
                    <td><select name="ruangkelas">
                            <option value="LD">Lab Database</option>
                            <option value="LWT">Lab Web Technology</option>
                            <option value="LMT">Lab Mobile Technology</option>
                        </select>
                    </td>
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
                <th>ID Dosen</th>
                <th>Nama Dosen</th>
                <th>Kelas</th>
                <th>Matakuliah</th>
                <th>Ruang Kelas</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Act</th>
            </tr>
            <?php
                include "koneksi.php";
                $qry = "SELECT * FROM dosen";
                $exec = mysqli_query($con, $qry);
                while($data = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
                <td><?= $data['iddosen'] ?></td>
                <td><?= $data['namadosen'] ?></td>
                <td><?= $data['kelas'] ?></td>
                <td><?= $data['matakuliah'] ?></td>
                <td><?= $data['ruangkelas'] ?></td>
                <td><?= $data['nohp'] ?></td>
                <td><?= $data['email'] ?></td>
                <td>
                    <a href="editdosen.php?iddosen=<?= $data['iddosen'] ?>">
                        <button>Edit</button>
                    </a>
                    <a href="deletedosen.php?iddosen=<?= $data['iddosen'] ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>