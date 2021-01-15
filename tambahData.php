<?php
include "config.php";

$namaProduct = $_POST['barang'];
$harga = $_POST['harga'];
$jenis = $_POST['jenis'];




$query = "INSERT INTO `product`( `nama_product`, `harga`, `jenis`)
 VALUES ('$namaProduct',$harga,'$jenis') ";

if ($mysqli->query($query) === TRUE) {
    echo "Data Berhasil ditambahkan";
    // header("location:TambahProduct.php");
} else {
    echo "Error: " . $query . "<br>" . $mysqli->error;
}
