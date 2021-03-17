<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Strukture Control</h1>
    <br>
    <h2>Structure IF</h2>

    <!--Contoh 1-->
    <?php
    $a = 5;
    $b = 7;
    echo "\$a = $a <br>";
    echo "\$b = $b <br>";
    if ($a > $b) {
        echo "\$a > \$b";
    }
    if ($a < $b) {
        echo "\$a < \$b";
    }
    if ($b == $a) {
        echo "\$b = \$a";
    }
    ?>

    <h2>Structure IF</h2>
    <?php
    $age = 50;
    echo "my age is " . $age . "<br><br>";
    if ($age > 30) {
        echo "Your age is greater than 30!";
    }
    ?>

    <h2>IF Else</h2>
    <?php
    $age = 50;
    echo "my age is " . $age . "<br><br>";
    if ($age < 30) {
        echo "My age is less than 30!";
    } else {
        echo "My age is greater than or equal 30!";
    } 
    ?>

    <h2>Structure IF Else IF</h2>
    <?php
    $age = 50;
    echo "my age is " . $age . "<br><br>";
    if ($age < 30) {
        echo "My age is less than 30!";
    } elseif ($age > 30 && $age < 40) {
        echo "Your age is between 30 and 40!";
    } elseif ($age > 40 && $age < 50) {
        echo "My age is between 40 and 50!";
    } else {
        echo "My age is greater than 50 or equal to 50!";
    }
    ?>

    <h2>Structure Switch</h2>

    <?php
    $favourite_site = 'Code';
    echo "my fav site is " . $favourite_site . "<br><br><br>";
    switch ($favourite_site) {
        case 'Business':
            echo "My favourite site is business.tutsplus.com!";
            break;
        case 'Code':
            echo "My favourite site is code.tutsplus.com!";
            break;
        case 'Web Design':
            echo "My favourite site is webdesign.tutsplus.com!";
            break;
        case 'Music':
            echo "My favourite site is music.tutsplus.com!";
            break;
        case 'Photography':
            echo "My favourite site is photography.tutsplus.com!";
            break;
        default:
            echo "I like everything at tutsplus.com!";
    }
    ?>
</body>

</html>