 <?php
 include "koneksi.php";
 $nim = $_POST['nim'];         
    $sql = "DELETE FROM mahasiswa WHERE nim = $nim" ;
    $retval = mysqli_query($kon, $sql );
           
    if(! $retval ) {
        die('gagal meghapus data: ' . mysql_error());
    }else{
   		header("Location: ../index.php");
    }
?>