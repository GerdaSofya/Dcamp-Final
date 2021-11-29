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
  <link rel="stylesheet" href="css/header-footer-fixed.css">
  <link rel="stylesheet" href="animated">
</head>

<body>
  <?php include("header-footer/header-reglog.php") ?>

  <!-- Sign up form -->

  <form action="../Config/Register.php" method="POST">
    <section class="signup">
      <div class="animate__animated animate__fadeInUp">
        <div class="container">
          <div class="signup-content">
            <div class="signup-form">
              <h2 class="form-title">Sign up</h2>
              <form method="POST" class="register-form" id="register-form">
                <div class="form-group">
                  <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                  <input type="text" name="username" id="username" placeholder="Username" required />
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
                  <label for="instansi"><i class="zmdi zmdi-account material-icons-name"></i></label>
                  <input type="text" name="instansi" id="instansi" placeholder="Asal Instansi" required />
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