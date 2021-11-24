<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/profil.css">
  <link rel="stylesheet" href="css/header-footer.css">
  <script src="https://kit.fontawesome.com/2a4e091a9b.js" crossorigin="anonymous">
  </script>
</head>
<body>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Username</th>
      <th scope="col">Nama</th>
      <th scope="col">Instansi</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php include("header-footer/header-admin.php");
        $sql = "SELECT id,email,username,nama,instansi from pengguna";
        $data = $koneksi->query($sql);
        $row = $data->fetchAll();
        foreach ($row as $dataset) {
    ?>
    <tr>
        <td><?php echo $dataset->id ?></td>
        <td><?php echo $dataset->email ?></td>
        <td><?php echo $dataset->username  ?></td>
        <td><?php echo $dataset->nama?></td>
        <td><?php echo $dataset->instansi?></td>
        <td class="text-right">
            <button class="btn btn-primary">Edit</button>
            <a class="btn btn-danger" href="">Delete</a>
        </td>
        </tr>
    <?php 
        }
    ?>
  </tbody>
<?php 
include("header-footer/footer.php") ?>
</body>