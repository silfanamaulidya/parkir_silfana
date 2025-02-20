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
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="../parkir/index.php">Parkir</a>
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
        <br><br>
    <a href="view_tambah.php" class="btn btn-primary">Tambah Data Kendaraan Baru</a>
        <br></br>
        <form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ID PARKIR</label>
        <input type="text" class="form-control" name="id_parkir" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Lokasi</label>
        <input type="text" class="form-control" name="lokasi" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Harga</label>
        <input type="number" class="form-control" name="harga" id="exampleInputPassword1">
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Blok Parkir</label>
        <input type="text" class="form-control" name="blok_parkir" id="exampleInputPassword1">
    </div>
    </div>
    <button type="submit" class="btn btn-secondary">Submit</button>
    </form>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</body>
</html>