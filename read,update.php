<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="read,update.php" method="post" enctype='multipart/form-data'>
        song:<input type="text" name="title"/><br>
        audio:<input type="file" name="audio"><br>
        image:<input type="file" name="image"><br>
        <button type="submit" name="submit">Upload</button>
    </form>
    <?php
    $conn=new mysqli('localhost','root','','test');
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $audioname=$_FILES['audio']['name'];
        $audiotemp=$_FILES['audio']['tmp_name'];
        $FileType=$_FILES['audio']['type'];
        $FileError=$_FILES['audio']['error'];
        $fileExt=explode('.',$audioname);
        $fileActualExt=strtolower(end($fileExt));
        $allowed=array('mp3','m4p','mpc');
        $audioNameNew;
        if(in_array($fileActualExt,$allowed)){
            if($FileError===0){
            $audioNameNew=uniqid('',true).".".$fileActualExt;
            $destination='audio/'.$audioNameNew;
            move_uploaded_file($audiotemp,$destination);
            }else{
                echo"There was error in audio uploading your file";
                exit();
            }


            $imageNameNew;
            $imagename=$_FILES['image']['name'];
            $imagetemp=$_FILES['image']['tmp_name'];
            $FileType=$_FILES['image']['type'];
            $FileError=$_FILES['image']['error'];
            $fileExt=explode('.',$imagename);
            $fileActualExt=strtolower(end($fileExt));
            $allowed=array('jpg','jpeg','png');
            if(in_array($fileActualExt,$allowed)){
                if($FileError===0){
                $imageNameNew=uniqid('',true).".".$fileActualExt;
                $destination='image/'.$imageNameNew;
                move_uploaded_file($imagetemp,$destination);
                }else{
                    echo"There was error in image uploading your file";
                    exit();
                }
            $sql="insert into song(title,audio,image) values('$title','$audioNameNew','$imageNameNew')";
            try{
                mysqli_query($conn,$sql);
                echo "Successfully uploaded";
            }
            catch(Exception $e){
                echo $e;
            }
            
            // <audio src="./audio/"></audio>
            mysqli_close($conn);
    }}
}
    ?>
</body>
</html>