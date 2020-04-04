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
         <form class="form-inline my-2 my-lg-0">
           <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
       </div>
     </nav>
</div>




<!--FORM-->
<div class="signupform" style=" width: 500px;
  border: 1px black solid;
  background-color: #ADD8E6;
  margin-left: 30%;
  margin-top: 5%;
  text-align: center; 
">
 <h1>Add Medicine</h1>

   <form action="" method="POST" enctype="multipart/form-data"> 
    <h3>Enter Medicine Name</h3><br/>
    <input type="text" name="name" id="n" name="name" onkeyup="this.value=this.value.toUpperCase();"  required placeholder="Medicine name" >
    <br/>
    <br/>
   
    <h3>Enter Medicine Generic</h3><br/> 
    <input type="text" name="genericname" id="n"  onkeyup="this.value=this.value.toUpperCase();"  required placeholder="generic name" >
    <br/>
    <br/>
    <h3>Enter Pharmaceutical</h3><br/> 
 
      <select name="pharmaceutical" >
      <option value="" readonly>Choose</option>
      <option value="SQUARE">SQUARE</option>
      <option value="INCEPTA">INCEPTA</option>
      <option value="RENETA">RENETA</option>
      <option value="SANOFI">SANOFI</option>      
<option value="BEXIMCO">BEXIMCO</option>   
            
    </select>
    <br/>
    <br/>
    <h3>Enter Price(per piece) </h3>
    <input type="text" name="price">

    <br/>
    <br/><br/>
    <h3>Add Picture of the medicine</h3>
     <input  type="file" name="fileToUpload"  required >
    <br/>
       <button name="Add">Add Medicine</button>

    
</form>

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

    <?php
      # code...
    if (isset($_POST['Add'])) {
      # code...
    include 'connector.php';
    $name=$_POST['name'];  
    $pharmaceutical=$_POST['pharmaceutical'];
    $generic=$_POST['genericname'];
    $price=$_POST['price'];
 $target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$file_name=$_FILES["fileToUpload"]["name"];
echo $_FILES["fileToUpload"]["size"];
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      
 $sql="insert into medicines(name,generic,pharmaceutical,price,picture) values('$name','$generic','$pharmaceutical','$price','$file_name');";
     if(mysqli_query($conn,$sql)){
     echo '<script type="text/javascript"> alert("Submit successfully");</script>';
     echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
   }
     else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
}


    
 
  

?>


  
</body>
</html>

