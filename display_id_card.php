<?php
@include 'config.php';
if(isset($_POST['submit'])){
$attribute=$_POST['attribute'];
$condition=$_POST['condition'];


$select = " SELECT * FROM id_card WHERE $attribute='$condition'" ;

$result = mysqli_query($conn, $select);
if(mysqli_num_rows($result) ==0){

  echo '<div class="alert alert-danger" role="alert">No Records Found!</div>';


}
}

else{
?>
<?php
@include 'config.php';
$select = " SELECT * FROM id_card" ;

$result = mysqli_query($conn, $select);
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
    <title>Display ID Card</title>
  </head>
  <body>
  <div class="search-bar">
    <form action="" method="post">
        <!-- <input type="text" name="attribute" id="" placeholder="Search"> -->
        <select class="form-select form-select-lg mb-3 spacing-input" name="attribute"aria-label=".form-select-lg example">
  <option selected>Search By</option>
  <option value="Hostel_ID">Hostel_ID</option>
  <option value="Room_Number">Room_Number</option>
  <option value="Priority_Number">Priority_Number</option>
  <option value="Valid_From">Valid_From</option>
  <option value="Valid_Till">Valid_Till</option>
</select>
<input type="text" class="form-control input-width" name="condition" id="" placeholder="Search">
        <button class="btn btn-primary mt-1" type="submit" name="submit">Submit</button>

    </form>
</div>
    <table class="table display-table table-bordered" >
  <thead class="thead-dark">
  <tr> 
		<th colspan="5"><h2>Hostel ID Card Database</h2></th> 
		</tr> 
			 
			  <th> Hostel_ID</th> 
			  <th> Room_Number</th> 
			  <th> Priority_Number</th> 
			  <th> Valid_From</th> 
			  <th> Valid_Till</th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Hostel_ID']; ?></td> 
		<td><?php echo $rows['Room_Number']; ?></td> 
		<td><?php echo $rows['Priority_Number']; ?></td> 
		<td><?php echo $rows['Valid_From']; ?></td> 
		<td><?php echo $rows['Valid_Till']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

</table>
    <a class="btn btn-primary btn-center1"href="/open-ended/add_id_card.php">Add record</a>
    <button class="btn btn-primary btn-center" onclick="window.print()">Print</button>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>