<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data pegawai</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row mt-3">
      <div class="col-4">
        <h3>Tambah Data pegawai</h3>
        <form action="koneksipegawai.php" method="POST">
          <div class="form-group">
            <label for="id_pegawai">ID pegawai</label>
            <input type="text" class="form-control mb-3" name="id_pegawai" placeholder="ID Pegawai">
          </div>
          <div class="form-group">
            <label for="nmPasien">Nama Pegawai</label>
            <input type="text" class="form-control mb-3" name="nama_pegawai" placeholder="Nama Pegawai">
          </div>

          <div class="form-group">
            <label for="telepon_pegawai">Nomer Telepon</label>
            <input type="text" class="form-control mb-3" name="telepon_pegawai" placeholder="Nomer Telepon">
          </div>
          
          <div class="form-group mt-3">
            <label for="alamat_pegawai">Alamat</label>
            <textarea class="form-control" name="alamat_pegawai" id="alamat_pegawai" cols="5" rows="3" placeholder="Alamat"></textarea>
          </div>
          <div class="form-group mt-3">
            <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
