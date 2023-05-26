<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
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
    <link rel="stylesheet" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container wlcm-msg container-ext">

<div class="content">
   <h3>hi, <span><?php echo $_SESSION['admin_name'] ?></span></h3>
   <!-- <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1> -->
   <h1><span>Hostel </span>Database Management System</h1>
   <!-- <a href="login_form.php" class="btn">login</a>
   <a href="register_form.php" class="btn">register</a> -->
   <a href="logout.php" class="btn mt-5">logout</a>
</div>
    

</div>
<div class=cards>
<div class="row mt-4 mb-4">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title c-title"><span class="text-danger">Student</span> Database</h5>
        <p class="card-text">Consists of details of students residing in hostel.</p>
        <a href="/open-ended/display_student.php" class="btn btn-danger">Click Here</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title c-title"><span class="text-danger">ID Card</span> Database</h5>
        <p class="card-text">Consists of information provided in Hostel ID Card.</p>
        <a href="/open-ended/display_id_card.php" class="btn btn-danger">Click Here</a>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title c-title"><span class="text-danger">Room</span> Database</h5>
        <p class="card-text">Consists of information about rooms available in the hostel.</p>
        <a href="/open-ended/display_room.php" class="btn btn-danger">Click Here</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title c-title"><span class="text-danger">Hostel</span> Staff Database</h5>
        <p class="card-text">Consists of information about staff working in the hostel.</p>
        <a href="/open-ended/display_hostel_staff.php" class="btn btn-danger">Click Here</a>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title c-title"><span class="text-danger">Visitor</span> Database</h5>
        <p class="card-text">Consists of details of visitors of the students.</p>
        <a href="/open-ended/display_visitor.php" class="btn btn-danger">Click Here</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title c-title"><span class="text-danger">Building</span> Database</h5>
        <p class="card-text">Consists of information about buildings provided by college hostel.</p>
        <a href="/open-ended/display_building.php" class="btn btn-danger">Click Here</a>
      </div>
    </div>
  </div>

</div>
<div class="row mb-4">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title c-title"><span class="text-danger">Hostel Room </span>Booking</h5>
        <p class="card-text">Aids Students to book hostel rooms</p>
        <a href="/open-ended/room_book.php" class="btn btn-danger">Click Here</a>
      </div>
    </div>
  </div>
</div>
    
</div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>