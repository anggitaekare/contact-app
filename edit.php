<?php session_start();
   require 'config.php';
   if (isset($_GET['id'])) {
      $contact = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);
   }
   if(isset($_POST['submit'])){
      $collection->updateOne(
          ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],
          ['$set' => ['NIM' => $_POST['NIM'], 'Nama' => $_POST['Nama'], 'IPK' => $_POST['IPK'],]]
      );
      $_SESSION['success'] = "Data Contact berhasil diubah";
      header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <title>APLIKASI CONTACT</title>
      <link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
         <br>
         <CENTER><h1>Edit Data Contact</h1></CENTER>
         <a href="index.php" class="btn btn-primary">Kembali</a>
         <form method="POST">
            <div class="form-group">
               <strong>Nama:</strong>
               <input type="text" class="form-control" name="Nama" placeholder="Nama Lengkap">
               <strong>NoHp:</strong>
               <input type="text" value="<?php echo "$contact->NoHp"; ?>" class="form-control" name="NoHp" required="" placeholder="xxxxxxxxxxxx">
               <strong>IPK:</strong>
               <input type="text" class="form-control" name="Alamat" placeholder="Alamat">
               <br>
               <button type="submit" name="submit" class="btn btn-success">Simpan</button>
            </div>
         </form>
      </div>
   </body>
</html>