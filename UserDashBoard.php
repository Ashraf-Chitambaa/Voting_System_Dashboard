<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBORD</title>
</head>
<body>
    <?php 
        $username = $_POST['username'];
        $password = $_POST['password'];
    ?>
    <h1><?php echo 'Logged In as '.$username?></h1>
</body>
</html>
