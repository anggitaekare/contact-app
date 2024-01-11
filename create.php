<?php session_start();
   if(isset($_POST['submit'])){
      require 'config.php';
      $insertOneResult = $collection->insertOne([
          'Nama' => $_POST['Nama'],
          'NoHp' => $_POST['NoHp'],
          'Alamat' => $_POST['Alamat'],
      ]);
      $_SESSION['success'] = "Data Contact Berhasil di tambahkan";
      header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html>
   <head>
      <title>APLIKASI INTERAKTIF</title>
      <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <br>
         <CENTER><h1>Tambah Data Mahasiswa</h1></CENTER>
         <a href="index.php" class="btn btn-primary">Kembali</a>
         <form method="POST">
            <div class="form-group">
               <strong>Nama:</strong>
               <input type="text" class="form-control" name="Nama" placeholder="Nama Lengkap">
               <strong>NoHp:</strong>
               <input type="text" class="form-control" name="NoHp" Placeholder="xxxxxxxxxxxx">
               <strong>Alamat:</strong>
               <input type="text" class="form-control" name="Alamat" placeholder="Alamat">
               <br>
               <button type="submit" name="submit" class="btn btn-success">Tambah</button>
            </div>
         </form>
      </div>
   </body>
</html>