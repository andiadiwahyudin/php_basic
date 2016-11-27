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
<h1> HAPUS DATA MAHASISWA</h1>
   <form class = "form-horizontal" role = "form" action="proses/delete.php" method="POST" enctype="multipart/form-data">
   
   <div class = "form-group">
      <label class = "col-sm-2 control-label">NIM</label>
      
      <div class = "col-sm-10">
         <input type = "text" class = "form-control" name = "nim" placeholder = "Nomor Mahasiswa">
      </div>
   </div>
   <div class = "form-group">
      <div class = "col-sm-offset-2 col-sm-10">
         <button type = "submit" class = "btn btn-default">Hapus</button>
      </div>
   </div>
   </form>
</div>
</body>
</html>