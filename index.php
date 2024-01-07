<?php include('config.php'); ?>
<?php session_start(); ob_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Login and Logout Operations</title>
</head>
<body>
    <?php
        $go = @$_GET['go'];
        switch($go) {
            case 'login':
                include 'login.php';
            break;

            case 'logout':
                include 'logout.php';
            break;

            default:
                include 'home.php';
            break;
        }
    ?>
    
</body>
</html>