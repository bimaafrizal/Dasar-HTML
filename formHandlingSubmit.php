<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $jumlah = $_POST['jumlah'];
    $barangpesanan = $_POST['barangpesanan'];
    echo "Anda memesan " . $jumlah . " " . $barangpesanan .
        ".<br>";
    echo "Terima kasih atas kesediaan Anda memesan barang 
    dari kami!";
    ?>
</body>

</html>