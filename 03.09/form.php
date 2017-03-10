<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <h1>Nice form</h1>
    <label>
    How much?<br><input type="number" min="0" max="10000" value="1000" required autofocus><br>
    </label>
    <label>
    Why do you need it? <br><input type="text" name="why" pattern={.10,} placeholder="I need it to buy a flower" required><br>
    </label>
    <label>
    Email <br><input type="email" name="email" required><br>
    </label>
    <label>
    <textarea rows="6" cols="10" name="message">Message</textarea><br>
    </label>
    <input type="submit" value="Submit">
    <hr>
    <svg version="1.1" width="100" height="100">
  <circle cx="50" cy="50" r="40" stroke="green" stroke-width="5" fill="yellow" />
</svg>
</body>
</html>