<?php


$serverAddress = 'localhost';
$userName = 'root';
$password = '';
$dataBaseName = 'ammar_db';



$con = new mysqli ($serverAddress,$userName,$password,$dataBaseName);

$sql="SELECT * FROM `students`";

$result=$con->query($sql);


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <table class="table table-light table-striped">
    	<tr>
    		<th>Name</th>
    		<th>Phone No.</th>
    		<th>Email</th>
    		<th>Password</th>
    		<th>Address</th>
    		<th>Age</th>
    		<th>Gender</th>
    	</tr>
    	<?php
	    	if($result->num_rows > 0){

				while ($row=$result-> fetch_assoc()) {

					// echo $row['name'];
					// echo $row['email'];
					// echo $row['password'];
					// echo $row['age'];
					// echo $row['gender'];
					// echo $row['address'];
					// echo $row['phone_no'];
					// echo '<br>';

					echo'<tr>';
			    		echo'<td>'.$row['name'].'</td>';
			    		echo'<td>'.$row['phone_no'].'</td>';
			    		echo'<td>'.$row['email'].'</td>';
			    		echo'<td>'.$row['password'].'</td>';
			    		echo'<td>'.$row['address'].'</td>';
			    		echo'<td>'.$row['age'].'</td>';
			    		echo'<td>'.$row['gender'].'</td>';
			    	echo'</tr>';
				}
			}else{
				echo 'DATA IS NOT AVAILABLE';
			}
    	?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>