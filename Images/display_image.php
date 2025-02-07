<?php
$imagepath="/Code/Images/php.png";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Displaying Image in PHP</h1>
        <img src="<?php echo "$imagepath";?>" alt="Sample Image" width="300">
        <img src="<?php echo "$imagepath"; ?>" alt="">
</body>
</html>