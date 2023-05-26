<?php
@include 'config.php';
if(isset($_POST['submit'])){
  
  // $b_name=mysqli_real_escape_string($conn, $_POST['building_name']);
  // $nof=number_format(mysqli_real_escape_string($conn, $_POST['no_of_floors']));
  // $nor=number_format(mysqli_real_escape_string($conn, $_POST['no_of_rooms']));
  $name=$_POST['s_name'];
  $dob=$_POST['s_dob'];
  $age=number_format($_POST['s_age']);
  $phone=$_POST['s_phone_no'];
  $email=$_POST['s_email'];
  $addr=$_POST['s_address'];
  $fname=$_POST['father_name'];
  $fno=$_POST['father_no'];
  $mname=$_POST['mother_name'];
  $mno=$_POST['mother_no'];
  $usn=$_POST['s_usn'];
  $sem=number_format($_POST['s_sem']);
  $br=$_POST['s_branch'];
  $yr=number_format($_POST['s_year']);
  $hid=number_format($_POST['hostel_id']);
  $rmn=$_POST['roommate_name'];
  $rms=number_format($_POST['roommate_sem']);
  $rmy=number_format($_POST['roommate_year']);
  $rhi=number_format($_POST['roommate_hostel_id']);
  $rmp=$_POST['roommate_no'];





$select = " SELECT usn FROM student WHERE usn='$usn'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';
      // echo '<div class="alert alert-danger" role="alert">Student USN already exists!</div>';


   }else{

      // if($vf==""||$vt==""||$room_no<=0||$hostel_id<=0||$pn<=0){
      //    $error[] = 'Invalid Input!';
      //    echo $error;
      // }else{
         $insert = "INSERT INTO student VALUES('$name','$dob','$age','$phone','$email','$addr','$fname','$fno','$mname','$mno','$usn','$sem','$br','$yr','$hid','$rmn','$rms','$rmy','$rhi','$rmp')";
         mysqli_query($conn, $insert);
         header('location:display_student.php');
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
    <title>Add Student</title>
  </head>
  <body class="body10">
  
    <div class="container1 input-center">
        
    <form method="post" action="">
  <div class="form-group">
    <h2 class="add-statement">Add Student</h2>
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

  <input type="text" maxlength="20" name="s_name" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Student Name">
  </div>
  <div class="form-group">
    <!-- <label for="exampleInputPassword1">Password</label> -->
        <input type="text" maxlength="10" name="s_dob" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Enter Student DOB">
  </div>
  <div class="form-group">
        <input type="text" maxlength="3" name="s_age" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Student Age">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="10" name="s_phone_no" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Phone Number">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="20" name="s_email" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Student Email">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="100" name="s_address" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Student Resedential Address">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="20" name="father_name" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Student Father Name">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="10" name="father_no" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Father Number">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="20" name="mother_name" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Mother Name">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="10" name="mother_no" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Mother Number">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="10" name="s_usn" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Student USN">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
        <input type="text" maxlength="1" name="s_sem" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Student Sem">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="50" name="s_branch" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Student Branch">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="4" name="s_year" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Student Year">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
        <input type="text" maxlength="5" name="hostel_id" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Student Hostel ID">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>

  <div class="form-group">
    <input type="text" maxlength="20" name="roommate_name" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Roommate Name">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="1" name="roommate_sem" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Roommate Sem">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="4" name="roommate_year" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Roommate Year">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="5" name="roommate_hostel_id" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Roommate Hostel ID">
    <!-- <label class="form-check-label" for="exampleCheck1">Check </label> -->
  </div>
  <div class="form-group">
    <input type="text" maxlength="10" name="roommate_no" class="form-control form-control-lg" id="exampleCheck1" placeholder="Enter Roommate Phone Number">
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