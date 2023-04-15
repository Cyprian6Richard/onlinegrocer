<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grocershop</title>
    <link rel="icon" href="assets/imgs/download.png" type="image/icon type">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

  <link rel="stylesheet"href="assets/css/style.css">
  <link rel="stylesheet"href="assets/css/extrastyles.css">

</head>
<body>
    
  
  <!--navbar-->
  
 
  <!--navbar-->
  
  <div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container-fluid">
      <img src="assets/imgs/download.png" alt="logo" class="logo">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <!--products-->
          <li class="nav-item">
            <a class="nav-link" href="index.php">Products</a>
          </li>
           <!--contacts-->
          <li class="nav-item">
            <a class="nav-link" href="includes\contact.php">Contacts</a>
          </li>
           <!--cart-->
           <?php
            if(isset($_SESSION["cart_item"])){
            $total_quantity = 0;
            $total_price = 0;
          ?>
          <?php		
            foreach ($_SESSION["cart_item"] as $item){
             $item_price = $item["quantity"]*$item["price"];
		      ?>
          <?php
				   $total_quantity += $item["quantity"];
				   $total_price += ($item["price"]*$item["quantity"]);
		       }
		      ?>	
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"><sup><?php echo $total_quantity; ?></sup></i>
            </a>
          </li>
          <?php
           } else {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"><sup>0</sup></i>
            </a>
          </li>
          <?php 
           }
           ?>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">Total Price /1500</a> <li class="nav-item">
            </li>
          </li> -->
        </ul>
        <ul class="navbar-nav d-flex flex-row">
           <li class="nav-item me-3 me-lg-0 dropdown" >
           <!-- session -->
            
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
               data-mdb-toggle="dropdown"
               aria-expanded="false"
               aria-haspopup="true" >
               <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="includes/Register.php">Sign Up</a>
              <a class="dropdown-item" href="includes/login.php">Log in</a>
              <a class="dropdown-item" href="includes/logout.php">Log Out</a>
            </div>
          </div>
        </ul>
         
        <form class="d-flex" role="search" action="" method="POST">
          <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit" name="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  </div>
    
</body>
</html>