<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Study Club</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>1
</head>

<body>
    <?php
    // define variables and set to empty values
    $nameErr = "";
    $name = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
    }

    $nimErr = "";
    $nim = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nim"])) {
            $nameErr = "NIM is required";
        } else {
            $nim = test_input($_POST["nim"]);
            // check if name only contains number and whitespace
            if (!preg_match("/^[0-9]*$/", $nim)) {
                $nimErr = "Only number and white space allowed";
            }
        }
    }

    $noWaErr = "";
    $noWa = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["nomor"])) {
            $naoWaErr = "Nomor WA is required";
        } else {
            $noWa = test_input($_POST["nomor"]);
            // check if name only contains number and whitespace
            if (!preg_match("/^[0-9]*$/", $noWa)) {
                $nimErr = "Only number and white space allowed";
            }
        }
    }

    $angkatanErr = "";
    $angkatan = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["angkatan"])) {
            $angkatanErr = "Angkatan is required";
        } else {
            $angkatan = test_input($_POST["angkatan"]);
            // check if name only contains number and whitespace
            if (!preg_match("/^[0-9]*$/", $angkatan)) {
                $$angkatanErr = "Only number and white space allowed";
            }
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>
                <h1>Form Registrasi Study Club</h1>
            </legend>
            <p>
                <label>Nama:</label>
                <input type="text" name="name" placeholder="Nama lengkap..." value="<?php echo $name ?>">
            <p> <span class="error"> <?php echo $nameErr; ?></span></p>
            </p>
            <p>
                <label>NIM :</label>
                <input type="text" name="nim" placeholder="Masukan NIM">
            <p> <span class="error"> <?php echo $nimErr; ?></span></p>
            </p>
            <p>
                <label>Kelas:</label>
                <select name="kelas">
                    <option>TI-A</option>
                    <option>TI-B</option>
                    <option>TI-C</option>
                    <option>TI-D</option>
                </select>
            <P>
                <label>Angkatan :</label>
                <input type="text" name="angkatan" placeholder="Masukan Angkatan">
            <p> <span class="error"> <?php echo $angkatanErr; ?></span></p>
            </p>
            <p>
                <label>Tempat Lahir:</label>
                <input type="text" name="Tempat_Lahir" placeholder="Tempat lahir...." required>
            </p>
            <p>
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal" required>
            </p>
            <p>
                <label>Email:</label>
                <input type="email" name="email" placeholder="Your Email" required>
            </p>
            <p>
                <label>No WA :</label>
                <input type="text" name="nomor" placeholder="Masukan Nomor WA">
            <p> <span class="error"> <?php echo $noWaErr; ?></span></p>
            </p>
            <p>
                <label>Jenis Kelamin:</label>
                <label><input type="radio" name="jenis_kelamin" value="laki-laki" />Laki-laki</label>
                <label><input type="radio" name="jenis_kelamin" value="perempuan" />Perempuan</label>
            </p>
            <p>
                <label>Agama:</label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katholik</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Kong Hu Chu</option>
                </select>
            </p>
            <p>
                <label>Alamat :</label>
                <br>
                <textarea name="alamat" id="" cols="30" rows="5" require></textarea>
            </p>
            <p>
                <label>Peminatan Study Club 1 :</label>
                <select name="peminatan1">
                    <option>Web Development</option>
                    <option>UI/UX</option>
                    <option>Web Development</option>
                    <option>Android Development</option>
                </select>
            </p>
            <p>
                <label>Alasan memilih Peminatan 1 :</label>
                <br>
                <textarea name="alasan1" id="" cols="30" rows="5" require></textarea>
            </p>
            <p>
                <label>Peminatan Study Club 2:</label>
                <select name="peminatan2">
                    <option>Web Development</option>
                    <option>UI/UX</option>
                    <option>Web Development</option>
                    <option>Android Development</option>
                </select>
            </p>
            <p>
                <label>Alasan memilih Peminatan 2 :</label>
                <br>
                <textarea name="alasan2" id="" cols="30" rows="5" require></textarea>
            </p>
            <p>
                <label><input type="checkbox" name="setujuSyarat" value="setujuSyarat" require />
                    Saya bersedia mengikuti proses seleksi</label>
            </p>
            <p>
                <br>
                <input type="submit" name="submit" value="Submit">
            </p>
        </fieldset>
    </form>
    <br>
    <h2>Data Anda:</h2>
    <br>
    <?php
    $kelas = $_POST['kelas'];
    $tempatLahir = $_POST['Tempat_Lahir'];
    $tanggalLahir = $_POST['tanggal'];
    $email = $_POST['email'];
    $kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $peminatan1 = $_POST['peminatan1'];
    $alasan1 = $_POST['alasan1'];
    $peminatan2 = $_POST['peminatan2'];
    $alasan2 = $_POST['alasan2'];

    echo "Nama : " . $name . ".<br>";
    echo "NIM : " . $nim . ".<br>";
    echo "kelas : " . $kelas . ".<br>";
    echo "angkatan : " . $angkatan . ".<br>";
    echo "Tempat tanggal lahir :" . $tempatLahir . "," . $tanggalLahir . ".<br>";
    echo "Email : " . $email . ".<br>";
    echo "No WA : " . $noWa . ".<br>";
    echo "Jenis Kelamin : " . $kelamin . ".<br>";
    echo "Agama : " . $agama . ".<br>";
    echo "Alamat : " . $alamat . ".<br>";
    echo "Peminatan 1 : " . $peminatan1 . ".<br>";
    echo "Alasan memilih peminatan 1 : ".$alasan1.".<br>";
    echo "Peminatan 2 : " . $peminatan2 . ".<br>";
    echo "Alasan memilih peminatan 2 : ".$alasan2.".<br>.<br>";
    echo "Terima kasih sudah mendaftar";
    ?>
</body>

</html>