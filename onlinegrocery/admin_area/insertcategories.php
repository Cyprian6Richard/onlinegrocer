
<?php
include('connect.php');

/*if(isset($POST['insert_cat'])){
  $category_title=$POST['cat_title'];

  $insert_query="insert into categories (category_title) values ('$category_title')";
  $result=mysqli_query($con,$insert_query);
 
  }
  if($result){
    echo "<script>alert('category inserted successfully')</script>";

  }
}*/
INSERT INTO categories (category_id, category_title)
VALUES ('cat_title');


?>


<form action="insertcategories.php" method="post" class="mb-2">
  <div class="input-group  w-90 mb-2">
    <input type="text" class="form-control" placeholder="Insert Category" value="cat_title"aria-label="Username" aria-describedby="basic-addon1">
  </div>

  <div class="input-group w-10 mb-2 m-auto">
  <input type="submit" class="bg-info "name="insert_cat" value="Insert Categories">
    </div>
  </form>