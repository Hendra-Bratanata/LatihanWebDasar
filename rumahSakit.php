<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="cardView.css">
    
    <title>Latihan</title>
</head>
<body>
    <div class="contener">
       
       <?php 
       $data2 =  mysqli_query($mysqli,"SELECT * FROM `Pasien`");
        while($dataindex=mysqli_fetch_array($data2)){
        //   var_dump($dataindex);
          $namaPasien = $dataindex["nama_pasien"];
          $tanggalKeluar = $dataindex["tanggal_keluar"];
          $tanggalMasuk = $dataindex["tanggal_masuk"];
        //   echo $namaPasien;
          echo "<div class='card'>
              <a href='http://localhost/latihanWebDasar/detailPasien.php?nama=$namaPasien&tanggalKelar=$tanggalKeluar&tanggalMasuk=$tanggalMasuk'>
              <img src='building.jpg' alt='' style='width: 130px; height: 130px;'>
              <h3> $namaPasien</h3>
             <h4> $tanggalMasuk</h4>
             <h4> $tanggalKeluar</h4>
             </a>
             <button><a href='#'>Delete</a></button>
           </div>";
        }
        
        ?>
        

    </div>
    
</body>
</html>