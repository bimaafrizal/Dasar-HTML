<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Looping Sederhana</title>
</head>
<body>
    <h1>Looping</h1>

    <h2>While</h2>
    <?php
    $i = 1;
    while ($i <= 5) {
        echo "Nomor : " . $i . "<br />";
        $i++;} 
    ?>

    <br><br>

    <h2>For</h2>
    <!--Contoh satu-->
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i."<br>";}
    ?>

    <br><br>

    <!--Contoh dua-->
    <?php
    $harga_sikat = 1500;
    echo "<table border=\"1\" align=\"center\">";
    echo "<tr><td><b>Jumlah Sikat</b></td>";
    echo "<td><b>Harga</b></td></tr>";
    
    for ($jumlah_sikat = 10;$jumlah_sikat <= 100;$jumlah_sikat += 10) {
        echo "<tr><td>";
        echo $jumlah_sikat;
        echo "</td><td>";
        echo "Rp. " . $harga_sikat * $jumlah_sikat;
        echo "</td></tr>";}
        echo "</table>";
    ?>

    <br><br>

    <h2>For Each</h2>
    <?php
    $fruits = array('apple', 'banana', 'orange');
    foreach ($fruits as $fruit){
        echo $fruit;echo "<br/>";}
    ?>

</body>
</html>