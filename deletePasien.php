<?php 
include "config.php";

$namaPasien = $_GET["nama"];


$sql = "DELETE FROM `pasien` WHERE `nama_pasien`= '$namaPasien'";

if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $mysqli->error;
  }


?>