<html>
<head>
    <title>Data Gambar</title>
</head>
<body>

<!-- Membuat form upload dengan action upload.php -->
<center>
<h1>Form Upload Gambar</h1>
<form method="post" enctype="multipart/form-data" action="membuatupload.php">
    <input type="file" name="gambar">
    <input type="submit" value="Upload">
</form>
</center>
<!-- Form menampilkan data gambar ke dalam tabel -->
<h2>Data Gambar</h2><hr>
<table border="1" cellpadding="8">
<tr>
  <th>Gambar</th>
  <th>Nama File</th>
  <th>Ukuran File</th>
  <th>Tipe File</th>
    <th>Action</th>
</tr>

    <!-- Membuat proses tampil data -->
<?php
// Mengambil action dari file koneksi.php
include "membuatkoneksi.php";
// Memanggil semua data dalam tabel gambar
$query = "SELECT * FROM gambar";
// Eksekusi/Jalankan query dari variabel $query
$sql = mysqli_query($connect, $query);
// Ambil jumlah data dari hasil eksekusi $sql
$row = mysqli_num_rows($sql);
// Kondisi perulangan Jika jumlah data lebih dari 0 (Berarti jika data ada)
if($row > 0){
    // Mengambil semua data dari hasil eksekusi $sql
  while($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td><img src='images/".$data['nama']."' width='100' height='100'></td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['ukuran']."</td>";
    echo "<td>".$data['tipe']."</td>";
    echo "<td><a href='membuathapus.php?id=$data[id]'>Hapus</a></td></tr>";
  }
    // Jika data tidak ada
}else{
  echo "<tr><td colspan='5'>Belum ada data gambar</td></tr>";
}
?>
</table>
</body>
</html>