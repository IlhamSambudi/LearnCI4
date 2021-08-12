<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Edit Siswa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
                <h1> Edit Siswa</h1>
                <?= form_open('siswa/update') ?>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIS</label>
                        <input type="number" class="form-control" name="nis" readonly value="<?= $nis;?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" value="<?= $nama;?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="<?= $kelas;?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?= $alamat;?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tmplahir" value="<?= $tmplahir;?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgllahir" value="<?= $tgllahir;?>">
                    </div>


                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

                <?= form_close() ?>

            </div>
        </div>
    </div>
</body>

</html>