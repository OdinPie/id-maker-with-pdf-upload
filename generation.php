<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $dob = $_POST["dob"];
    $course = $_POST["course"];
    $img = $_FILES["img"]["name"];
    $cv = $_FILES["cv"]["name"];
    $temp_img = $_FILES["img"]["tmp_name"];
    $temp_cv = $_FILES["cv"]["tmp_name"];

    move_uploaded_file($temp_img, 'upload/'.$img);
    move_uploaded_file($temp_cv, 'upload/'.$cv);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>ID Creation</title>
</head>
<body>
<h2 style="text-align:center; color:blue">Your ID Card</h1><br>
    <div style=" display:flex; justify-content:center; align-items: center; gap:20px">
        <div class="contaner" style="">
                <div class="inner-container">
                    <img src="upload/<?php if(isset($img)){ echo $img; } ?>" alt="">
                    <div>
                        <h3><?php if(isset($name)){ echo $name; } ?></h3>
                        <h4>Course:<?php if(isset($course)){ echo $course; } ?></h4>
                        <p>Email:<?php if(isset($email)){ echo $email; } ?></p>
                        <p>Date of birth:<?php if(isset($dob)){ echo $dob; } ?></p>
                    </div>
                </div>
            </div>

            <iframe src="upload/<?php if(isset($cv)){ echo $cv; } ?>" height="600" width="400" frameborder="0"></iframe>
    </div>
    
</body>
</html>