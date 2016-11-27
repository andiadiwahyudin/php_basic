<!DOCTYPE html>
<html>
<head>
   <title>Informasi Mahasiswa</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="css/jquery.min.js"></script>
   <script src="css/bootstrap.min.js"></script>
</head>
<body>
<table class = "table table-bordered">
   <caption><h1>DATA MAHASISWA</h1></caption>
   
   <thead>
      <tr>
         <th>NIM</th>
         <th>NAMA</th>
         <th>JURUSAN</th>
         <th>JENIS KELAMIN</th>
         <th>ALAMAT</th>
      </tr>
   </thead>
  
  <?php
   include "proses/koneksi.php";
   $sql = "select * from mahasiswa order by nama asc";
   $hasil = mysqli_query($kon, $sql);
   if (!$hasil)
      die ("Gagal query..".mysqli_error($kon));
   ?>
   
   <tbody>
      <?php
      $no=0;
      while ($row = mysqli_fetch_assoc($hasil)){
         echo "<tr>";
         echo "<td>".$row['nim']."</td>";
         echo "<td>".$row['nama']."</td>";
         echo "<td>".$row['jurusan']."</td>";
         echo "<td>".$row['jk']."</td>";
         echo "<td>".$row['alamat']."</td>";
         echo "</tr>";
      }
      ?>
   </tbody>
</table>
<a class = "btn btn-primary" href = "tambah.php" role = "button">Tambah</a>
<a class = "btn btn-danger" href = "hapus.php" role = "button">Hapus</a>
</body>
</html>