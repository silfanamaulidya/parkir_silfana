<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-three="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
     aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Parkir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../kendaraan/index.php">Kendaraan</a>
                </li>
            </ul>
        </div>
     </div>
     </nav>
     <div class="container">
        <h1>Tambah Data Parkir Silfana</h1>
        <?php
        include '../../config/koneksi.php';
        $id_parkir=$_GET['id'];
        $query=mysqli_query($conn, "SELECT * FROM parkir WHERE id_parkir ='$id_parkir'");
        $result=mysqli_fetch_array($query);
    ?>
        <br></br>
        <form action="proses_edit.php?id=<?php echo $result['id_parkir']?>" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID PARKIR</label>
        <input type="text" class="form-control" name="id_parkir" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Lokasi</label>
        <input type="text" class="form-control" name="lokasi" value ="<?php echo $result['lokasi']?>" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga</label>
        <input type="number" class="form-control" name="harga" value ="<?php echo $result['harga']?>" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Blok Parkir</label>
        <input type="text" class="form-control" name="blok_parkir" value ="<?php echo $result['blok_parkir']?>" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>