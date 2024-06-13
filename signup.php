<?php
$conn=new mysqli("localhost",'root','','Sonix');
$email=$_POST["Email"];
if($email!=null){
    echo "Not found";
}
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['Fullname'];
echo "$email $username $password $name";

$sql="select * from user where Email='$email' and Username='$username'";
$result=mysqli_query($conn,$sql);
if($row=mysqli_num_rows($result)==0){
    // echo "User not registered";
    $sql1="insert into user values('$email','$password','$name','$username')";
    
    $result1=mysqli_query($conn,$sql1);
    header("location:index.php");
}else{
    echo "<h1>User already Regitered</h1>";
}
?>