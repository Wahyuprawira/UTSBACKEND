<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
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
  <li><a href="formkrs.php">KRS</a></li>
  <li><a class="active" href="formbyr.php">Pembayaran</a></li>
</ul> 
<br>
    <form action="prosesbyr.php" method="POST">
        <fieldset>
            <legend>Formulir Pembayaran</legend>
            <h2>Lengkapi data di bawah</h2>
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
                    <td><label for="bukti">Bukti Pembayaran</label><br></td>
                    <td>:</td>
                    <td>
                        <form method="post" enctype="multipart/form-data" action="uploadbyr.php">
                        <input type="file" name="gambar">
                    </td>  
                </form>
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
                <th>Metode Pembayaran</th>
                <th>Bukti Pembayaran</th>
                <th>Act</th>
            </tr>
            <?php
                include "koneksi.php";
                $qry = "SELECT * FROM pembayaran";
                $exec = mysqli_query($con, $qry);
                while($data = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['nama'] ?></td>
                <td><?= $data['jurusan'] ?></td>
                <td><?= $data['mp'] ?></td>
                <td><?= $data['bukti'] ?> <img src="bukti"></td>
                <td>
                    <a href="editbyr.php?nim=<?= $data['nim'] ?>">
                        <button>Edit</button>
                    </a>
                    <a href="deletebyr.php?nim=<?= $data['nim'] ?>">
                        <button>Delete</button>
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>