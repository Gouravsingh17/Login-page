


<?php include_once('database.php');?>

<!doctype html>
<html>
<head>
  
  <title>Login page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body>
  <div id="frm">
  <form action="process.php" method="POST">
    <p>
      <label>username:</label>
      <input type="text" name="username" id="user"/>
    </p>
    <p>
      <label>password:</label>
      <input type="password" name="password" id="password"/>
    </p>
    <p>
      
      <input type="submit" name="submit" id="btn" value="Login" />
    </p>

  </form>
</div>
<?php if(isset($_GET['error'])==true){
  echo '<font color="#FF0000"> <p style="text-align:center"> Password Not Match Try Again </p> <font>';
  } ?>
</body>

<!-- ------------------------------------------------------------------------------------------------------------------------------------>





<!-- Login Query open -->
<?php
    if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
                        $password = md5($password);
      $stmt=$conn->prepare("UPDATE registration set username=?,password=?  ");
      $stmt->bind_param("ss",$username,$password);  
      $ins=$stmt->execute();
      if($ins == true){
          //$_SESSION['user_name']=$user;
//header('Location: index.html');
echo "<script>window.location.href=('index.php')</script>";
      }
    else
    {
      echo "Your Username and Password is Wrong",mysqli_error($conn);
    }
         }
?>  



</html>

<!--  -->

