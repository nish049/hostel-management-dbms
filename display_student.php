<?php
@include 'config.php';
if(isset($_POST['submit'])){
$attribute=$_POST['attribute'];
$condition=$_POST['condition'];


$select = " SELECT * FROM student WHERE $attribute='$condition'" ;

$result = mysqli_query($conn, $select);
if(mysqli_num_rows($result) ==0){

  echo '<div class="alert alert-danger" role="alert">No Records Found!</div>';


}
}

else{
?>
<?php
@include 'config.php';
$select = " SELECT * FROM student" ;

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
    <title>Display Students</title>
  </head>
  <body>
  <div class="search-bar">
    <form action="" method="post">
        <!-- <input type="text" name="attribute" id="" placeholder="Search"> -->
        <select class="form-select form-select-lg mb-3 spacing-input" name="attribute"aria-label=".form-select-lg example">
  <option selected>Search By</option>
  <option value="Name">Name</option>
  <option value="Date_of_Birth">Date_of_Birth</option>
  <option value="Age">Age</option>
  <option value="Phone_Number">Phone_Number</option>
  <option value="Address">Address</option>
  <option value="Father_Name">Father_Name</option>
  <option value="Father_Phone">Father_Phone</option>
  <option value="Mother_Name">Mother_Name</option>
  <option value="Mother_Phone">Mother_Phone</option>
  <option value="USN">USN</option>
  <option value="Semester">Semester</option>
  <option value="Branch">Branch</option>
  <option value="Year_of_Study">Year_of_Study</option>
  <option value="Hostel_ID">Hostel_ID</option>
  <option value="Roommate_Name">Roommate_Name</option>
  <option value="Roommate_Semester">Roommate_Semester</option>
  <option value="Roommate_Year">Roommate_Year</option>
  <option value="Roommate_Hostel_ID">Roommate_Hostel_ID</option>
  <option value="Roommate_Phone">Roommate_Phone</option>
</select>
<input type="text" class="form-control input-width" name="condition" id="" placeholder="Search">
        <button class="btn btn-primary btn-crct mt-1 mb-3" type="submit" name="submit">Submit</button>

    </form>
</div>
    <table class="table table-bordered " >
  <thead class="thead-dark">
  <tr> 
		<th colspan="20"><h2>Student Database</h2></th> 
		</tr> 
			 
			  <th> Name</th> 
			  <th> Date_of_Birth</th> 
			  <th> Age</th> 
			  <th> Phone_Number</th> 
			  <th> Address</th> 
			  <th> Father_Name</th> 
			  <th> Father_Phone</th> 
			  <th> Mother_Name</th> 
			  <th> Mother_Phone</th> 
			  <th> USN</th> 
			  <th> Semester</th> 
			  <th> Branch</th> 
			  <th> Year_of_Study</th>
              <th> Hostel_ID</th> 
			  <th> Roommate_Name</th> 
			  <th> Roommate_Semester</th> 
			  <th> Roommate_Year</th> 
			  <th> Roommate_Hostel_ID</th> 
			  <th> Roommate_Phone</th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Name']; ?></td> 
		<td><?php echo $rows['Date_of_Birth']; ?></td> 
		<td><?php echo $rows['Age']; ?></td> 
		<td><?php echo $rows['Phone_Number']; ?></td> 
		<td><?php echo $rows['Address']; ?></td> 
		<td><?php echo $rows['Father_Name']; ?></td> 
		<td><?php echo $rows['Father_Phone']; ?></td> 
		<td><?php echo $rows['Mother_Name']; ?></td> 
		<td><?php echo $rows['Mother_Phone']; ?></td> 
		<td><?php echo $rows['USN']; ?></td> 
		<td><?php echo $rows['Semester']; ?></td> 
		<td><?php echo $rows['Branch']; ?></td> 
		<td><?php echo $rows['Year_of_Study']; ?></td> 
		<td><?php echo $rows['Hostel_ID']; ?></td> 
		<td><?php echo $rows['Roommate_Name']; ?></td> 
		<td><?php echo $rows['Roommate_Semester']; ?></td> 
		<td><?php echo $rows['Roommate_Year']; ?></td> 
		<td><?php echo $rows['Roommate_Hostel_ID']; ?></td> 
		<td><?php echo $rows['Roommate_Phone']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

</table>
    <a class="btn btn-primary "href="/open-ended/add_student.php">Add record</a>
    <button class="btn btn-primary btn-center" onclick="window.print()">Print</button>l

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>