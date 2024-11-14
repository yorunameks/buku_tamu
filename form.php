<?php
    require_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/css/boostrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Form</title>
</head>
<body>
 <div class="container">
   <div class="row">
     
        <form method="POST">
        <div class="mb-3">
            <label class="form-label">Nama Tamu</label>
            <input type="text" class="form-control" name="nama" id="exampleInputEmail1" aria-describedby="emailHelp" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" name="jk" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" name="notelepon"id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Keperluan Dan Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="exampleInputPassword1" required>
        </div>
        <button type="submit" class="btn btn-primary" name="kirim">kirim</button>
        </form>
    
    </div>
 </div>
        </body>
</html>