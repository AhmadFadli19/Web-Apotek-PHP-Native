<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Obat</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="row mt-3">
      <div class="col-4">
        <h3>Tambah Data Obat</h3>
        <form action="koneksiobat.php" method="POST">
          <div class="form-group">
            <label for="id_obat">ID Obat</label>
            <input type="text" class="form-control mb-3" name="id_obat" placeholder="ID Obat">
          </div>
          <div class="form-group">
            <label for="jenis_obat">Jenis Obat</label>
            <input type="text" class="form-control mb-3" name="jenis_obat" placeholder="Jenis Obat">
          </div>
          <div class="form-group">
            <label for="nama_obat">Nama Obat</label>
            <input type="text" class="form-control mb-3" name="nama_obat" placeholder="Nama Obat">
          </div>
          </div>
          <div class="form-group mt-3">
            <label for="merek_obat">Merek Obat</label>
            <textarea class="form-control" name="merek_obat" id="merek_obat" cols="5" rows="3" placeholder="Merek Obat"></textarea>
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
