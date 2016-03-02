<!Doctype HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Form</title>
</head>
<body>
<form action="21.php" method="POST">
    <p>Enter your name</p>
    <input type="text" name="user_name">
    <p>Leave your comment</p>
    <textarea name="user_message" cols="30" rows="6"></textarea>
    <br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit'])) {var_dump($_POST);}

?>

</body>
</html>




