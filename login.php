<h1>Log in</h1>

<?php
    if($_POST) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(!$username || !$password) {
            echo '<span style="color:red;">Please fill in all fields!</span>';
        }
        else {
            $password = md5($password);

            $login = $db->prepare("SELECT * FROM users WHERE user_nick=? AND user_password=?");
            $login->execute(array($username, $password));
            $l = $login->fetch(PDO::FETCH_ASSOC);

            if($l) {
                echo '<span style="color:green;">You have successfully logged in!</span>';
                $_SESSION['name'] = $l['user_name'];
                $_SESSION['nick'] = $l['user_nick'];
                //header("location:/");
            }
            else {
                echo '<span style="color:red;">Username or password is incorrect!</span>';
            }
        }
    }
?>

<form action="" method="POST">
    <label for="username"> Username </label>
    <br>
    <input type="text" name="username" id="username" placeholder="Enter username">
    <br>
    <br>
    <label for="password"> Password </label>
    <br>
    <input type="password" name="password" id="password" placeholder="Enter password">
    <br>
    <br>
    <input type="submit" value="Log in">
</form>