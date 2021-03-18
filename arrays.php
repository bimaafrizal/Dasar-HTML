<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Dasar Arrays</h1>
    <?php
    $no_index[1] = 100;
    $str_index["str"] = 250;
    echo "Isi dari array index 1 adalah " . $no_index[1];
    echo "<br><br>";
    echo "Isi dari array index 'str' adalah " . $str_index["str"];
    ?>

    <br><br>
    <!--Melihat index dan isi array-->

    <?php
    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";
    print_r($paper);
    ?>

    <br><br>

    <?php
    // tanpa menggunakan indeks
    $arrayA = array(1, 2, 3, 4, 5, 6);
    foreach ($arrayA as $indeks => $nilai) {
        echo "\$arrayA[$indeks] => $nilai";
        echo "<br />";
    }
    echo "<br /> <br />";

    // menggunakan indeks tapi tidak urut
    $arrayB = array(1 => 1, 3 => 2, 5 => 3, 4 => 4, 0 => 5, 2 => 6);
    foreach ($arrayB as $indeks => $nilai) {
        echo "\$arrayB[$indeks] => $nilai";
        echo "<br />";
    }
    echo "<br /> <br />";

    // tidak semua menggunakan indeks,
    // php akan otomatis memberikan indeks
    $arrayC = array(1 => 1, 2, 3, 4, 0 => 5, 6);
    foreach ($arrayC as $indeks => $nilai) {
        echo "\$arrayC[$indeks] => $nilai";
        echo "<br />";
    }
    echo "<br /> <br />";

    // array dua dimensi
    // dimensi pertama associative
    // dimensi kedua vector
    $duadim = array(
        "prog" => array(1 => "HTML", "PHP", "JavaScript"),
        "nomor" => array(1 => 1, 2, 3),
        "experience" =>
        array(1 => "Beginer", "Middle", "Advance"));
    foreach ($duadim as $k => $v) {
        $x = 1;
        foreach ($v as $x => $y) {
            echo "\$duadim[$k] => \$v[$x] => $y <br />";
            $x++;
        }
    }
    ?>

</body>

</html>