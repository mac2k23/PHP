<?php


$serverAddress = 'localhost';
$userName = 'root';
$password = '';
$dataBaseName = 'ammar_db';



$con = new mysqli ($serverAddress,$userName,$password,$dataBaseName);

$sql="UPDATE students SET `password`='54321'WHERE id =1";

$sql2="INSERT INTO students (`password`,`name` , `age`) VALUES('er321','Anas','20')" ;

$sql3="DELETE FROM students WHERE id=4";

// if($con->query($sql)){

// 	echo "password update !!";
// }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .asgg{
            position: relative;
            left: 30%;
        
        }
        .backgd{
            width=100%;
            height=650px;
            background-image=url('images/pic2.jpg');
        }


    </style>

</head>

<body>
    <div class="backgd m-5">
    <form class="text-center d-flex  p-5"> 
    <div class="container-fluid bg-light">
        <div class="h3 bg-secondary">Sign In</div>
        <div class="row">
            <div class="col-md-5 mt-5">
                <label>NAME:</label>
                <input type="text" name="name" placeholder="Name" class="form-control">
          </div>
          <div class="col-md-5 mt-5">
                <label>PASSWORD:</label>
                <input type="password" name="password" placeholder="passwod" class="form-control">
        </div>
    </div>
         <div class="row">

                <div class="col-md-5 mt-5">
                            <label>Email:</label>
                             <input type="int" name="email" placeholder="Email" class="form-control">
                </div>
            <div class="col-md-5 mt-5">
                        <label>Age:</label>
                        <input type="int" name="age" placeholder="Enter age" class="form-control">
             </div>
        </div> 
        <div class="row bgh">
                <div class="col-md-10 mt-5">
                            <label>Address:</label>
                             <input type="text" name="address" placeholder="Enter Your Address" class="form-control">
                </div>
      </div>  
    
        <div class="row bgh ">

                <div class="col-md-5 mt-5">
                            <label>phone-no:</label>
                             <input type="number" name="phone_no" placeholder="03XXXXXXXXX" class="form-control">
                </div>
            <div class="col-md-5 mt-5">
                        <label>Gender:</label>
                        <input type="text" name="gender" placeholder="gender" class="form-control">
             </div>
    </div>
         <br>
                <button class="btn btn-success asgg">Sign in</button>

            </div>
    </div>
    </form>
 </div>
</body>

</html>