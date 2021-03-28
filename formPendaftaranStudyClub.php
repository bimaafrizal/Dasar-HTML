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
    </style>
</head>

<body>
    <?php
    //Deklarasi Variabel
    $nameErr = $name = $nimErr = $nim = $noWaErr =  $noWa = $angkatanErr = $angkatan = $kelasErr = 
    $kelas = $tempatLahirErr = $kelas = $tempatLahirErr = $tempatLahir = $tanggalLahirErr = $tanggalLahir =
    $emailErr = $email = $jenisKelaminErr = $jenisKelamin = $agamaErr = $agama = $alamatErr = $alamat = 
    $peminatan1Err = $peminatan1 = $alasan1Err = $alasan1 = $peminatan2Err = $peminatan2 = $alasan2Err = 
    $alasan2 = " ";

    //Validasi nama
    // define variables and set to empty values
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        //Validasi nama
        if (empty($_POST["name"])) {
            $nameErr = "Name harus diisikan";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        //Validasi NIM
        if (empty($_POST["nim"])) {
            $nameErr = "NIM tidak boleh kosong";
        } else {
            $nim = test_input($_POST["nim"]);
            // check if name only contains number and whitespace
            if (!preg_match("/^[0-9]*$/", $nim)) {
                $nimErr = "Only number and white space allowed";
            }
        }

        //Validasi nomor WA
        if (empty($_POST["nomor"])) {
            $naoWaErr = "Nomor WA is required";
        } else {
            $noWa = test_input($_POST["nomor"]);
            // check if name only contains number and whitespace
            if (!preg_match("/^[0-9]*$/", $noWa)) {
                $nimErr = "Only number and white space allowed";
            }
        }

        //Validasi angkatan
        if (empty($_POST["angkatan"])) {
            $angkatanErr = "Angkatan is required";
        } else {
            $angkatan = test_input($_POST["angkatan"]);
            // check if name only contains number and whitespace
            if (!preg_match("/^[0-9]*$/", $angkatan)) {
                $$angkatanErr = "Only number and white space allowed";
            }
        }

        //Validasi Kelas
        if (empty($_POST["kelas"])) {
            $kelasErr = "kelas is required";
        }
        else {
            $kelas = $_POST["kelas"];
        }

        //Validasi Tempat Lahir
        if (empty($_POST["tempat_lahir"])) {
            $tempatLahirErr = "Tempat lahir is required";
        }
        else {
            $tempatLahir = $_POST["tempat_lahir"];
        }

        //Validasi Tanggal Lahir
        if (empty($_POST["tanggal"])) {
            $tanggalLahirEr = "Tanggal lahir is required";
        }
        else {
            $tanggalLahir = $_POST["tanggal"];
        }

        //Validasi Email
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        }
        else {
            $email = $_POST["email"];
        }

        //Validasi Jenis Kelamin
        if (empty($_POST["jenis_kelamin"])) {
            $jenisKelaminErr = "Jenis Kelamin is required";
        }
        else {
            $jenisKelamin = $_POST["jenis_kelamin"];
        }

        //Validasi Agama
        if (empty($_POST["agama"])) {
            $agamaErr = "Agama is required";
        }
        else {
            $agama = $_POST["agama"];
        }

        //Validasi alamat
        if (empty($_POST["alamat"])) {
            $alamatErr = "Alamat is required";
        }
        else {
            $alamat = $_POST["alamat"];
        }

        //Validasi Peminatan 1
        if (empty($_POST["peminatan1"])) {
            $peminatan1Err = "Pilihan 1 is required";
        }
        else {
            $peminatan1 = $_POST["peminatan1"];
        }

        //Validasi Alasan Pemninatan 1
        if (empty($_POST["alasan1"])) {
            $alasan1Err = "Alasan pilihan 1 is required";
        }
        else {
            $alasan1 = $_POST["alasan1"];
        }

        //Validasi Peminatan 2
        if (empty($_POST["peminatan2"])) {
            $peminatan2Err = "Pilihan 2 is required";
        }
        else {
            $peminatan2 = $_POST["peminatan2"];
        }

        //Validasi Alsan 2
        if (empty($_POST["alasan2"])) {
            $alasan2Err = "Alasan pilihan 2 is required";
        }
        else {
            $alasan2 = $_POST["alasan2"];
        }
    }

    //fungsi validasi
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
            <p> <span class="error"> <?php echo $kelasErr; ?></span></p>
            <P>
                <label>Angkatan :</label>
                <input type="text" name="angkatan" placeholder="Masukan Angkatan">
            <p> <span class="error"> <?php echo $angkatanErr; ?></span></p>
            </p>
            <p>
                <label>Tempat Lahir:</label>
                <input type="text" name="tempat_lahir" placeholder="Tempat lahir....">
            <p> <span class="error"> <?php echo $tempatLahirErr; ?></span></p>
            </p>
            <p>
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal">
            <p> <span class="error"> <?php echo $tanggalLahirErr; ?></span></p>
            </p>
            <p>
                <label>Email:</label>
                <input type="email" name="email" placeholder="Your Email">
            <p> <span class="error"> <?php echo $emailErr; ?></span></p>
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
            <p> <span class="error"> <?php echo $jenisKelaminErr; ?></span></p>
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
            <p> <span class="error"> <?php echo $agamaErr; ?></span></p>
            </p>
            <p>
                <label>Alamat :</label>
                <br>
                <textarea name="alamat" id="" cols="30" rows="5"></textarea>
            <p> <span class="error"> <?php echo $alamatErr; ?></span></p>
            </p>
            <p>
                <label>Peminatan Study Club 1 :</label>
                <select name="peminatan1">
                    <option>Web Development</option>
                    <option>UI/UX</option>
                    <option>Web Development</option>
                    <option>Android Development</option>
                    <p> <span class="error"> <?php echo $peminatan1Err; ?></span></p>
                </select>
            </p>
            <p>
                <label>Alasan memilih Peminatan 1 :</label>
                <br>
                <textarea name="alasan1" id="" cols="30" rows="5"></textarea>
            <p> <span class="error"> <?php echo $alasan2Err; ?></span></p>
            </p>
            <p>
                <label>Peminatan Study Club 2:</label>
                <select name="peminatan2">
                    <option>Web Development</option>
                    <option>UI/UX</option>
                    <option>Web Development</option>
                    <option>Android Development</option>
                </select>
            <p> <span class="error"> <?php echo $peminatan2Err; ?></span></p>
            </p>
            <p>
                <label>Alasan memilih Peminatan 2 :</label>
                <br>
                <textarea name="alasan2" id="" cols="30" rows="5"></textarea>
            <p> <span class="error"> <?php echo $alasan2Err; ?></span></p>
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
    <br><br>
    <h2>Data Anda:</h2>
    <br>
    <?php
    echo "Nama : " . $name . ".<br>";
    echo "NIM : " . $nim . ".<br>";
    echo "kelas : " . $kelas . ".<br>";
    echo "angkatan : " . $angkatan . ".<br>";
    echo "Tempat tanggal lahir :" . $tempatLahir . "," . $tanggalLahir . ".<br>";
    echo "Email : " . $email . ".<br>";
    echo "No WA : " . $noWa . ".<br>";
    echo "Jenis Kelamin : " . $jenisKelamin . ".<br>";
    echo "Agama : " . $agama . ".<br>";
    echo "Alamat : " . $alamat . ".<br>";
    echo "Peminatan 1 : " . $peminatan1 . ".<br>";
    echo "Alasan memilih peminatan 1 : " . $alasan1 . ".<br>";
    echo "Peminatan 2 : " . $peminatan2 . ".<br>";
    echo "Alasan memilih peminatan 2 : " . $alasan2 . ".<br>.<br>";
    echo "Terima kasih sudah mendaftar";
    ?>
</body>

</html>