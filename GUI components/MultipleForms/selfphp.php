<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>php Self form</h1>
    <form action="" method="post">

        <input type="text" name="name" id=""><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $name=$_POST['name'];

            echo "user Name is: <b> $name</b>";
            echo "<br>You can use this form again to enter the a new name";
        }
    ?>
</body>
</html>