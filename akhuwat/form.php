<?php


$serverAddress = 'localhost';
$userName = 'root';
$password = '';
$dataBaseName = 'students2';



$con = new mysqli ($serverAddress,$userName,$password,$dataBaseName);

$sql="UPDATE alistable2 SET `password`='54321'WHERE id =1";

$sql2="INSERT INTO alistable2 (`password`,`name` , `age`) VALUES('er321','Anas','20')" ;

$sql3="DELETE FROM alistable2 WHERE id=4";

if($con->query($sql)){

	echo "password update !!";
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>  
    <h1>Sign in!</h1>
    <form>
                <label>Name:</label>
                <input type="text" name="name" class="form-control">
                <label>PASSWORD:</label><BR>
                <input type="int" name="password" class="form-control">
                <label>Age:</label>
                <input type="text" name="address" class="form-control">
                <label>Address:</label><BR>
                <input type="int" name="age" class="form-control">
                <label>Gender:</label>
                <input type="text" name="gender" class="form-control">
                <label>Email:</label>
                <input type="email" name="email" class="form-control">
                <label>Phone no:</label>
                <input type="int" name="phone_no" class="form-control">
                <br>
                <button class="form-control bg-primary">Sign in</button>
               






    </form>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>