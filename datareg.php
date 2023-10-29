<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <?php
    error_reporting(0);
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $tempatLahir = $_GET['tempatLahir'];
    $tanggalLahir = $_GET['tanggalLahir'];
    $gender = $_GET['gender'];
    $pendidikan = $_GET['pendidikan'];

    if (!empty($nama) && !empty($alamat) && !empty($tempatLahir) && !empty($tanggalLahir) && !empty($gender) && !empty($pendidikan)) {
        echo
        '
    <div class="row">
        <div class="col-6">
        <div class="mb-4"></div>
        <h1 class="mb-4">Data Registrasi</h1>
            <table class="table table-striped">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>' . $nama . '</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>' . $alamat . '</td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>' . $tempatLahir . '</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>        
                    <td>:</td>
                    <td>' . $tanggalLahir . '</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>' . $gender . '</td>
                </tr>
                <tr>
                    <td>Pendidikan</td>
                    <td>:</td>
                    <td>' . $pendidikan . '</td>
                </tr>
            </table>
        </div>
    </div>
    ';
    }
    echo"<a href='formregistrasi.php'>Back To Home</a><br>";
    ?>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>