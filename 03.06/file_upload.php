<?php
var_dump($_POST);

$target_dir = __DIR__ . "/uploads/";
$source_path = $_FILES["uploaded_file"]["tmp_name"];

$file_nr = 0;
do{
    $file_nr++;
    $target_path = $target_dir . $file_nr . "jpeg";
}while(file_exists($target_path));


move_uploaded_file($source_path, $target_path);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <div class="form">
        <form action="" method="post" enctype="multipart/form-data">

            <input type="text" value="file to be uploaded" >

            <input type="file" name="uploaded_file">

            <input type="submit" value="Upload file!">
        </form>
    </div>
</body>
</html>