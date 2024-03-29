<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Edit Profil</title>
  <link rel="stylesheet" href="css/EditProfil.css">
  <link rel="stylesheet" href="css/header-footer.css">
</head>

<body>
  <?php include("header-footer/header-user.php"); ?>
  <?php include("../Config/ProfileEditUser.php"); ?>

  <div class="container-edit-profil">

    <h1 class="text-edit-profil">Edit Profil Pengguna</h1>
    <form action="" method="POST">
      <label for="fusername">Username</label><br>
      <input type="text" pattern="^[a-zA-Z0-9]+" oninvalid="setCustomValidity('Please enter on alphabets and numerics only. ')" id="fusername" name="username" value="<?php echo "$row->username" ?>" required><br>
      <label for="fname">Nama</label><br>
      <input type="text" id="fname" name="name" value="<?php echo "$row->nama" ?>" required><br>
      <label for="fpassword">Password</label><br>
      <input type="password" id="fpassword" name="password" value="<?php echo "$row->password" ?>" required><br>
      <label for="femail">Email</label><br>
      <input type="email" id="femail" name="email" value="<?php echo "$row->email" ?>" required><br>
      <label for="finstansi">Program Studi</label><br>
      <input type="text" id="finstansi" name="instansi" value="<?php echo "$row->instansi" ?>" required><br>
      <div class="formbutton">
        <input type="submit" value="Update" name="submitform">
        <input type="button" value="Batal" onclick="window.location.href='UserProfil.php';">
      </div>
    </form>

    <div>
    </div>
  </div>

  <?php include("header-footer/footer.php") ?>
</body>

</html>
