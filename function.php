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
    //fungsi dasar
    function ucapan()
    {
        echo "Selamat datang di Indonesia";
    }
    //memanggil function ucapan:
    ucapan();
    ?>

<br><br>

<?php
function favorit($masakan)
{
    echo "Saya suka makan " . $masakan . " <br><br>";
}
favorit("soto");
favorit("sate");
favorit("nasi kebuli");
?>

<br><br>
<?php
function suka($buah, $sayur)
{
    echo "Saya suka buah " . $buah . " dan sayur " . $sayur .
    " <br><br>";
}
suka("mangga", "wortel");
suka("apel", "brokoli");
suka("jeruk", "buncis");
?>
</body>

</html>