<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Upload Image</title>
</head>

<body>
    <div class="container">
        <div class="col-6">
            <?php if (session()->has('success')) : ?>
                <p class="text-success"><?= session()->getFlashdata('success') ?></p>
            <?php endif; ?>
            <?php if (session()->has('error')) : ?>
                <p class="text-danger"><?= session()->getFlashdata('error') ?></p>
            <?php endif; ?>
            <div class="card">
                <div class="card-header">Image Upload</div>
                <div class="card-body">
                    <form action="<?= current_url() ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Keterangan Gambar</label>
                            <input type="text" name="keterangan" id="keterangan" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Pilih Gambar</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image" id="image">
                            </div>
                        </div>
                        <div class="mt-3">
                            <button class="btn btn-primary" type="submit">UPLOAD</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>