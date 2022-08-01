<?php  
  include "classes/user.php";

  $database= new Database;

  $user= new User;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
    <title >Document</title>
</head>
<body>

</head>
<body>
    

     <div class="row mt-5">

   
      <div class="col-md-6 offset-md-3">

      <?php 

    if(isset($_POST['submit'])){

         $user->registration($_POST);
    }


  


      
      
      
      
      
      
      ?>


      <form method="POST" >
  <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Full Name"  name="fName">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your User Name"  name="uName">
    
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Your Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Email address" name="email">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="cpassword">
  </div>

  
  
  <input type="submit" class=" mt-2 btn btn-success" name="submit" value="Register">
</form>

  <label class="mt-2" for="">Already Member? <a href="login.php">Login Here</a></label>

      </div>
     </div>
   
   

   </form>







    
</body>
</html>