<?php

$iterator = 0;

/*while($iterator < 10){
    $iterator++;
    echo $iterator . "<br>";
}*/


do {
    $iterator++;
    echo $iterator . "<br>";
} while($iterator < 10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
$messages = array(
  'error' => array(
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ),
  'warning' => array(
    'This is your first warning',
    'This is your final warning'
  ),
  'success' => array(
    'Finally, something was successful.'
  )
);
?>

<hr>
<style>
.error{
    background: yellow;
}
.warning{
    background: red;
}
.success{
    background: green;
}

</style>
<?php
function do_something_risky() {
  // do the risky stuff

  // return new messages
  return array(
    'error' => array(
      'I knew this would happen!',
      'This always happens.'
    ),
    'warning' => array(
      'You should fix this before proceeding'
    ),
    'success' => array()
  );
}

$new_messages = do_something_risky();
$merged_messages = array_merge_recursive($messages, $new_messages);


?>

<div class="message">
    <?php foreach ($merged_messages as $value) : ?>
        <div class= "error">
            <?php foreach ($merged_messages["error"] as $message) : ?>
                <?php echo $message . "<br>"; ?>
            <?php endforeach; ?>
        </div>

        <div class="warning">
            <?php foreach ($merged_messages["warning"] as $message) : ?>
                <?php echo $message . "<br>"; ?>
            <?php endforeach; ?>
        </div>

        <div class="success">
            <?php foreach ($merged_messages["success"] as $message) : ?>
                <?php echo $message; ?>
            <?php endforeach; ?>
        </div>

        <?php break; ?>

    <?php endforeach; ?>
</div>

<hr>

</body>
</html>