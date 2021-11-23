<?php

    if(isset($_POST['signup'])){
  
  	  	//proses insert
          $insert = mysqli_query($connect, "INSERT INTO user VALUES (
                    	'".$generateId."',
			'".date('Y-m-d')."',
			'".$_POST['name']."',
			'".$_POST['email']."'
                    	'".$_POST['pass']."'
	)");

		if($insert){
			echo '<script>window.location="Register.php"</script>';
		}else{
			echo "huft" .mysqli_error($connect);
		}

	}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Register</title>
  <link rel="stylesheet" href="css/Register.css">
  <link rel="stylesheet" href="css/header-footer-fixed.css">
</head>

<body>
<?php include("header-footer/header-user.php") ?>

  <!-- Sign up form -->
  <form action="" method="post">
  <section class="signup">
    <div class="container">
      <div class="signup-content">
        <div class="signup-form">
          <h2 class="form-title">Sign up</h2>
          <form method="POST" class="register-form" id="register-form">
            <div class="form-group">
              <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
              <input type="text" name="name" id="name" placeholder="Your Name" />
            </div>
            <div class="form-group">
              <label for="email"><i class="zmdi zmdi-email"></i></label>
              <input type="email" name="email" id="email" placeholder="Your Email" />
            </div>
            <div class="form-group">
              <label for="pass"><i class="zmdi zmdi-lock"></i></label>
              <input type="password" name="pass" id="pass" placeholder="Password" />
            </div>
            <div class="form-group form-button">
              <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
            </div>
          </form>
        </div>
        <div class="signup-image">
          <figure><img src="../Register (user)/Images/signup-image.jpg" alt="sign up image"></figure>
          <a href="#" class="signup-image-link">I am already member</a>
        </div>
      </div>
    </div>
  </section>
</form>

  <!--Footer-->
  <?php include("header-footer/footer.php") ?>
</body>

</html>
