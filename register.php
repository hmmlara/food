<?php 
include_once __DIR__.'/userController.php';
$user_controller=new UserController();
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    $comfirm=$_POST['comfirm'];
    if($password==$comfirm){
        $haveAccount=$user_controller->haveAccount($email);
            if($haveAccount==false)
            {   $status=$user_controller->registerUser($name,$email,$address,$password);
                 if($status){
                     $message="1";
                     echo '<script>location.href="login.php?message='.$message.'"</script>';
                  }
            }else{    
                $errorEmail=1;//have account
            }
        
    }else{
        $errorPassword=1;//password and comfirm not match
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
            <section class="vh-120" style="background-color: #364f6b;">
  <div class="container py-2 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-6">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">       
            <div class="col-md-12 col-lg-12 d-flex align-items-center">
              <div class="card-body pt-5 px-lg-5 text-black">
                <!-- d-flex align-items-center mb-2 pb-1 -->
                <div class=" d-flex align-items-center mb-2 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ffa010;">Logo</i>
                    <span class="h1 fw-bold mb-0">Restrurent Name</span>
                </div>
                <form action="" method="post">
                  <!-- <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register Account</h3> -->
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example17">Name</label>
                    <input type="text" name="name" class="form-control form-control-lg" required value="<?php if(isset($name))echo $name; ?>" />
                  </div>
                <?php if(isset($errorEmail)){?><span class="text-danger">This email have already registered!</span><?php } ?>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example17">Email</label>
                    <input type="email" name="email" class="form-control form-control-lg" required />
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example17">Address</label>
                    <input type="text" name="address" class="form-control form-control-lg" required value="<?php if(isset($address))echo $address; ?>"/>
                  </div>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg"  required/>
                  </div>
                  <?php if(isset($errorPassword)){?><span class="text-danger">Password and Comfirm Password not match!</span><?php } ?>
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form2Example27">Confirm Password</label>
                    <input type="password" name="comfirm" class="form-control form-control-lg"  required />
                  </div>

                  <div class="pt-1 mb-3">
                    <button class="btn btn-lg" name="register" type="submit" style="background-color:#ffa010;color:white">Register</button>
                  </div>

                  <p class="mb-3 pb-lg-2" style="color: #393f81;">If you have already account,&nbsp; 
                  <a href="login.php"
                      style="color: #393f81;">Login here</a></p>
                  <!-- <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a> -->
                </form>

              </div>
            </div>
            
            <!-- <div class="col-md-6 col-lg-5 d-none d-md-block">
                
                  image size= 1280 * 1970 
              <img src="img/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 0 1rem 1rem 0;" />
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        </div>
    </div>
</body>
</html>