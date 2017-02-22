<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSS transformations</title>
    <style>

    #wrapper{
        position: relative;
    }

    #box{
        border: 1px solid red;
        padding: 1em;
        width: 200px;
    }

    #box{
        position: absolute;
        transform: perspective(100px) translateZ(65px);


    }
    </style>
</head>
<body>
    <div id="wrapper">
        <div id="box">
            This is the content of the box.
        </div>
    </div>
    This is some text. This is some text. This is some text. This is some text.This is some text. This is some text.
</body>
</html>