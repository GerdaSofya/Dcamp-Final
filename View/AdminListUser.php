<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profil.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <script src="https://kit.fontawesome.com/2a4e091a9b.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php include "header-footer/header-admin.php"?>
    <?php include_once("../Config/PagingListUser.php"); ?>
    <div class="container">
        <br>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(!empty($result)){
                        foreach($result as $dataset) {
                            {
                ?>
                            <tr>
                                <td><a class="text-dark text-decoration-none" href="<?php echo "AdminProfil.php?id=$dataset->id"?>"><?php echo $dataset->email ?></a></td>
                                <td><a class="text-dark text-decoration-none" href="<?php echo "AdminProfil.php?id=$dataset->id"?>"><?php echo $dataset->username ?></a></td>
                                <td><a class="text-dark text-decoration-none" href="<?php echo "AdminProfil.php?id=$dataset->id"?>"><?php echo $dataset->nama ?></a></td>
                                <td><a class="text-dark text-decoration-none" href="<?php echo "AdminProfil.php?id=$dataset->id"?>"><?php echo $dataset->instansi ?></a></td>
                                <td class="text-right">
                                    <a class="btn btn-primary" href="<?php echo "AdminEditProfil.php?id=$dataset->id"?>">Edit</a>
                                    <a class="btn btn-danger" href="<?php echo "../Config/DeleteUser.php?id=$dataset->id"?>" onclick="return confirm('Yakin Hapus?')">Delete</a>
                                </td>
                            </tr>
                            <?php
                            }
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
    <?php include "header-footer/footer.php"?>
</body>

</html>