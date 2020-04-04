	<?php
 session_start();
  $username="";
    $pid=0;

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
  <?php
  echo"<h2 style='text-align: center;float:right;color: #4682B4;'>$name</h2>"
?>  
   <div class="heading" >
     <a href="index.php"> <img src="images/logo.JPG" alt="" height="70px" width="90 px" style="text-align: center;"></a>
      <h1  style="text-align: center;color: #4682B4;"><i>  MediStore  
               <h6>A response to emergency medical need</h6>
</i></h1>
      

  </div>
  </head>






  <body>
    


     <!--Nav Bar-->
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


<div class="signupform" style=" 
  border: 1px black solid;
  background-color: #ADD8E6;
  height: 200px;
  margin-top: 5%;
  text-align: center; 
">
<h2><i>Update Stock Medicine</i></h2>
<div class="showall" style="float: left;">

<form method="POST" action="">
<button name="show">Show All Medicines</button>
</form>
</div>
<div style="float:right;">
<form method="POST" action="">
    <h5>Filter By name</h5><br/>
    <input type="text" name="name" id="n" name="name" onkeyup="this.value=this.value.toUpperCase();"  required placeholder="Medicine name" >
    <br/>
    <br/>
  
<button name="showf1">Filter By name</button>
</form>
 </div>
</div>
    <script type="text/javascript">
          function myFunc(a){
        
        var c=a.value.toUpperCase();
        //alert(c);
        a=c;
        return c;

 
    }

 
   </script>

   
<div class="displaytable" style="margin-top: 20px;" >
<?php

   if(isset($_POST['show'])){
    include 'connector.php';
;
    echo "<table style='border:1px black solid;' width=100%> ";
   echo "<tr style='border:1px black solid;'>";
  
   echo "<th><h2><em> Name</em></h2></th>";
   echo  "<th><h2><em> Generic</em></h2></th>";
   echo "<th><h2><em>Stock</em></h2></th>";
   echo "<th><h2><em>Pharmaceutical</em></h2></th>";
      echo "<th><h2><em>Price</em></h2></th>";
   echo "<th><h2><em>Update Stock</em></h2></th>";
   echo "</tr>";
   $count=0;
 
   $sql="select medicines.price,medicines.mid,medicines.name ,medicines.generic,medicines.pharmaceutical ,stock.stock from stock inner join medicines on stock.mid=medicines.mid and stock INNER join pharmacy on stock.pid=pharmacy.pid where stock.pid=$pid ;";
   $result=mysqli_query($conn,$sql);
   $mid=0;
   while($row=mysqli_fetch_assoc($result)){
     $count++;
     echo "<form method='POST' action=''>";
     echo "<tr  data-aos='fade-up-right'>";
     echo  "<td ><h4>".$row['name']."</h4></td>";
     echo  "<td><h4>".$row['generic']."</h4></td>";
     echo  "<td><h4>".$row['stock']."</h4></td>";
     echo  "<td><h4>".$row['pharmaceutical']."</h4></td>";
       echo  "<td><h4>".$row['price']."</h4></td>";
  
     $_SESSION['mid']=$row['mid'];
   
     $mid=$_SESSION['mid'];
     echo  "<td><input type='hidden' name='mid' value='$mid'>
            <input type='number' name='stock'>
            <button  name='update'>Update</button></form></td>";
    
 

     echo "</tr>";

   }
   echo "</table>";
  if($count==0){
    echo "<h2>Sorry No Items to be displayed</h2>";
  }
   
  }
?>



<?php
     if(isset($_POST['update'])){
   include 'connector.php';
   $stock=$_POST['stock'];
   $mid=$_POST['mid']; 
    
   $sql="update stock set stock.stock='$stock' where stock.mid='$mid' and pid=$pid;";
   if(mysqli_query($conn,$sql)){
     echo '<script type="text/javascript"> alert("Submit successfully");</script>';
   };
    
  }
?>



<?php

   if(isset($_POST['showf1'])){
    include 'connector.php';
   $name=$_POST['name'];
    echo "<table style='border:1px black solid;' width=100%> ";
   echo "<tr style='border:1px black solid;'>";
  
   echo "<th><h2><em>Medicine Name</em></h2></th>";
   echo  "<th><h2><em>Medicine Generic</em></h2></th>";
   echo "<th><h2><em>Stock</em></h2></th>";
   echo "<th><h2><em>Pharmaceutical</em></h2></th>";
    echo "<th><h2><em>Price</em></h2></th>";
    echo "<th><h2><em>Update Stock</em></h2></th>";
   echo "</tr>";
   $count=0;

   $sql="select medicines.price,medicines.mid,medicines.name ,medicines.generic,medicines.pharmaceutical ,stock.stock from stock inner join medicines on stock.mid=medicines.mid and stock INNER join pharmacy on stock.pid=pharmacy.pid where stock.pid='$pid' and medicines.name='$name' ;";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
     $count++;
      echo "<form method='POST' action=''>";
     echo "<tr  data-aos='fade-up-right'>";
     echo  "<td><h4>".$row['name']."</h4></td>";
     echo  "<td><h4>".$row['generic']."</h4></td>";
     echo  "<td><h4>".$row['stock']."</h4></td>";
     echo  "<td><h4>".$row['pharmaceutical']."</h4></td>";
      echo  "<td><h4>".$row['price']."</h4></td>";
     $_SESSION['mid']=$row['mid'];
     echo  "<td>
            <input type='number' name='stock'><button name='update'>Update</button></form></td>";
    
 

     echo "</tr>";

   }
   echo "</table>";
  if($count==0){
    echo "<h2>Sorry No Items to be displayed</h2>";
  }
   }
  
?>
</div>