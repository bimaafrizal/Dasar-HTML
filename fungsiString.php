<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>STRPROS</h2>
    <?php
    //mengunakan =
    $stringku = "ABCDEFGHIJ";
    $posisi = strpos($stringku, "F");
    echo $stringku . "<br>";
    echo "Posisi karakter F dalam string adalah indeks ke-$posisi";
    ?>

    <br> <br>

    <?php
    $mystring = 'abc';
    $findme = 'a';
    $pos = strpos($mystring, $findme);
    if ($pos === false) {
        echo "The string ' $findme ' was not found in the string '
    $mystring '";
    } else {
        echo "The string ' $findme ' was found in the string ' 
    $mystring'";
        echo " and exists at position $pos ";
    }
    ?>>
    <br> <br>

    <?php
    $mystring = 'abc';$findme = 'a';
    $pos = strpos($mystring, $findme);
    if ($pos !== false) {
        echo "The string ' $findme ' was found in the string ' 
        $mystring'";
        echo " and exists at position $pos ";} 
    else {echo "The string ' $findme ' was not found in the string '
    $mystring '";}
    ?>

    <br><br>
    <h2>STR Replace</h2>
    <?php
    $stringawal = "selamat datang di halaman web ini";
    $ubahstring = str_replace("web", "website", $stringawal);
    echo "$ubahstring";
    ?>
    <br><br>
    
    <?php
    $stringawal = "selamat datang di modul web ini";
    $ubahstring = str_replace("website", "web", $stringawal);
    echo "$ubahstring";
    ?>

    <br><br>
    <?php
    $katalama = "Saat senja itu bukan apa-apa bagiku <br>
    Apa yang kamu inginkan di dunia ini? <br>
    Emaskah ? <br>
    Atau kedamaian ?<br>
    Bunda pernah berpesan <br>
    Tak ada apa-apa yang berharga didunia ini nak <br>,
    kecuali ketuguhanmu akan agamamu <br>";
    $diubah = array('senja', 'kamu', 'emaskah', 'kedamaian');
    $pengubah = array('malam', 'aku', 'uangkah', 'kemakmuran');
    $katabaru = str_replace($diubah, $pengubah, $katalama);
    echo "kata lama <br>";
    echo "<hr>";
    echo $katalama . "<br><br>";
    echo "setelah diubah <br>";
    echo "<hr>";
    echo $katabaru . "<br>";
    ?>

    <br><br>
    <h2>STR TOUPPER</h2>
    <?php
    $katalama = "Indonesia merdeka pada tanggal 17 agustus 1945";
    $katabaru = strtoupper($katalama);
    echo "kata lama -$katalama <br><br>";
    echo "kata baru -$katabaru";
    ?>

    <br><br>
    <h2>STR Lower</h2>
    <?php
    $katalama = "Indonesia merdeka pada tanggal 17 agustus 1945";
    $katabaru = strtolower($katalama);
    echo "kata lama -$katalama <br><br>";
    echo "kata baru -$katabaru";
    ?>

    <br><br>
    <h2>UCWORDS</h2>
    <?php
    $title= "selamat pagi dunia";
    $ucTitle = ucwords($title);
    echo "Old title -$title <br>";
    echo "New title -$ucTitle";
    ?>

    <br><br>
    <?php
    $titleString = "a title that could use some hELP";
    $lowercaseTitle = strtolower($titleString);
    $ucTitleString = ucwords($lowercaseTitle);
    echo "Old title -$titleString <br />";
    echo "New title -$ucTitleString";
    ?>

    <h2>Explode</h2>
    <?php
    $PhoneNumber = "800-555-5555";
    $hasil = explode("-", $PhoneNumber);
    echo " Phone Number = $PhoneNumber <br>";
    echo "Pecahan 1 = $hasil[0]<br>";
    echo "Pecahan 2 = $hasil[1]<br>";
    echo "Pecahan 3 = $hasil[2]";
    ?>

    <br><br>
    <h2>Implode</h2>
    <?php
    $pecahan = array("Hello", "World,", "I", "am", "Here!");
    $disatukandenganspasi = implode(" ", $pecahan);
    $disatukandengandash = implode("-", $pecahan);
    echo "$disatukandenganspasi <br>";
    echo "$disatukandengandash ";
    ?>
</body>

</html>