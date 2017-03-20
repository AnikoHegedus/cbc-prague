<?php

if(!empty($_POST["save"])){
    $data = array(
        $_POST["first_name"],
        $_POST["last_name"],
        $_POST["YoB"],
        $_POST["occupation"],
    );
}

// open the CSV file
$fh = fopen("test.csv", "r");
$records = [];

//read through all the lines and parse them as CSV
while($line = fgetcsv($fh, 0, ";", "'")){
    // build the array
    $records[] = $line;
}

var_dump($records);
// close the file
fclose($fh);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSV file</title>
</head>
<body>
    <form action="" method="post">
        First name:<input type="text" name="firstname"><br>
        Last name: <input type="text" name="lastname"><br>
        YoB: <input type="text" name="YoB"><br>
        Occupation: <input type="text" name="occupation"><br>
        <input type="submit" value="save">
    </form>
</body>
</html>