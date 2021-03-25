<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Toko Alat Tulisdan Kantor AAA</h2>
    <form action="formHandlingSubmit.php" method="post">
        <select name="barangpesanan">
            <option>Buku tamu</option>
            <option>Amplop</option>
            <option>Map kertas</option>

        </select>
        Jumlah pesanan: <input name="jumlah" type="text" maxlength="2" 
        size="2"><input type="submit" value="Submit">
    </form>
</body>

</html>