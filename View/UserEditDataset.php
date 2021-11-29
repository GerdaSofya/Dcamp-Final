<?php
include "../Config/Connection.php";
$judul = $_GET['judul'];
$sql = 'SELECT * FROM dataset inner join kategori ON dataset.kategori_id=kategori.id inner join pengguna ON dataset.pengguna_id=pengguna.id WHERE judul=:judul';
$stmt = $koneksi->prepare($sql);
$stmt->execute([':judul' => $judul]);
$data = $stmt->fetch();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Edit Dataset - DCamp</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/header-footer.css">
</head>

<body>
    <?php include "header-footer/header-user.php" ?>
    <div class="container ml-5">
        <div class="row">
            <div class="col-md-10">
                <div class="mt-4">
                    <h1>Edit Dataset</h1>
                    <hr style="max-width:65%; margin-left:0;">
                </div>

                <form action="../Config/useredit_ds.php" method="POST">
                    <input type="hidden" name="id_dataset" value="<?php echo $data->id; ?>" required />
                    <div class="form-group">
                        <label for="inputJudul">Judul</label>
                        <input type="text" class="form-control" id="inputJudul" name="inpJudul" value="<?php echo $data->judul; ?>" placeholder="Masukkan judul">
                    </div>
                    <div class="form-group">
                        <label for="inputDeskripsi">Deskripsi</label>
                        <textarea class="form-control" id="inputDeskripsi" rows="3" name="inpDeskripsi"><?php echo $data->deskripsi; ?></textarea>
                    </div>
                    <div class="dropdown">
                        <label for="inputKategori">Kategori</label><br>
                        <select name="inpKategori" class="form-control" required>
                            <option value="<?php echo $data->kategori_id; ?>" selected hidden><?php echo $data->nama_kategori; ?></option>
                            <option value='1'>Teknologi Informasi</option>
                            <option value='2'>Sumber Daya Manusia</option>
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="inputSumber">Sumber</label>
                        <input type="text" class="form-control" id="inputSumber" name="inpSumber" value="<?php echo $data->sumber; ?>" placeholder="Masukkan sumber">
                    </div>
                    <div class="form-group">
                        <label for="inputJlhData">Jumlah Data</label>
                        <input type="text" class="form-control" id="inputJlhData" name="inpJlhData" value="<?php echo $data->jumlah_data; ?>" placeholder="Masukkan jumlah data">
                    </div>
                    <div class="form-group">
                        <label for="inputLinkData">Link Data (Gdrive)</label>
                        <input type="text" class="form-control" id="inputLinkData" name="inpLinkData" value="<?php echo $data->link_download; ?>" placeholder="Masukkan link data">
                    </div>
                    <button type="submit" class="btn tombol" name="useredit_ds" value="Save" style="margin-bottom:3rem; background-color: red; color:white;">Submit</button><br>
                </form>
            </div>
        </div>

    </div>

    <?php include "header-footer/footer.php" ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>