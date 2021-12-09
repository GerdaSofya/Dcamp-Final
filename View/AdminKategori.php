<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/header-footer-relative.css">
    <script src="https://kit.fontawesome.com/2a4e091a9b.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php include "header-footer/header-admin.php"?>
    <?php include_once("../Config/PagingKategori.php"); ?>
    <br>
    <div class="container ml-5">

        <h3>Tambah Kategori Dataset</h1><br>
        <form action="../Config/AdminTambahKategori.php" method="POST">
            <div class="form-group col-md-8">
                <h5>Nama Kategori</h5>
                <input type="text"  maxlength="50" class="form-control" id="inputJudul" name="namakategori" placeholder="Masukkan Nama Kategori" required>
            </div><br>
            <button type="submit" class="btn btn-success" name="upkategori" value="Save" >Tambah</button><br>
            <br><br>
        </form>
        
        <h3>List Kategori Dataset</h1>
        <div class="col-md-8">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1 + $start;
                    if(!empty($result)){
                        foreach($result as $dataset) {
                ?>
                    <tr>
                        <td><?php echo $no; ?> </td>
                        <td><a class="text-dark text-decoration-none" href="<?php echo "AdminProfil.php?id=$dataset->id"?>"><?php echo $dataset->nama_kategori ?></a></td>
                        <td class="text-right">
                            <a class="btn btn-danger" href="<?php echo "../Config/AdminDeleteKategori.php?id=$dataset->nama_kategori"?>" onclick="return confirm('Yakin Hapus?')">Delete</a>
                        </td>
                    </tr>
                <?php
                    $no++;
                    }
                }
                ?>
            </tbody>
        </table>
        <?php
            echo "<ul class='pagination'>";
            for($j=1; $j <= $paginations; $j++) {
                echo "<li class='page-item'><a class='page-link text-dark text-decoration-none' href=?start=$j>".$j."</a></li>";
            }
            echo "</ul>";
        ?>
        </div>
    </div>
    <?php include "header-footer/footer.php"?>
</body>

</html>