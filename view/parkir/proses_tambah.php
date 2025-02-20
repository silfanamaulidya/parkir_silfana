<?php
include '../../config/koneksi.php';

$id_parkir =$_POST['id_parkir'];
$lokasi =$_POST['lokasi'];
$harga =$_POST['harga'];
$blok_parkir =$_POST['blok_parkir'];

$sql = "INSERT INTO parkir (id_parkir,lokasi,harga,blok_parkir) VALUES ('$id_parkir','$lokasi','$harga','$blok_parkir')";

if(mysqli_query($conn, $sql)){
    echo "Data Berhasil Ditambahkan!";
    header("Location: index.php");
}else{
    echo "Eror: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>