<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="tambahData.css">
    </link>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Product</title>

</head>

<body>
    <div class="kontener">
        <div class="form">
            <form action="tambahData.php" method="post">
                <label for="nmBarang">Nama Barang</label><br>
                <input type="text" id="barang" name="barang"><br>
                <label for="harga">Harga</label><br>
                <input type="number" id="harga" name="harga"><br>
                <input type="radio" checked="checked" id="pompa" name="jenis" value="Satelite">
                <label for="male">Satelite</label><br>
                <input type="radio" id="pompa" name="jenis" value="Pompa">
                <label for="female">Pompa</label><br>
                <input type="radio" id="pompa" name="jenis" value="spare part">
                <label for="other">Spare part</label><br>
                <input type="Submit" id="submit" name="submit" value="KIRIM">

            </form>
        </div>

    </div>
</body>

</html>