 
<!DOCTYPE html>
<html lang="en" dir="ltr">
  
  <head>
    <meta charset="utf-8">
    <title>MediStore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
   
  
   <div class="heading" >
     <a href="index.php"> <img src="images/logo.JPG" alt="" height="70px" width="90 px" style="text-align: center;"></a>
      <h1  style="text-align: center;color: #4682B4;"><i>  MediStore  
               <h6>A response to emergency medical need</h6>
</i></h1>
      
  </div>
  </head>
  <body >
    
     <!--Nav Bar-->
     <nav class="navbar navbar-expand-lg " style="background:#ADD8E6; ">
       <a class="navbar-brand" href="#">About us</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">Pharmacies<span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Important Links</a>
           </li>
           
         </ul>
         <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
       </div>
     </nav>


<!--Signup-->
     <div style="text-align: center;height: 200px; margin-top: 200px;">
 <form class="login" action="" method="POST">
    <h1><a href="login.php" style="color: black;">Customer LoGin</a></h1>
    <input  type="text" name="username"  placeholder="username" required>
    <br/>
    <br/>
        <input  type="password" name="password" placeholder="password" required>
        <BR/>
        <BR/>

        <button name="submit2" style="
  background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  width: 150px;
  display: block;
" >Submit</button>
    </form>


 
    <a class="h" href="signup.php" style="background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 8x;
  cursor: pointer;
  width: 200px;
  display: block;"><h2> Sign Up</h2></a>   
   <a class="h" href="pharmacysignupstart.php" style="background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 8x;
  cursor: pointer;
  width: 400px;
  display: block;"><h2> Pharmacy Signup / Login</h2></a>           
          <a class="g" href="remember.php" style="color: black;"><h2>Forget Password</h2></a>
     </div>
</div>


<?php
    if(isset($_POST['submit2'])){
      include 'connector.php';
       $username=$_POST['username'];
       $pass=$_POST['password'];

       $sql="select password from customer where email='$username';";
       $result=mysqli_query($conn,$sql);

  
       while($row=mysqli_fetch_assoc($result)){
     
         $passw=$row['password'];

         $passw=base64_decode($passw);

         if($pass==$passw){
         
               $SESSION['username']=$username;
                $url="userpanelhome.php?username=$username";
      
            //echo "<script>alert('$url');</script>";
            
            header("Location:$url");
          }
         else{
                echo "<script>alert('Incorrect username or password');</script>";
        }

     }
     }  
     ?>
   </body>
   </html>



