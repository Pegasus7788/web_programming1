<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-5">
                <h1 class="mb-4">Form Registrasi</h1>
                Isi data di bawah ini:
                <form action="datareg.php" method="get">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Anda" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="tempat lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempatLahir" id="tempatLahir" placeholder="Tempat Lahir Anda" required>
                    </div>
                    <div class="col-3 mb-3">
                        <label for="tanggal lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggalLahir" id="tanggalLahir" placeholder="" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis kelamin" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="Pria" value="Pria">
                            <label class="form-check-label" for="Pria">Pria</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="Wanita" value="Wanita">
                            <label class="form-check-label" for="Wanita">Wanita</label>
                        </div>
                    </div>
                    <div class="col-3 mb-3">
                    <label for="pendidikan" class="form-label">Pendidikan</label>
                        <select class="form-select" name="pendidikan" id="pendidikan" aria-label="small select example">
                            <option selected>Pilih</option>
                            <option value="SMK">SMK</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Tampil</button>
                    <button type="submit" class="btn btn-default ">Batal</button>
                </form>
            </div>
</body>
</html>
