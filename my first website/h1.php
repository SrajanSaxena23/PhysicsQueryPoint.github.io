<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <form action="h1.php" method="post">
    <input type="file" name="uploadile">
    <input type="submit" value = "upload">
</form>
</body>
</html>
<?php
error_reporting(0);
$filename = $_FILES['uploadfile']['name'];
$tmpname = $_FILES['uploadfile']['tmp_name'];
$folder = "image2/".$filename;
move_uploaded_file($tmpname , $folder);
echo $folder;
echo 
`<img src="$folder" height="100" width="100"/>`;
?>