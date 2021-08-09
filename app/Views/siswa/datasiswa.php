<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Data</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/Siswa">Clouds</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="/Siswa">Home</a>
                    <a class="nav-link" href="/Siswa/dataSiswa">Data Siswa</a>
                    <a class="nav-link" href="/Siswa/about">Tentang</a>
                </div>
            </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-2">
            <h1> Data Siswa</h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Budi</td>
                            <td>XIRPL1</td>
                            <td>07/03/2003</td>
                            <td>
                                <button type="button" class="btn btn-primary">Detail</button>
                                <button type="button" class="btn btn-warning text-white">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Sparke</td>
                            <td>XITKJ8</td>
                            <td>20/12/2004</td>
                            <td>
                                <button type="button" class="btn btn-primary">Detail</button>
                                <button type="button" class="btn btn-warning text-white">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Luna</td>
                            <td>XIELEC3</td>
                            <td>10/02/2003</td>
                            <td>
                                <button type="button" class="btn btn-primary">Detail</button>
                                <button type="button" class="btn btn-warning text-white">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Tom</td>
                            <td>XIMM5</td>
                            <td>15/06/2005</td>
                            <td>
                                <button type="button" class="btn btn-primary">Detail</button>
                                <button type="button" class="btn btn-warning text-white">Ubah</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>