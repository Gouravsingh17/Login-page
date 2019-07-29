<?php include_once('database.php');?>
<!------------------------------------------------------------start Login ------------------------------------------------------------>
<?php
// Login page
session_start();
if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];
$password = md5($password);

     

        $query =  mysqli_query($conn,"SELECT * FROM login WHERE username='$username' AND password = '$password' ");
        $rows = mysqli_num_rows($query);

if($rows == 1){
            $_SESSION['user_name']=$password;
            header("Location:dashboard.php");
                    }
			else
				{
				header("Location:index.php?error=1");
                     }
			mysqli_close($conn);

}
?>