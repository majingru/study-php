<!DOCTYPE html>
<html>
<head>
    <title>Attack Lab</title>
    
</head>
<body>
<form action="" method="GET">
<input type="text" name="input">     
<input type="submit"> 
</form>
<?php
    $xssref = $_GET['input'];
    echo $xssref;
?>
</body>
</html>
