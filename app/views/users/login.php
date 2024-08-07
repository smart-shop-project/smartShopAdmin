<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login And Registration Form</title>
  <link rel="stylesheet" href="../css/login.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body>
  <div class="wrapper">
    <span class="bg-animate"></span>
    <span class="bg-animate2"></span>

    <div class="form-box login">
      <?php if (isset($_SESSION['email_err'])) : ?>
        <h1 class="adminError"><?= $_SESSION['email_err'] ?></h1>
      <?php endif; ?>
      <h2 class="animation" style="--i: 0; --j: 21">Login</h2>
      <form action="<?php echo URLROOT ?>/users/login" method="POST">
        <div class="input-box animation" style="--i: 1; --j: 22">
          <input type="email" name="email" class="form-control form-control-lg
              <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['email'] ?>" />
          <label for="email">Email <sup>*</sup></label>
          <i class="bx bxs-user"></i>
          <span class="invalid-feedback"><?php echo $data['email_err'] ?></span><br>
        </div>
        <div class="input-box animation" style="--i: 2; --j: 23">
          <input type="password" name="password" class="form-control form-control-lg
              <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['password'] ?>" />
          <label for="password">Password <sup>*</sup></label>
          <i class="bx bxs-lock-alt"></i>
          <span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
        </div>
        <button type="submit" class="btn animation" style="--i: 3; --j: 24">
          Login
        </button>

      </form>
    </div>
    <div class="info-text login">
      <h2 class="animation" style="--i: 0; --j: 20">Welcome Back!</h2>
      <p class="animation" style="--i: 1; --j: 21">
        Lorem ipsum dolor sit amet consectetur adipisicing.
      </p>
    </div>


  </div>

  <script src="../main.js"></script>
</body>

</html>