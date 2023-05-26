<?php
@include 'config.php';
if(isset($_POST['submit'])){
  
  // $b_name=mysqli_real_escape_string($conn, $_POST['building_name']);
  // $nof=number_format(mysqli_real_escape_string($conn, $_POST['no_of_floors']));
  // $nor=number_format(mysqli_real_escape_string($conn, $_POST['no_of_rooms']));
  $name=$_POST['staff_name'];
  $dob=$_POST['staff_dob'];
  $age=number_format($_POST['staff_age']);
  $phone=$_POST['staff_phone_no'];
  $addr=$_POST['staff_address'];
  $sid=$_POST['staff_id'];
  $role=$_POST['staff_role'];
  $building=$_POST['staff_building'];
  




$select = " SELECT Staff_ID FROM hostel_staff WHERE Staff_ID='$sid'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Staff ID already exists!';
      // echo '<div class="alert alert-danger" role="alert">Staff ID already exists!</div>';


   }else{

      // if($vf==""||$vt==""||$room_no<=0||$hostel_id<=0||$pn<=0){
      //    $error[] = 'Invalid Input!';
      //    echo $error;
      // }else{
         $insert = "INSERT INTO hostel_staff VALUES('$name','$dob','$age','$phone','$addr','$sid','$role','$building')";
         mysqli_query($conn, $insert);
         header('location:display_hostel_staff.php');
      // }
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
    <title>Add Hostel Staff</title>
  </head>
 
  <body class="body3">
  
    <div class="container1 input-center">
        
    <form method="post" action="">
  <div class="form-group">
    <h2 >Add Hostel Staff</h2>
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

  <input type="text" maxlength="20" name="staff_name" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputPassword1">Password</label> -->
        <input type="text" maxlength="5" name="staff_id" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter Staff ID">
  </div>
  <div class="form-group">
        <input type="text" maxlength="10" name="staff_dob" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Date of Birth">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="3" name="staff_age" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Age">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="100" name="staff_address" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Address">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="10" name="staff_phone_no" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Phone Number">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="20" name="staff_role" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Role in Work">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="20" name="staff_building" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Associated Building">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  
  <button type="submit" name="submit" class="btn-crct btn-primary btn-lg btn-center">Add</button>
</form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>