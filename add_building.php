<?php

@include 'config.php';
if(isset($_POST['submit'])){
//   if($b_name==""||$nof==0||$nor==0){
//     $error[] = 'Invalid Input!';
//     echo '<div class="alert alert-warning" role="alert">Building Name Already Exisits!</div>';
//  }
  
  
  $b_name=$_POST['building_name'];
  $nof=number_format($_POST['no_of_floors']);
  $nofc=$_POST['no_of_floors'];
  $nor=number_format($_POST['no_of_rooms']);
  $norc=$_POST['no_of_rooms'];



$select = " SELECT * FROM Building WHERE Building_Name='$b_name'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Building Name Already Exisits!';
      // echo '<div class="alert alert-danger" role="alert">Building Name Already Exisits!</div>';


   }else{

      if($b_name==""||$nofc==""||$norc==""){
         $error[] = 'Fill out all the details';
        //  echo '<div class="alert alert-warning" role="alert">Fill out all the details</div>';
      }else{
         $insert = "INSERT INTO Building VALUES('$b_name','$nof','$nor')";
         mysqli_query($conn, $insert);
         header('location:display_building.php');
      }
   }
  }
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
    <title>Add Building</title>
  </head>
  <body class="body1">
  
    <div class="container">
        
    <form action="" method="post">
  
    <h2>Add Building<h2/>
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

  <input type="text" maxlength="20"name="building_name" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Building Name">
  
  
    <!-- <label for="exampleInputPassword1">Password</label> -->
    <input type="text" maxlength="1"name="no_of_floors"class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter Number of Floors">
 
  
    <input type="text" maxlength="3"name="no_of_rooms" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Number of Rooms">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  
  <button type="submit" name="submit" class="btn-crct">Add</button>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!-- /$b_name=mysqli_real_escape_string($conn, $_POST['building_name']);
  // $nof=number_format(mysqli_real_escape_string($conn, $_POST['no_of_floors']));
  // $nor=number_format(mysqli_real_escape_string($conn, $_POST['no_of_rooms'])); -->