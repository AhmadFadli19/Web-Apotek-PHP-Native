<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Apotek | Edit Data pegawai</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data pegawai</h3>
                <?php
                include 'koneksipegawai.php';
                $panggil = $koneksipegawai->query("SELECT * FROM pegawai WHERE id_pegawai = '$_GET[edit]'");
                while ($row = $panggil->fetch_assoc()) {
                ?>
                <form action="editpegawai.php" method="POST">
                    <div class="form-group">
                        <label for="id_pegawai">ID Pegawai</label>
                        <input type="text" class="form-control mb-3" name="id_pegawai" value="<?= $row['id_pegawai'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" class="form-control mb-3" name="nama_pegawai" value="<?= $row['nama_pegawai'] ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="telepon_pegawai">telepon_pegawai </label>
                        <input type="text" class="form-control mb-3" name="telepon_pegawai" value="<?= $row['telepon_pegawai'] ?>">
                    </div>
                    
                    <div class="form-group mt-3">
                        <label for="alamat_pegawai">Telepon Pegawai</label>
                        <textarea class="form-control" name="alamat_pegawai" id="alamat_pegawai" cols="5" rows="3" placeholder="alamat_pegawai"><?= $row['alamat_pegawai'] ?></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="edit" value="Edit" class="form-control btn btn-primary">
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
