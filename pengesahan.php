<?php
$harga = 2500;

$nama = $_POST['nama'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$kategori = $_POST['kategori'];
$slot = $_POST['slot'];

$jumlah = $harga * $slot;
?>

<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pengesahan Pendaftaran</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f8;
}
.container {
    max-width: 700px;
    margin: auto;
    background: white;
    padding: 30px;
    margin-top: 50px;
    border-radius: 8px;
}
h2 { color: #0d6efd; }
.success {
    color: green;
    font-weight: bold;
}
</style>
</head>

<body>

<div class="container">
    <h2>Pengesahan Pendaftaran</h2>
    <p><strong>Nama:</strong> <?= $nama ?></p>
    <p><strong>E-mel:</strong> <?= $email ?></p>
    <p><strong>No Telefon:</strong> <?= $telefon ?></p>
    <p><strong>Kategori:</strong> <?= $kategori ?></p>
    <p><strong>Bilangan Slot:</strong> <?= $slot ?></p>
    <p><strong>Jumlah Yuran:</strong> RM <?= number_format($jumlah, 2) ?></p>

    <p class="success">Pendaftaran berjaya direkodkan.</p>
</div>

</body>
</html>
