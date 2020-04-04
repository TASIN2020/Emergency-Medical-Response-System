
<?php
 session_start();
  $username="";
    $pid=0;
    $name="";
  if(isset($_GET['username'])){
    include 'connector.php';
    $username=$_GET['username'];
   $_SESSION['username']=$username;

   $sql="select pid,name from pharmacy where email='$username';";
   
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
    $pid=$row['pid'];
     $name=$row['name'];
   }
  }
   if(isset($_SESSION['username'])){
    include 'connector.php';
    $username=$_SESSION['username'];
  $sql="select pid,name from pharmacy where email='$username';";
   
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
    $pid=$row['pid'];
     $name=$row['name'];
   }
  }

 
?>
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
  

<div class="functions" style="float: right;color: #4682B4;">
<?php
  echo"<i><h2 style='text-align: center;'>$name</h2></i>"
?>  
</div>
   <div class="heading" >
     <a href="index.php"> <img src="images/logo.JPG" alt="" height="70px" width="90 px" style="text-align: center;"></a>
      <h1  style="text-align: center;color: #4682B4;"><i>  MediStore  
               <h6>A response to emergency medical need</h6>
</i></h1>
      
  </div>

  </head>






  <body>
    


     <!--Nav Bar-->
     <nav class="navbar navbar-expand-lg " style="background:#ADD8E6; ">
       <a class="navbar-brand" href="#">Navbar</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
             <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">Link</a>
           </li>
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Dropdown
             </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="#">Action</a>
               <a class="dropdown-item" href="#">Another action</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="#">Something else here</a>
             </div>
           </li>
           <li class="nav-item">
             <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
           </li>
         </ul>
        <form class="form-inline my-2 my-lg-0" method="POST" action="">
            <BUTTON style=' 
  background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  margin-left: 175px;
  width: 150px;
  display: block;
'  name="logout">Logout</BUTTON>
         </form>
       </div>
     </nav>
</div>


<?php
    if(isset($_POST['logout'])){
      include 'connector.php';
      
    session_destroy();
    unset($_SESSION['username']);
    header('location:index.php');
}
      ?>
    
      <div >
<div class="image" style="background-image: url('images/Pharmacy.jpg');height: 500px; width:60%;background-repeat: no-repeat;border:1px black solid;float: left; ">
  
</div>
<div style=" float: right;height: 500px;border: 1px black solid;width: 40%;text-align: center;">
<?php
  echo"<i><h2 style='text-align: center;margin-top:200px;font-size:60px;color:#4682B4;'>$name</h2></i>"
?> 
</div>
</div>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="Medicines" style="border: 1px black solid;margin-top: 20px;height: 120px; ">
  <h3 style="text-align: center;">ADD NEW MEDICINE</h3>
   <button style="background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin-left: 30px;
  cursor: pointer;
 
  display: block;"><a href="addnewmedicinephr.php" style="color: white;">ADD NEW Medicine</button>
</div>
<br/>

<div class="Medicines2" style="border: 1px black solid;margin-top: 20px;height: 120px;">
  

  <h3 style="text-align: center;color: black;">ADD Stock</h3>
   <button style="background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin-left: 30px;
  cursor: pointer;
 
  display: block;"><a href="updatestock.php" style="color: white;">Update Stock</button>
</div>




 <h3 style="text-align: center;color: black;">Transactions</h3>
   <button style="background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  font-size: 16px;
  margin-left: 30px;
  cursor: pointer;
 
  display: block;"><a href="purchase.php" style="color: white;">Purchased Goods</button>
</div>


    


