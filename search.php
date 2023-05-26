<?php
@include 'config.php';
if(isset($_POST['submit'])){
$attribute=$_POST['attribute'];
$condition=$_POST['condition'];
if($attribute==""||$condition==""){

        echo'<div class="alert alert-danger" role="alert">Invalid Search!</div>';
    
}

$select = " SELECT * FROM building WHERE $attribute='$condition'" ;

$result = mysqli_query($conn, $select);
}

else{
?>
<?php
@include 'config.php';


$select = " SELECT * FROM building " ;

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
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="search-bar">
    <form action="" method="post">
        <!-- <input type="text" name="attribute" id="" placeholder="Search"> -->
        <select class="form-select form-select-lg mb-3" name="attribute"aria-label=".form-select-lg example">
  <option selected>Search By</option>
  <option value="Building_Name">Building_Name</option>
  <option value="Number_of_Floors">Number_of_Floors</option>
  <option value="Number_of_Rooms">Number_of_Rooms</option>
</select>
        <input type="text"  name="condition" id="" placeholder="Search">
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
</div>
    <table class="table display-table" >
  <thead class="thead-dark">
  <tr> 
		<th colspan="4"><h2>Building Database</h2></th> 
		</tr> 
			 
			  <th> Building_Name </th> 
			  <th> Number_of_Floors</th> 
			  <th> Number_of_Rooms</th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Building_Name']; ?></td> 
		<td><?php echo $rows['Number_of_Floors']; ?></td> 
		<td><?php echo $rows['Number_of_Rooms']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

</table>
    <a class="btn btn-primary btn-center1"href="/open-ended/add_building.php">Add record</a>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>