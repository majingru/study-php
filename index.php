<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Attack Lab</title>
    <style>
                .button {
            padding: 4px 8px;
            min-width: 100px;
        }
    </style>
</head>

<body>
<div>
        <?php
        $s = $_SESSION['user'];
        if ($s === null) {
            $user = $_POST['username'];
            $pass = $_POST['password'];
            if ($user === "admin" && $pass === "password") {
                $_SESSION['user'] = $user;
            } else {
                $_SESSION['login-error'] = "<span class='input-name'>user or password incorrect</span>";
                header("Location:login.php");
            }
        }
        echo "welcome $s .";
        ?>
        <form action="logout.php" method="GET">
            <input class="button" type="submit" value="logout">
        </form>
    </div>
    <div>
        <ul>
            <li>
                <a href="xssreflex.php">XSS-Reflex</a>
            </li>
        </ul>
    </div>
    
</body>

</html>
