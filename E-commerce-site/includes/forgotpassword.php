
<?php
 require_once 'config.php';
 if (isset($_POST['submit'])){

    $email = $_POST['email'];
    $newpassword = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    $newpasswordhash = password_hash($newpassword, PASSWORD_DEFAULT);
    $repeatpasswordhash = password_hash($repeatpassword, PASSWORD_DEFAULT);
  
  if($_POST['password']==$_POST['repeatpassword']){

    try {
        //code...
        $sql = "UPDATE users SET password='$newpasswordhash',repeatpassword='$repeatpasswordhash'  where email='" . $_POST["email"] . "' ";
        $sth = $DBH->prepare($sql);
        $sth->execute(array());
        $_SESSION['success'] = "message sent successfully.";
      } catch (PDOException $e) {
        //throw $th;
        echo $e->getMessage();
      }
      echo "<script>alert('Password reset Successfully you can now log in')</script>
	<script>window.location = 'login.php'</script>";
  }
  
  else{
       echo("<script>alert('Sorry Passwords Dont Match.Kindly check and Try Again!')</script>
             <script>window.location = 'forgotpassword.php'</script>");  
      }
  
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoby Groceries</title>
    <link rel="icon" href="../assets/imgs/download.png" type="image/icon type">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

<link rel="stylesheet"href="assets/css/style.css">
<link rel ="stylesheet" type = "text/css" href ="../assets/css/form.css">

</head>
<style>
    .container_fluid{
    border: 6px solid rgba(9, 100, 236, 0.8);
    background-color:#ADD8E6;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
    margin-top:20px;
    padding: 120px;
    max-width: 500px;
    font-weight:bold;
}
</style>
<body>
<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <img src="../assets/imgs/download.png" width="80" alt="logo" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
          </li>
          <!--products-->
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Products</a>
          </li>
           <!--contacts-->
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Contacts</a>
          </li>
           <!--cart-->
          <li class="nav-item">
            <a class="nav-link" href="../cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"><sup>0</sup></i>
            </a>
          </li>
         
        </ul>
        
      </div>
    </div>
  </nav>
  </div>

  <style>
        @media only screen and (max-width:570px) {
            .picture{
                display:none;
            }
            form{
                height:100%;
            }
        }
    </style>
    
        <div class="wrapper" style="display:flex; justify-content: center; ">
        <div class="picture" style="margin-top:40px;">
            <img src="../assets/imgs/shopping.jpg" alt="" height="490px"  width="400px">
        </div>
        <div class="form-information" style="margin-top:40px;">
        <form action="forgotpassword.php" method="POST">
        <div class="form-container">
            <div class="container">
                <h3 style="display:flex; font-weight:bold;"><img src="../assets/imgs/ad.png" alt="" width="35" style="margin-right:10px"> Forgot Password ?</h3>
                <hr><br>
                <label for="Email"><b>Registered email</b></label>
                <input type="email" placeholder="Enter registered email" name="email" required>
                <label for="password"><b>New Password</b></label>
                <div class="password">
                    <input type="password" placeholder="Enter new password" name="password" id="id_password" required>
                    <i class="far fa-eye" id="togglePassword" style="margin:15px; margin-left:-60px;cursor: pointer;"></i>
                </div>
                <label for="Email"><b>Repeat Password</b></label>
                <div class="Repeatpassword" style="display:flex;">
                   <input type="password" placeholder="Repeat new password" name="repeatpassword" id="id_password2" required>
                   <i class="far fa-eye" id="togglePassword2" style="margin:15px; margin-left:-60px;cursor: pointer;"></i>
                </div>
                <hr>
                
                <button type="submit" name="submit" class="registerbtn"style="margin:auto; display:block;">Reset Password</button>
                <br><button style=" background:skyblue;"><a href="login.php"style="text-decoration:none;">Log in</a></button> 
                <button style="float:right; background:skyblue;"><a href="Register.php"style="text-decoration:none;">Sign Up</a></button>
              </div>
        </div>
    </form>

        </div>
    </div>
   
    
    <!---TogglePassword-->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');
 
       togglePassword.addEventListener('click', function (e) {
           // toggle the type attribute
           const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
           password.setAttribute('type', type);
           // toggle the eye slash icon
           this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script>
        const togglePassword2 = document.querySelector('#togglePassword2');
        const repeatpassword = document.querySelector('#id_password2');
 
       togglePassword2.addEventListener('click', function (e) {
           // toggle the type attribute
           const type = repeatpassword.getAttribute('type') === 'password' ? 'text' : 'password';
           repeatpassword.setAttribute('type', type);
           // toggle the eye slash icon
           this.classList.toggle('fa-eye-slash');
        });
    </script>

  <!--footer-->
  <?php
   require_once 'footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>