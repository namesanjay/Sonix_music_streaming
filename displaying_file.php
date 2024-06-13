<?php   
    $conn=new mysqli('localhost','root','','test');
    $sql="Select * from song";
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
        $filename=$row['image'];
        // echo $filename;
        // echo $filename;
        echo "<img src='./image/$filename' height='400px' width='400px'/>";
        $filename=$row['audio'];
        // echo $filename;
        $title=$row['title'];
       echo "<audio controls>
        <source src='./audio/$filename' type='audio/mp3'><br>
      </audio>";
      echo "<button><a href='audio/$filename' download='$title'>Download sound</a></button>";
        // echo "<img src='./upload/$row['image'] height='900px' width='900px';/>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>