<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_SESSION['awal'])){
    echo "<h1> Ini Halaman Tiga</h1>";
    }else{
        header("Location: error.php");
        exit;
    }
?>
</html>