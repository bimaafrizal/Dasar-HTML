<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>
    <h1>My first PHP page</h1>
    <!--Print Sederhana-->
    <?php
    echo "Hello World!<br>";
    ECHO "Hello World!";
    ?>
    
    <!--Membuat Variabel-->
    <!--Variabel Key Sensitif-->
    <?php
    $color = "red";
    $COLOR = "BLUE";
    $coLOR = "Yellow"; 
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";
    ?>

    <br>
    <!--Macam Operator dan Variabel-->
    <!--String-->
    <?php
    $x = "Hello world!";
    $y = 'Hello world!';
    echo $x;
    echo "<br>";
    echo $y;?>

    <br>    
    <!--Integer-->
    <!--Var dump digunakan untuk mengetahui jenis variabel-->
    <?php
    $x = 5985;
    var_dump($x);
    ?>

    <br>
    <!--float--> 
    <?php
    $x = 10.365;
    var_dump($x);
    ?>

    <br>
    <!--boolean-->
    <?php
    $x = true;
    $y = false;
    ?>

    <br>
    <!--Konstanta-->
    <?php
    define("PHI", 3.14);
    $jari_jari = 1000;
    $keliling = 2 * PHI * $jari_jari;
    $luas = PHI * $jari_jari * $jari_jari;
    printf("PHI = %s <br>\n", PHI);
    printf("Keliling = %s <br>\n", $keliling);
    printf("Luasnya adalah = %s <br>\n", $luas)
    ?>
    
    <!-- 
    %d untuk Integer, notasi desimal
    %b untuk Integer, notasi boolen
    %o untuk Integer, notasi oktal
    %x untuk Integer, notasi hexadesimal (dinyatakan dalam huruf kecil)
    %X untuk Integer,notasi desimal (dinyatakan dalam huruf kapital)
    %c Karakter yang nilai ASCII-nya dinyatakan dalam argumen
    %s untuk String
    %f untuk Double / Float (bilangan real)
    -->

    <br>
    <!--aritmatika-->
    <?php
    $penjumlahan = 2 + 4;$pengurangan = 6 -2;
    $perkalian = 5 * 3;
    $pembagian = 15 / 3;
    $modulus = 5 % 2;
    echo "Menampilkan penjumlahan: 2 + 4 = " . $penjumlahan . "<br>";
    echo "Menampilkan pengurangan: 6 -2 = " . $pengurangan . "<br>";
    echo "Menampilkan perkalian: 5 * 3 = " . $perkalian . "<br>";
    echo "Menampilkan pembagian: 15 / 3 = " . $pembagian . "<br>";
    echo "Menampilkan modulus: 5 % 2 = " . $modulus . "<br>";
    ?>

    <br>
    <!--Perbandingan-->
    <?php
    $x = 4;
    $y = 5;
    var_dump($x == $y)
    ?>

    <!-- Print digunakan satu statemnent echo untuk banyak--->

</body>

</html>