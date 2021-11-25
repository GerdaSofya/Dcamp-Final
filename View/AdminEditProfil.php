<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Edit Profil</title>
  <link rel="stylesheet" href="css/EditProfil.css">
  <link rel="stylesheet" href="css/header-footer-fixed.css">
</head>

<body>
  <?php include("header-footer/header-admin.php") ?>
  <?php include("../Config/ProfileEditAdmin.php"); ?>

  <div class="container-edit-profil">

    <h1 class="text-edit-profil">Edit Profil Pengguna</h1>
    <form action="" method="POST">
      <label for="fusername">Username</label><br>
      <input type="text" id="fusername" name="username" value="<?php echo "$row->username" ?>"><br>
      <label for="fname">Nama</label><br>
      <input type="text" id="fname" name="name" value="<?php echo "$row->nama" ?>"><br>
      <label for="fpassword">Password</label><br>
      <input type="password" id="fpassword" name="password" value="<?php echo "$row->password" ?>"><br>
      <label for="femail">Email</label><br>
      <input type="email" id="femail" name="email" value="<?php echo "$row->email" ?>"><br>
      <label for="finstansi">Instansi</label><br>
      <input type="text" id="finstansi" name="instansi" value="<?php echo "$row->instansi" ?>"><br>
      <div class="formbutton">
        <input type="submit" value="Simpan" name="submitform">
        <input type="button" value="Batal">
      </div>
    </form>

    <div>
    </div>
  </div>

  <?php include("header-footer/footer.php") ?>
</body>

</html>