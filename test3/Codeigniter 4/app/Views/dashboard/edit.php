<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Login Page</title>
</head>
<body>
<div class="d-flex flex-column justify-content-center align-items-center vh-100">
    <h3>Edit Profil</h3>
    <div class="w-25">
        <form method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama">
            </div>
            <div class="mb-3">
                <label for="tgl-lahir" class="form-label">Tempat Tinggal</label>
                <input type="text" class="form-control" id="tgl-lahir" placeholder="Tempat Tanggal Lahir">
            </div>
            <div class="mb-3">
                <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                <input type="text" class="form-control" id="pendidikan" placeholder="Pendidikan Terkahir">
            </div>
            <div class="mb-3">
                <label for="pelatihan" class="form-label">Riwayat Pelatihan</label>
                <input type="text" class="form-control" id="pelatihan" placeholder="Riwayat Pelatihan">
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Riwayat Pekerjaan</label>
                <input type="text" class="form-control" id="pekerjaan" placeholder="Riwayat Pekerjaan">
            </div>

            <a href="/dashboard/" class="btn btn-outline-secondary">Kembali</a>
            <button type="submit" class="btn btn-warning">Edit</button>
        </form>
    </div>
</div>
</body>
</html>