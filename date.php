<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Operasi Date</h1>

    <h2>Dasar</h2>
    <?php
    echo date("m/d/y");
    ?>
    <br><br>

    <h2>date - sparator</h2>
    <?php
    //date - sparator
    Echo date("m-d-y");
    ?>

    <br><br>

    <h2>timestamp</h2>
    <?php
    //timestamp 
    $today = date("F j, Y, g:i a");
    echo "$today <br><br>";
    $today = date("m.d.y");
    echo "$today <br><br>";
    $today = date("j, n, Y");
    echo "$today <br><br>";
    $today = date("Ymd");
    echo "$today <br><br>";
    $today = date("H:i:s");
    echo "$today <br><br>";?>

    <br><br>

    <h2>Mengetahui Tahun</h2>
    <?php
    $tahun = date ("Y");
    echo $tahun."<br>";
    ?>

    <br><br>
    <h2>Menampilkan Bulan</h2>
    <?php
    $bulan = date("F");
    echo $bulan . "<br>";
    ?>

    <br><br>
    <h2>Menampilkan Hari</h2>
    <?php
    $hari = date("l");
    echo $hari."<br>";
    ?>

    <br><br>
    <h2>Menampilkan hari selanjutnya</h2>
    <?php
    $lusa = mktime(0, 0, 0, date("d") + 2, date("y"));
    echo "lusa adalah tanggal " . date("d/m/y", $lusa);
    ?>

    <br><br>
    <h2>Contoh Lain</h2>
    <?php
    $besok = mktime(0, 0, 0, date("m"), date("d") + 1, date("Y"));
    $bulankemarin = mktime(
        0,
        0,
        0,
        date("m") -1,
        date("d"),
        date("Y")
    );
    $tahundepan = mktime(
        0,
        0,
        0,
        date("m"),
        date("d"),
        date("Y") + 1
    );
    echo "Besok adalah tanggal " . date("d/m/y", $besok) . 
    "<br><br>";
    echo "Bulan Kemarin adalah tanggal " . date(
        "d/m/y",
        $bulankemarin) . "<br><br>";
    echo "Tahun depan adalah tanggal " . date("d/m/y", $tahundepan) .
    "<br><br>";
    ?>
</body>

</html>