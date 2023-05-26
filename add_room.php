<?php

@include 'config.php';
if(isset($_POST['submit'])){
  
  // $b_name=mysqli_real_escape_string($conn, $_POST['building_name']);
  // $nof=number_format(mysqli_real_escape_string($conn, $_POST['no_of_floors']));
  // $nor=number_format(mysqli_real_escape_string($conn, $_POST['no_of_rooms']));
  $room_no=number_format($_POST['room_no']);
  $capacity=number_format($_POST['room_capacity']);
  $fno=number_format($_POST['floor_no']);
  $b_name=$_POST['building_name'];
  


$select = " SELECT * FROM room WHERE Room_Number='$room_no'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
 
      $error[] = 'Room Number Already Exisits!';
      // echo '<div class="alert alert-danger" role="alert">Room Number Already Exisits!</div>';


   }else{

      if($b_name==""||$room_no==0||$capacity==0||$fno==0){
         $error[] = 'Invalid Input!';
         echo $error;
      }else{
         $insert = "INSERT INTO room VALUES('$room_no','$capacity','$fno','$b_name')";
         mysqli_query($conn, $insert);
         header('location:display_room.php');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add Room</title>
  </head>
  <body class="body2">
  
    <div class="container input-center">
        
    <form method="post" action="">
  <div class="form-group">
    <h2 class="add-statement">Add Room</h2><?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

  <input type="text" maxlength="3" name="room_no" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Room Number">
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputPassword1">Password</label> -->
        <input type="text" maxlength="1" name="room_capacity" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter Room Capacity">
  </div>

  <div class="form-group">
    <input type="text" maxlength="1" name="floor_no" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Floor Number">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="20" name="building_name" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Building name">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  
  <button type="submit" name="submit"class="btn-crct btn-primary btn-lg btn-center">Add</button>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>