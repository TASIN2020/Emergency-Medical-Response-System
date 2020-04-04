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
    echo $_SESSION['username'];
     $name=$row['name'];
     $_SESSION['pid']=$pid;
   }
  }
   if(isset($_SESSION['username'])){
    include 'connector.php';
    $username=$_SESSION['username'];
  $sql="select pid,name from pharmacy where email='$username';";
   
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
    $pid=$row['pid'];
    $_SESSION['pid']=$pid;
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
       </div>
     </nav>


<?php
    if(isset($_POST['logout'])){
      include 'connector.php';
      
    session_destroy();
    unset($_SESSION['username']);
    header('location:index.php');
}
      ?>
<h2 style="text-align: center;margin-top: 30px;width: -50px;"><i>Purchase List</i></h2>
  
<form method="POST" action="">
<button style="background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
 
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  height: 50px;
  display: block;" name="showall">Show All</button>
</form>
<div class="displaytable">
<div style="float: right;">
  <form method="POST" action="">
    <input type="date" name="date" >
<button style="background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
 
  text-decoration: none;
  font-size: 16px;
  cursor: pointer;
  height: 50px;
  display: block;"
 
name="showbydate">Filter by date</button>
</form>
 </div>
<div class="displaytable">
<?php

   if(isset($_POST['showall'])){
    include 'connector.php';
    echo "<table style='width:100%;'>";
   echo "<tr style='border:1px black solid; '>";
  
   echo "<th ><h4><em>Customer id</em></h4></th>";
    echo  "<th><h4><em>Customer name</em></h4></th>";
   echo "<th><h4><em>Medicine id</em></h4></th>";
   echo "<th><h4><em>Medicine Name</em></h4></th>";
    echo "<th><h4><em>Quantity </em></h4></th>";
     echo "<th><h4><em>Price name</em></h4></th>";
      echo "<th><h4><em>Method</em></h4></th>";
     echo "<th><h4><em>Date</em></h4></th>";
   echo "</tr>";
   $count=0;
    $pid=$_SESSION['pid'];
   $sql="select customer.id ,customer.fname,medicines.mid,medicines.name ,purchase.quantity,purchase.price,purchase.method,date(purchase.date) as date from purchase INNER JOIN customer on purchase.cid=customer.id INNER JOIN medicines on medicines.mid=purchase.mid  where pid =$pid order by date DESC";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
     $count++;
     echo "<tr style='border:1px black solid; height:100px;'>";
     echo  "<td><h4>".$row['id']."</h4></td>";
     echo  "<td><h4>".$row['fname']."</h4></td>";
      echo  "<td><h4>".$row['mid']."</h4></td>";
       echo  "<td><h4>".$row['name']."</h4></td>";
        echo  "<td><h4>".$row['quantity']."</h4></td>";
         echo  "<td><h4>".$row['price']."</h4></td>";
         echo  "<td><h4>".$row['method']."</h4></td>";
            echo  "<td><h4>".$row['date']."</h4></td>"; 
     echo "</tr>";

   }
   echo "</table>";
  if($count==0){
    echo "<h2>Sorry No Items to be displayed</h2>";
  }
   }
  
?>
<?php

   if(isset($_POST['showbydate'])){
    include 'connector.php';
    $date=$_POST['date'];
    echo "<table style='width:100%;'>";
   echo "<tr style='border:1px black solid; '>";
  
   echo "<th ><h4><em>Customer id</em></h4></th>";
    echo  "<th><h4><em>Customer name</em></h4></th>";
   echo "<th><h4><em>Medicine id</em></h4></th>";
   echo "<th><h4><em>Medicine Name</em></h4></th>";
    echo "<th><h4><em>Quantity </em></h4></th>";
     echo "<th><h4><em>Price name</em></h4></th>";
      echo "<th><h4><em>Method</em></h4></th>";
     echo "<th><h4><em>Date</em></h4></th>";
   echo "</tr>";
   $count=0;
 
   $sql="select customer.id ,customer.fname,medicines.mid,medicines.name ,purchase.quantity,purchase.price,purchase.method,date(purchase.date) as date from purchase INNER JOIN customer on purchase.cid=customer.id INNER JOIN medicines on medicines.mid=purchase.mid  where pid =$pid and date(purchase.date) ='$date'";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
     $count++;
     echo "<tr style='border:1px black solid; height:100px;'>";
     echo  "<td><h4>".$row['id']."</h4></td>";
     echo  "<td><h4>".$row['fname']."</h4></td>";
      echo  "<td><h4>".$row['mid']."</h4></td>";
       echo  "<td><h4>".$row['name']."</h4></td>";
        echo  "<td><h4>".$row['quantity']."</h4></td>";
         echo  "<td><h4>".$row['price']."</h4></td>";
         echo  "<td><h4>".$row['method']."</h4></td>";
            echo  "<td><h4>".$row['date']."</h4></td>"; 
     echo "</tr>";

   }
   echo "</table>";
  if($count==0){
    echo "<h2>Sorry No Items to be displayed</h2>";
  }
   }
  
?>
</div>

