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
    <title>Tampil Siswa</title>
</head>

<body>

    <!-- <div class="container">
        <br>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-success mb-3" >
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
                <h1> Data Siswa</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>Tempat/Tanggal Lahir</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 0;
                        foreach ($tampildata as $row) : $nomor++;
                        ?>

                            <tr>
                                <th><?= $nomor; ?></th>
                                <td><?= $row->nis ?></td>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->kelas ?></td>
                                <td><?= $row->alamat ?></td>
                                <td><?= $row->tmplahir . '/' . $row->tgllahir ?></td>
                                <td>
                                    <button type="button" class="btn btn-primary" onclick="window.location='<?php echo site_url('Siswa/edit/' . $row->nis) ?>'">
                                        Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" onclick="hapus('<?= $row->nis ?>')">Hapus</button>
                                </td>
                            </tr>

                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
                <button type="button" class="btn btn-dark" onclick="window.location='<?php echo site_url('Siswa/tambah') ?>'">
                    Tambah Data
                </button>
                <script>
                    function hapus(nis) {
                        pesan = confirm('Hapus Data Ini?');
                        if (pesan) {
                            window.location.href = ("<?= site_url('siswa/hapus/') ?>") + nis;
                        } else return false;
                    }
                </script>
            </div>
</body>

</html>