<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Attack Lab</title>
    <style>
        .content {
            display: flex;
            justify-content: center;
            margin-top: 80px;
        }

        .input-name {
            min-width: 80px;
            padding: 8px;
            display: inline-block;
        }

        .button {
            padding: 4px 8px;
            min-width: 100px;
        }
    </style>
</head>

<body>
    <div class="content">
        <form action="index.php" method="POST">
            <span class="input-name">UserName:</span> <input type="text" name="username"><br>
            <span class="input-name">Password:</span> <input type="password" name="password"><br>
            <span class="input-name"><input class="button" type="submit"></span><br>
            <?php
                $err = $_SESSION['login-error'];
                if(isset($err)){
                    echo $err;
                }
            ?>
        </form>
    </div>

</body>

</html>