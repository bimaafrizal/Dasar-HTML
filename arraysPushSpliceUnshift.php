<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Fungsi Push</h1>
    <!--Digunakan untuk menambahkan array yang sudah ada-->
    <?php
    $program = array("HTML", "PHP");
    array_push($program, "CSS", "JavaScript");
    foreach ($program as $prg) {
        echo $prg . "<br><br>";
    }
    ?>

    <br><br>
    <h2>Fungsi Splice</h2>
    <?php
    echo "Anggota array awal adalah: <br />";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    print_r($input);
    echo "<br /><br />";
    echo "array_splice(\$input,2)";
    echo "<br />";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    array_splice($input, 2);
    print_r($input);
    echo "<br /><br />";
    echo "array_splice(\$input,1,-1)";
    echo "<br />";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    array_splice($input, 1, -1);
    print_r($input);
    echo "<br /><br />";
    echo "array_splice(\$input,1, count(\$input),\"AJAX\")";
    echo "<br />";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    array_splice($input, 1, count($input), "AJAX");
    print_r($input);
    echo "<br /><br />";
    echo "array_splice(\$input,-1,1,array(\"JQuery\",\"Framework\"))";
    echo "<BR>";
    $input = array("HTML", "PHP", "CSS", "JavaScript");
    array_splice($input, -1, 1, array("JQuery", "Framework"));
    print_r($input); 
    ?>

    <h2>Fungsi Unshift</h2>
    <?php
    $arrayBuah = array("Jeruk", "Apel");// array mula-mula
    echo $arrayBuah[0] . "<br>";// menghasilkan 'Jeruk'
    echo $arrayBuah[1] . "<br>"; // menghasilkan 'Apel'
    // elemen array menjadi 'Pisang, Jeruk, Apel'
    array_unshift($arrayBuah, "Pisang");
    echo $arrayBuah[0] . "<br>"; // menghasilkan 'Pisang'
    echo $arrayBuah[1] . "<br>"; // menghasilkan 'Jeruk'
    echo $arrayBuah[2] . "<br>"; // menghasilkan 'Apel'
    ?>

    <br><br>
    <!--Contoh dua-->
    <?php
    $arrayBuah = array("Jeruk", "Apel");
    // elemen array menjadi 'Pisang, Mangga, Jeruk, Apel'
    array_unshift($arrayBuah, "Pisang", "Mangga");echo $arrayBuah[0] . "<br>"; // menghasilkan 'Pisang'
    echo $arrayBuah[1] . "<br>"; // menghasilkan 'Mangga'
    echo $arrayBuah[2] . "<br>"; // menghasilkan 'Jeruk'
    echo $arrayBuah[3] . "<br>"; // menghasilkan 'Apel'
    ?>
</body>

</html>