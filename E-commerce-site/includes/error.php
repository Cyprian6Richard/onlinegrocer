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
<link rel ="stylesheet" type = "text/css" href ="../assets/css/style.css">

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

  <center>
  <div class="ops">
    <h5>Error 404 !</h5>
    <p> Ops! The Page you are looking for is not availavle</p>
  </div>
  </center>
  <style>
    .ops{
    margin-top:200px;
     }
  </style>

 <!--footer-->
 <div class="footer"style="margin-top:260px;">
 <?php
   require_once 'footer.php';
  ?>
 </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>