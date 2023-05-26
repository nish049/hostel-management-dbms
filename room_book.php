<?php

@include 'config.php';
$hasbooked=0;
if(isset($_POST['submit'])){
    if($hasbooked==1)
    {
      $error[] = 'You have already booked a room';

    }
    else{
    $building_name= $_POST['building'];
    $rno=number_format($_POST['submit']);
    

    $select = "SELECT * FROM room WHERE Building_Name = '$building_name' && Room_Number = $rno && Capacity>0";
    
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) == 0){
      
 
       $error[] = 'Selected Room is not Vacant it is filled';
 
    }else{
 
       
          $update = "UPDATE room SET Capacity=Capacity-1 WHERE Building_Name='$building_name' && Room_Number='$rno'";
          mysqli_query($conn, $update);
          header('location:room_book.php');
          $hasbooked=1;
          
       
    }
  }
}
?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
  <title>Hostel Room Booking</title>
  <style>
    /* Add styles for the page */
    .container {
      display: flex;
      flex-direction:column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .buttons-grid {
      display: grid;
      grid-template-columns: repeat(10, 1fr);
      grid-template-rows: repeat(3, 1fr);
      grid-gap: 15px;
      padding: 20px;
      background-color:red;
      color: white;
      border-radius: 10px;
    }

    .button {
      border: none;
      background-color: white;
      color: black;
      text-align: center;
      padding: 15px;
      border-radius: 5px;
      cursor: pointer;
    }

    .button:hover {
      background-color: black;
      color: white;
    }
  </style>
</head>
<body class="body4">

<div class="container3">
<form action="" method="post">
<select class="select_type" name="building" aria-label=".form-select-lg example">
  <option disable selected>Choose Building</option>
  <option value="Building1">Building1</option>
  <option value="Building2">Building2</option>
  <option value="Building3">Building3</option>
</select>
    <h1>Hostel Rooms</h1>
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
    <div class="buttons-grid">
      <button class="button" type="submit" value="101" name="submit">101</button>
      <button class="button" type="submit" value="102" name="submit">102</button>
      <button class="button" type="submit" value="103" name="submit">103</button>
      <button class="button" type="submit" value="104" name="submit">104</button>
      <button class="button" type="submit" value="105" name="submit">105</button>
      <button class="button" type="submit" value="106" name="submit">106</button>
      <button class="button" type="submit" value="107" name="submit">107</button>
      <button class="button" type="submit" value="108" name="submit">108</button>
      <button class="button" type="submit" value="109" name="submit">109</button>
      <button class="button" type="submit" value="110" name="submit">110</button>
      
      <button class="button" type="submit" value="201" name="submit">201</button>
      <button class="button" type="submit" value="202" name="submit">202</button>
      <button class="button" type="submit" value="203" name="submit">203</button>
      <button class="button" type="submit" value="204" name="submit">204</button>
      <button class="button" type="submit" value="205" name="submit">205</button>
      <button class="button" type="submit" value="206" name="submit">206</button>
      <button class="button" type="submit" value="207" name="submit">207</button>
      <button class="button" type="submit" value="208" name="submit">208</button>
      <button class="button" type="submit" value="209" name="submit">209</button>
      <button class="button" type="submit" value="210" name="submit">210</button>
      
      <button class="button" type="submit" value="301" name="submit">301</button>
      <button class="button" type="submit" value="302" name="submit">302</button>
      <button class="button" type="submit" value="303" name="submit">303</button>
      <button class="button" type="submit" value="304" name="submit">304</button>
      <button class="button" type="submit" value="305" name="submit">305</button>
      <button class="button" type="submit" value="306" name="submit">306</button>
      <button class="button" type="submit" value="307" name="submit">307</button>
      <button class="button" type="submit" value="308" name="submit">308</button>
      <button class="button" type="submit" value="309" name="submit">309</button>
      <button class="button" type="submit" value="310" name="submit">310</button>
      
</div>
</div> 
</form>
    


</body>
</html>
