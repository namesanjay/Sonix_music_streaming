<?php
include("connection.php");
if($conn)
echo "Successful";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select Username,password from user where Username='$username'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    $rows=mysqli_fetch_assoc($result);
    // echo $rows['password'];
    if($rows['password']==$password)
    header("location:index.php");
    else{
        header("location:login.html");
        echo "<script>alert('Password incorrect')</script>";
    }
}
// header("location:index.php");
?>