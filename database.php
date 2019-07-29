     
      
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="test";

$conn=new mysqli($servername,$username,$password,$dbname);

if(!$conn){
    die("connection failed".mysqli_error());
}else{
    //echo "connected successfully";
    }
?>