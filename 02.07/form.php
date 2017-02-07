<?php

function print_radio($input_name, $values, $selected_value){
    foreach($values as $value){
        ?> <input type="radio" value="<?php echo $value; ?>" name="<?php echo $input_name; ?>">
        <?php if($value == $selected_value) : ?>
        checked
        <?php endif; ?>
        >
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Radio buttons</title>
</head>
<body>

    <h1>Form</h1>

  <form>
  <input type="radio" name="location" value="1" id="from-eu"/><label for="from-eu">1</label><br>
  <input type="radio" name="location" value="2" id="from-noneu"/> <label for="from-noneu">2</label><br>
  <input type="submit" value="Submit"/>
</form>

</body>
</html>


