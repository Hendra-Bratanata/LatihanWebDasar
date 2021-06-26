
<?php 
$namaPasien = $_GET["nama"];
$tanggalKelar = $_GET["tanggalKelar"];
$tanggalMasuk = $_GET["tanggalMasuk"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div class="contener" >
<div class='card'>
              <a href='http://localhost/latihanWebDasar/detailPasien.php?nama=$namaPasien&tanggalKelar=$tanggalKeluar&tanggalMasuk=$tanggalMasuk'>
              <img src='building.jpg' alt='' style='width: 130px; height: 130px;'>
              <h3> <?php echo $namaPasien ?></h3>   
             <h4><?php echo $tanggalMasuk?> </h4>    
             <h4> <?php echo $tanggalKelar ?> </h4>
             </a>
             <button type="submit"><a href="http://localhost/latihanWebDasar/deletePasien.php?nama=<?php echo $namaPasien?>">Delete</a></button>
           </div>
</div>
</div>

    
</body>
</html>