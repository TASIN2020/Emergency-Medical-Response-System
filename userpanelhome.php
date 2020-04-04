
<?php
 session_start();
  $username="";
    $cid=0;
    $area="";
    $fname="";
  if(isset($_GET['username'])){
    include 'connector.php';
    $username=$_GET['username'];
   $_SESSION['username']=$username;

   $sql="select area,id,fname from customer where email='$username';";
   
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
    $cid=$row['id'];
     $name=$row['fname'];
      $area=$row['area'];
        $_SESSION['area']=$area;
   }
  }

   if(isset($_SESSION['username'])){
    include 'connector.php';
    $username=$_SESSION['username'];

   $sql="select area,id,fname from customer where email='$username';";
   
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
    $cid=$row['id'];
     $fname=$row['fname'];
       $area=$row['area'];
         $_SESSION['area']=$area;
   }
  }

 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  
  <head>
    <div class="functions" style=" float: right; color: #4682B4; margin-right: 20px; ">
<?php
  echo"<h2 style='text-align: center;'>HELLO ".$fname."</h2>"
?>  

</div>
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


<!--contenta-->

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

<h2><i>Search Medicines</i></h2>
<div class="showall" style="float: left;">
<form method="POST" action="">
<button style=' 
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
' name="show">Show All Medicines</button>
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

      document.getElementById('phone1').addEventListener("keyup",p);
      function p(){
        var pi=document.getElementById('phone1').value;
      if(pi.length<11){
        document.getElementById('h').innerHTML="It should have 11 digits";
      }
      else{
       document.getElementById('h').innerHTML=""; 
      }
  }

   function emailValidation(inputtext){
    var emailExp = "/^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/";
   alert(inputtext);
      if(inputtext.value.match(emailExp)){
    alert('true');
}else{
alert("Change");
inputtext.focus();
alert('false');
}
}
   </script>
<div class="display" style="margin-top: 60px;height: auto;">
<?php
include 'connector.php';
   if(isset($_POST['show'])){
   $array;
   $count=0;
  $counter=0;

   $sql="select * from medicines ";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
     $count++;
    
     
     echo"<div class='item' style='border: 1px black solid;height:500px;text-align: center;'>";
   
       
     $target_dir = "uploads/";
echo '<a target="_blank" href="'.$target_dir . basename($row['picture']).'"><img  style="float: left;height: 500px;border: 1px black solid;" src='.$target_dir . basename($row["picture"]).'></a>';
      echo  "<h4> ID = ".$row['mid']."</h4><br/>";
      $mid=$row['mid'];

      echo  "<h2>".$row['name']."</h2><br/>";
      echo  "<h3> Generic = ".$row['generic']."</h3><br/>";
      echo  "<h4> Price = ".$row['price']." take per piece</h4><br/>";
      
      $sqlr="select pharmacy.name,pharmacy.pid from pharmacy inner join stock on pharmacy.pid=stock.pid where stock.mid='$mid'and pharmacy.area='$area';";
      echo  "<h4> Availaible pharmacies in your Area</h4><br/>";
      $result2=mysqli_query($conn,$sqlr);  
      while($row2=mysqli_fetch_assoc($result2)){
      $counter++;
        
          echo  "<h3 style='float: left;margin-left:150px;'>".$row2['name']."</h3>";
          $pid=$row2['pid'];
        
          $price=$row['price'];
          $mid=$row['mid'];
          $phr_name=$row2['name'];
          $med_name=$row['name'];

      echo'<form method="POST" action="">
          <input style="height: 50px;width: 80px;" type="number" name="quan" placeholder=" pieces">
          
          <input type="hidden" name="hidden_phrid" value='. $pid.'>
          <input type="hidden" name="hidden_price" value='.$price.'>
           <input type="hidden" name="hidden_mid" value='.$mid.'>
            <input type="hidden" name="phr_name" value='.$phr_name.'>
            <input type="hidden" name="med_name" value='.$med_name.'>
          <button name="addtocart">Add To Cart</button>
      </form>
      ' ;
   }
   if($counter==0){
    echo "<h2>Sorry No Pharmacies Available</h2>";
 }
      echo"</div>";
      echo"</br>";

    echo"</br>";
    
   }
   echo "</table>";
  if($count==0){
    echo "<h2>Sorry No Items to be displayed</h2>";
  }
   }
  







 
?>
 <!--ADD TO CART-->
 <?php
  if(isset($_POST['showf1'])){
   $array;
   $count=0;
  $counter=0;
 $name=$_POST['name'];
   $sql="select * from medicines where name='$name' ";
   $result=mysqli_query($conn,$sql);
   while($row=mysqli_fetch_assoc($result)){
     $count++;
    
     
     echo"<div class='item' style='border: 1px black solid;height:400px;text-align: center;'>";
   
       
     $target_dir = "uploads/";
echo '<a target="_blank" href="'.$target_dir . basename($row['picture']).'"><img  style="float: left;height: 400px;border: 1px black solid;" src='.$target_dir . basename($row["picture"]).'></a>';
      echo  "<h4> ID = ".$row['mid']."</h4><br/>";
      echo  "<h2>".$row['name']."</h2><br/>";
      echo  "<h3> Generic = ".$row['generic']."</h3><br/>";
      echo  "<h4> Price = ".$row['price']." take per piece</h4><br/>";
      
      $sqlr="select pharmacy.name,pharmacy.pid from pharmacy inner join stock on pharmacy.pid=stock.pid where stock.mid=4 and pharmacy.area='$area';";
      echo  "<h4> Availaible pharmacies in your Area</h4><br/>";
      $result2=mysqli_query($conn,$sqlr);  
      while($row2=mysqli_fetch_assoc($result2)){
      $counter++;
        
          echo  "<h3 style='float: left;margin-left:150px;'>".$row2['name']."</h3>";
          $pid=$row2['pid'];
        
          $price=$row['price'];
          $mid=$row['mid'];
          $phr_name=$row2['name'];
          $med_name=$row['name'];

      echo'<form method="POST" action="">
          <input style="height: 50px;width: 80px;" type="number" name="quan" placeholder=" pieces">
          
          <input type="hidden" name="hidden_phrid" value='. $pid.'>
          <input type="hidden" name="hidden_price" value='.$price.'>
           <input type="hidden" name="hidden_mid" value='.$mid.'>
            <input type="hidden" name="phr_name" value='.$phr_name.'>
            <input type="hidden" name="med_name" value='.$med_name.'>
          <button name="addtocart">Add To Cart</button>
      </form>
      ' ;
   }
   if($counter==0){
    echo "<h2>Sorry No Pharmacies Available</h2>";
 }
      echo"</div>";
      echo"</br>";

    echo"</br>";
    
   }
   echo "</table>";
  if($count==0){
    echo "<h2>Sorry No Items to be displayed</h2>";
  }
   }
  

 ?>
<?php

 if (isset($_POST['addtocart'])) {
      # code...
    include 'connector.php';
   $pid=$_POST['hidden_phrid'];
   $_SESSION['pid']=$pid;
   $price=$_POST['hidden_price'];
   $_SESSION['price']=$price;
   $phr_name=$_POST['phr_name'];
   $mid=$_POST['hidden_mid'];
   $_SESSION['mid']=$mid;
    $med_name=$_POST['med_name'];
   $quantity=$_POST['quan'];
   $_SESSION['quan']=$quantity;
   $item=array(
        'pid' => $pid,
        'mid' => $mid,
        'cid' => $cid,
        'custname' => $fname,
        'phr_name' => $phr_name,
         'med_name' => $med_name,
        'price' => $price,
        'quantity' => $quantity,


   );
    $total=$item['quantity']*$item['price'];
     
    $_SESSION['shoppingcart']=$item;
     $_SESSION['total']=$total;
     echo "<br/>";
   echo"
   <div style='width: 100%;height: 480px; text-align: center;background-image: url(images/addtocart.jpg);background-repeat: no-repeat;'>
   <h2><i>Your Item List</i></h2>
   <h3>Customer Name = $item[custname]</h3>
   <h3>pharmacy Name = $item[phr_name]</h3>
   <h3>Medicine Name = $item[med_name]</h3>
   <h3>Quantity = $item[quantity] pieces </h3>
   <h3>Price per piece = $item[price] taka</h3>
   <h3>Total = $total taka</h2>

   <h2><i></i></h2>
  

   ";

   echo"
            <form method='POST' action=''>
       <button style=' background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
  float: right;
  text-align: center;
  
  font-size: 16px;

  display: block;' name='purchasebycard'>Purchase By Card</button>
</form>
  <form method='POST' action=''>
       <button
       style=' background-color: #4682B4; /* Green */
  border: 1px solid green;
  color: white;
  padding: 15px 32px;
    float: right;

  text-align: center;
 
  font-size: 16px;
 
  
  display: block;'>Purchase By Cash On Delivery</button>
</form>
        </div>
   ";
 

}

?>
<?php
if (isset($_POST['purchasebycard'])) {
      # code...
      include'connector.php';
        echo"
        <img src='images/credit card.png' style='float: right;margin-right: 90px;'>
        <div style=' width: 500px;
  border: 1px black solid;
  background-color: #ADD8E6;
  margin-left: 10%;
  margin-top: 5%;
  text-align: center; 
'>
         <form method='post' action=''>
         <h3>Add Card Details</h3>

         <input type='number' name='card_number' placeholder='card_number'><br/>
         <input type='number' name='cvcnumber' placeholder='cvcnumber'><br/>
         <input type='text' name='bankname' placeholder='bankname'  onkeyup='this.value=this.value.toUpperCase();'><br/>
         <button  style=' 
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
' name='submitcard'>Submit</button>
         </form> 
         </div> 
        ";
        
    }
?>

<?php
if (isset($_POST['submitcard'])) {
      # code...
      include'connector.php';

    $cardnumber=$_POST['card_number'];
    $cvcnumber=$_POST['cvcnumber'];
    $bankname=$_POST['bankname'];
   
      $sql3="insert into card_info values('$cid','$cvcnumber','$bankname','$cardnumber')";
     if(mysqli_query($conn,$sql3)){
         $pid=$_SESSION['pid'];
         $mid=$_SESSION['mid'];
         $price=$_SESSION['total'];
         $quantity=$_SESSION['quan'];   
       $sql5="insert into purchase(cid,pid,mid,quantity,price,method) values('$cid','$pid',$mid,'$quantity','$price','By Card')";              
        if(mysqli_query($conn,$sql5)){ 
         echo "
         <div style='height: 500px;text-align: center;'>
          <h2><i>Delivery man is coming</i></h2>
             <img src='images/delivermanpic.jpg' height='500px;'>
         </div>
         ";

    };
    }
    else{
    echo"invalid card information";
  }
  }
?>

</div>
</div>
</body>
</html>