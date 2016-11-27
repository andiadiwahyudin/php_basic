<!DOCTYPE html>
<html>
<head>
   <title>Informasi Mahasiswa</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <script src="css/jquery.min.js"></script>
   <script src="css/bootstrap.min.js"></script>
</head>
<body>
<div class = "col-sm-6">
<h1> INPUT DATA MAHASISWA</h1>
   <form class = "form-horizontal" role = "form" action="proses/input.php" method="POST" enctype="multipart/form-data">
   
   <div class = "form-group">
      <label class = "col-sm-2 control-label">NIM</label>
      
      <div class = "col-sm-10">
         <input type = "text" class = "form-control" name = "nim" placeholder = "Nomor Mahasiswa">
      </div>
   </div>
   
   <div class = "form-group">
      <label class = "col-sm-2 control-label">NAMA</label>
      
      <div class = "col-sm-10">
         <input type = "text" class = "form-control" name = "nama" placeholder = "Nama Mahasiswa">
      </div>
   </div>
   <div class = "form-group">
      <label class = "col-sm-2 control-label">JURUSAN</label>
      <div class = "col-sm-10">
      <select class = "form-control" name="jurusan">
         <option value="S1-Teknik Informatika">S1-Teknik Informatika</option>
         <option value="S1-Sistem Informasi">S1-Sistem Informasi</option>
         <option value="D3-Teknik Komputer">D3-Teknik Komputer</option>
         <option value="D3-Managemen Informasi">D3-Managemen Informasi</option>
         <option value="D3-Komputerisasi Akuntansi">D3-Komputerisasi Akuntansi</option>
      </select>
      </div>
   </div>
   
   <div class = "form-group">
   <label for = "lastname" class = "col-sm-2 control-label">JENIS KELAMIN</label>
      <div class = "col-sm-10">
        <label class = "checkbox-inline">
            <input type = "radio" name ="jk" value = "L" checked> Laki - Laki
        </label>
   
        <label class = "checkbox-inline">
            <input type = "radio" name ="jk" value = "P"> Perempuan
        </label>
      </div>
   </div>

   <div class = "form-group">
   <label class = "col-sm-2 control-label">ALAMAT</label>
      <div class = "col-sm-10">
       <textarea name="alamat" class = "form-control" rows = "3"></textarea>
      </div>
   </div>
   
   <div class = "form-group">
      <div class = "col-sm-offset-2 col-sm-10">
         <button type = "submit" class = "btn btn-default">Tambah</button>
      </div>
   </div>
   </form>
</div>
</body>
</html>