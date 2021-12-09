<!DOCTYPE html>
<html>

<!-- Animasi -->

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<!-- header -->

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/Register.css">
  <link rel="stylesheet" href="animated">
</head>

<body>
  <?php include("header-footer/header-reglog.php") ?>

  <!-- Sign up form -->

  <form action="Register.php" method="POST">
    <section class="signup">
      <div class="animate__animated animate__fadeInUp">
        <div class="container">
          <div class="signup-content">
            <div class="signup-form">
              <h2 class="form-title">Sign up</h2>
              <form method="POST" class="register-form" id="register-form">
                <div class="form-group">
                  <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                  <input type="text" pattern="^[a-zA-Z0-9]+" oninvalid="setCustomValidity('Please enter on alphabets and numerics only. ')" name="username" id="username" placeholder="Username" required />
                </div>
                <div class="form-group">
                  <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                  <input type="text" name="name" id="name" placeholder="Your Name" required />
                </div>
                <div class="form-group">
                  <label for="email"><i class="zmdi zmdi-email"></i></label>
                  <input type="email" name="email" id="email" placeholder="Your Email" required />
                </div>
                <div class="form-group">
                  <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                  <input type="password" name="pass" id="pass" minlength="4" maxlength="20" placeholder="Password" required />
                </div>
                <div class="form-group">
                  <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                  <input type="password" name="copass" id="pass" minlength="4" maxlength="20" placeholder="Confirm Password" required />
                </div>
                <div class="form-group">
                  <label for="instansi"><i class="zmdi zmdi-account material-icons-name"></i></label>
                  <input type="text" name="instansi" id="instansi" placeholder="Program Studi" required />
                </div>
                <div class="form-group form-button">
                  <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                </div>
              </form>
            </div>
            <div class="signup-image">
              <div class="animate__animated animate__fadeInUp">
                <figure><img src="Asset/signup-image.jpg" alt="sign up image"></figure>
                <a href="login.php" class="signup-image-link">I am already member</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>


  <!--Footer-->
  <?php include("header-footer/footer.php") ?>
</body>
</html>

<?php

include("../Config/Connection.php");

if (isset($_POST['signup'])) {

    $username = $_POST['username'];
    $nama = $_POST['name'];
    $password = $_POST['pass'];
    $copassword = $_POST['copass'];
    $email = $_POST['email'];
    $instansi = $_POST['instansi'];

    if($password != $copassword){
      echo '<script type="text/javascript">';
      echo ' alert("Konfirmasi Password tidak sesuai")';  //not showing an alert box.
      echo '</script>';
    }
    else{
      $select = "SELECT * FROM pengguna where username ='$username'";
      $stmt = $koneksi->query($select);
      $row = $stmt->fetch();
      if ($row->username > 0){
        echo '<script type="text/javascript">';
        echo ' alert("Username sudah digunakan")';  //not showing an alert box.
        echo '</script>';   
      }
      else{
          $sql = "INSERT INTO pengguna(email, username, password, nama, instansi, level) 
          VALUES (:email, :username, :password, :nama, :instansi, 2)";
          $stmt2 = $koneksi->prepare($sql);
          if ($stmt2->execute([':email' => $email, ':username' => $username, ':password' => $password, ':nama' => $nama, ':instansi' => $instansi])) {
              $msg = 'Data inserted successfully';
              header("location: ../View/login.php");
          }
      }
    }
}
?>
