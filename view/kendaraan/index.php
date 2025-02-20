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
          <a class="nav-link" aria-current="page" href="../parkir/index.php">Parkir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">Kendaraan</a>
                </li>
            </ul>
        </div>
     </div>
</nav>
     <div class="container">
        <h1>Data Kendaraan Silfana</h1>
        <table class="table table-succes table-warning">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">id_parkir</th>
                    <th scope="col">lokasi</th>
                    <th scope="col">harga</th>
                    <th scope="col">blok_parkir</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include '../../config/koneksi.php';
                    $query = mysqli_query($conn,"SELECT * FROM parkir");
                    if(mysqli_num_rows($query) > 0){
                        $no = 1;
                        while($result=mysqli_fetch_assoc($query)){
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $result['id_parkir'] ?></td>
                                <td><?php echo $result['lokasi'] ?></td>
                                <td><?php echo $result['harga'] ?></td>
                                <td><?php echo $result['blok_parkir'] ?></td>
                                <td>
                                    <a href="view_edit.php?id=<?php echo $result['id_parkir'];?>" class="btn btn-danger">Edit</a>
                                    <a href="proses_hapus.php?id=<?php echo $result['id_parkir'];?>"
                                    onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                    }else{
                        echo "belum ada data";
                    }
                    ?>
            </tbody>
                </table>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</body>
</html>