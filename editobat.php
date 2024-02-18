<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Apotek | Edit Data Obat</title>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Obat</h3>
                <?php
                include 'koneksiobat.php';
                $panggil = $koneksiobat->query("SELECT * FROM obat WHERE id_obat = '$_GET[edit]'");
                while ($row = $panggil->fetch_assoc()) {
                ?>
                <form action="editobat.php" method="POST">
                    <div class="form-group">
                        <label for="id_obat">ID Obat</label>
                        <input type="text" class="form-control mb-3" name="id_obat" value="<?= $row['id_obat'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="jenis_obat">Jenis Obat</label>
                        <input type="text" class="form-control mb-3" name="jenis_obat" value="<?= $row['jenis_obat'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control mb-3" name="nama_obat" value="<?= $row['nama_obat'] ?>">
                    </div>
                    
                    <div class="form-group mt-3">
                        <label for="merek_obat">Alamat</label>
                        <textarea class="form-control" name="merek_obat" id="merek_obat" cols="5" rows="3" placeholder="Alamat"><?= $row['merek_obat'] ?></textarea>
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
