<?php 

include __DIR__ . '/functions.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsLetter</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="mail" id="">
        <button type="submit">Send</button>
    </form>

    <p>
        <?php echo $message ?>
    </p>


</body>

</html>