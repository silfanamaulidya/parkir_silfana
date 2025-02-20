<?php
$id=$_GET['id'];

$lokasi=$_POST['lokasi'];
$harga=$_POST['harga'];
$blok_parkir=$_POST['blok_parkir'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"UPDATE parkir SET
lokasi='$lokasi',
harga='$harga',
blok_parkir='$blok_parkir'
WHERE id_parkir='$id'");

if($query){
    echo "<script>alert('Data berhasil diedit')</script>";
    echo "<script>window.location.href='index.php'</script>";

}else{
    echo "<script>alert('Data gagal diedit')</script>";
    echo "<script>window.location.href='view_tambah.php'</script>";

}

