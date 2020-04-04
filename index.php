<!DOCTYPE html>
<html lang="en" dir="ltr">
  
  <head>
    <meta charset="utf-8">
    <title>MediStore</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
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
         <form class="form-inline my-2 my-lg-0" method="POST" action="">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" name="logout">Search</button>
         </form>
       </div>
     </nav>
</div>




     <!--Contents-->

        <div class="contentHomePage" style="margin-top: 10px;"   >
        <div class="homepageimage1" style="float: left;">
        <div class="container" style="">
          <img class="mySlides" src="images/homepageimage1.JPG" style="height: 350px;">   
          <img class="mySlides" src="images/homepageimage2.JPG" style="height: 350px;">  
          <img class="mySlides" src="images/homepageimage3.JPG" style="height: 350px;">   
          <img class="mySlides" src="images/homepageimage4.JPG" style="height: 350px;">  
</div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
         
        
        </div>
      </div>
        <div class="container" > 
         <h3 style="text-align: center;"> Features:</h3><br/>
        <div class="fact" style="float: right; color:white;border: 1px black solid ;width:50%;background:#4682B4; text-align: center;border-radius: 25px;">
          <br/>
         <h4>** Medicines of all brands</h4><br/>
         </div>
         <br/>
         <br/> <br/> <br/> 
         <div class="fact" style="float: right;border: 1px black solid ;color:white;width:50%;background:#4682B4; text-align: center;border-radius: 25px;">
       
         <h4>** Discounts for regular customers</h4><br/>
         </div>
            <br/> <br/> 
         <br/>
         <div class="fact" style="float: right;border: 1px black solid ;width:50%;color:white;background:#4682B4; text-align: center;border-radius: 25px;">
          <br/>
         <h4>** Emergency Delivery system</h4><br/>
         </div>
         <br/>
        </div>
        </div>


 

      <!--Signup-->
      <div class="content2" style=" margin-top: 200px; height: 600px; ">
    <div class="signup2" style="float: left;" id="signup" ><script type="text/javascript" onfocus="document.getElementByID('signup').style.width='100px';" ></script>
    <form class="login" action="" method="POST">

    <h1><a href="login.php" style="color: black;">LoGin</a></h1>
    <input  type="text" name="username"  placeholder="username" required>
    <br/>
    <br/>
       
        <input  type="password" name="password" placeholder="password" required>
        <BR/>
        <BR/>

        <button name="submit1" style="
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



     <!--search tool-->
     <div style="float: right;border: 2px black solid;width: 50%; text-align: center;height: 100%;background-image: url('images/homepageback.jpg');background-repeat: no-repeat; ">
      <h2 style="margin-top:20px;">Use this Search tool to search medicine</h2>
     <BUTTON style="background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  margin-top: 150px;
  margin-left: 60px;  
  font-size: 16px;
  cursor: pointer;
  width: 500px;
  display: block;"><h1><a href="tempuserlogin.php" style="color: white;">Search Medicine //__\\</h1></BUTTON>
     </div>
   </div>
     





<?php
    if(isset($_POST['submit1'])){
      include 'connector.php';
       $username=$_POST['username'];
       $pass=$_POST['password'];

       $sql="select password from customer where email='$username';";
       $result=mysqli_query($conn,$sql);

       $count=0;
       while($row=mysqli_fetch_assoc($result)){
        $count++;
         $passw=$row['password'];

         $passw=base64_decode($passw);

         if($pass==$passw){
          $SESSION['username']=$username;
               echo "<script>alert('HURRAH');</script>";
                    
          }
         else{
                echo "<script>alert('Incorrect username or password');</script>";
        }

     }
     if($count==0){
              echo "<script>alert('UserName doesnot Exist');</script>";

     }
     }  
     ?>





<!--Official partners-->


     <div class="partners" style="margin-top: 200px;">
      <h1 style="text-align: center; color: black">Our partners</h1>
        <img class="nyslides" src="images/square.JPG" style="height: 150px; margin-right: 30px;"> 
        <img class="nyslides" src="images/bex.JPG" style="height: 150px;margin-right: 25px;"> 
        <img class="nyslides" src="images/incepta.JPG" style="height: 150px;margin-right: 25px;"> 
         <img class="nyslides" src="images/reneta.JPG" style="height: 150px;margin-right: 25px;"> 
         <img class="nyslides" src="images/gsk.JPG" style="height: 150px;margin-right: 25px;"> 
     </div>

  </body>
</html>
