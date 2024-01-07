<?php
    if($_SESSION) { // If session is not empty
?>

<h1>WELCOME <?php echo $_SESSION['name']; ?></h1>
<h1>Nick: <?php echo $_SESSION['nick']; ?></h1>
<a href="?go=logout">Log out</a> 

<?php
    }
    else {  // If session is empty
?>

<h1>HOMEPAGE</h1>
<a href="?go=login">Log in</a>

<?php
    }
?>