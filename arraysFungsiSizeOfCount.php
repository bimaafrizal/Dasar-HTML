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
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$jumlah = count($a);
//variabel $jumlah akan bernilai 3
echo "jumlah element array a adalah " . $jumlah . "<br><br>";

$b["buah"] = "semangka";
$b["sayur"] = "wortel";
$b["daging"] = "ayam";
$b["utama"] = "nasi";
$jumlah = sizeof($b);
//variabel $jumlah akan bernilai 4
echo "jumlah element array b adalah " . $jumlah;
?>
</body>

</html>
