<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="kontener">
        <form action="login.php" class="form" method="GET">
            <label for="">Username</label>
            <input type="text" name="user"><br>
            <label for="">password</label>
            <input type="password" name="pass"><br><br>
            <input type="submit" name="submit" id="submit" value="Kirim">
        </form>
    </div>
</body>

</html>
<?php

include "config.php";

$dataDariUrlUser = $_GET["user"];
$dataDariUrlPass = $_GET["pass"];



$sql =  "SELECT * FROM user";
$q = $mysqli->query($sql);

while ($database = $q->fetch_array()) {

    $userNameDatabase = $database['namaUser'];
    $passwordDatabase = $database['password'];


    if ($userNameDatabase == $dataDariUrlUser && $passwordDatabase == $dataDariUrlPass) {
        header('location:div2.html');
        // echo "data sama dengan yang ada pada database untuk user $dataDariUrlUser";
    } else {
        // echo "User $dataDariUrlUser tidak terdaftar";
    }
}

?>