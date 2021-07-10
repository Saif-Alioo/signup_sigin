<?php
include("connect.php");


$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_Post['cpassword'];
$file=$_FILES['name']['file'];
$temp_name=$_POST['temp_name']['file'];
$type=$_POST['type'];

if($password==$cpassword){
	 move_uploaded_file($temp_name,"../uplodes/$file");
  $insert =mysqli_query($connect,"INSERT INTO user (name,email,password,photo,type,status,vote) VALUES ('$name','$email','$password','$file','$type',0,0)");
 
if($insert){
      echo '
      <script>
          alert("Registration succesfull!!");
          window.location="../index.html";
      </script>
      ';
  }
  else{
    echo '
    <script>
        alert("Some Error Occured!");
        window.location="../";
    </script>
    ';
  }
}else{
	echo '
    <script>
        alert("Conform password is not matching with password::");
        window.location="../index.html";
    </script>
    ';
}
  
?>