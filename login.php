<?php 
include_once __DIR__.'/userController.php';
$user_controller=new UserController();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $haveAccount=$user_controller->haveAccount($email);
    if($haveAccount==false){
        $errorEmail=1;
    }else{
        if($haveAccount['password']==$password){
            echo '<script>location.href="#?email='.$email.'"</script>';
        }else{
            $errorPassword=1;
        }
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="contianer">
        <div class="row">
            <div class="">
            <section class="vh-100" style="background-color: #364f6b;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
                <!-- image size= 1280 * 1970 -->
              <img src="img/login.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post">
                
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ffa010;">Logo</i>
                    <span class="h1 fw-bold mb-0">Restrurant Name</span>
                  </div>
                  <?php 
                    if(isset($_GET['message'])&& $_GET['message']==1){ ?>
                    <h5 class="fw-normal mb-3 pb-3 text-success" style="letter-spacing: 1px;">Register success! Sign into your account</h5>
                  <?php  }else{
                    ?>
                  <h4 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h4>
                    <?php }?>

                    <?php if(isset($errorEmail)){?><span class="text-danger">Invalid Email!</span><?php } ?>

                  <div class="form-outline mb-4">
                  <label class="form-label">Email address</label>
                    <input type="email" name="email"  value="<?php if(isset($email))echo $email; ?>" class="form-control form-control-lg" />
                  </div>

                  <?php if(isset($errorPassword)){?><span class="text-danger mt-4">Incorrect Password!</span><?php } ?>
                  <div class="form-outline mb-4">
                  <label class="form-label">Password</label>
                    <input type="password" name="password"  value="<?php if(isset($password))echo $password; ?>" class="form-control form-control-lg" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" name="login" type="submit" style="background-color:#ffa010">Login</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? 
                  <a href="register.php"
                      style="color: #393f81;">Register here</a></p>
                  <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a> -->
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
            </div>
        </div>
    </div>
</body>
</html>