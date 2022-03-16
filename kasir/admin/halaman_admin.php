<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php
    session_start();

    if($_SESSION['level']==""){
        header("location:index.php");
    }

    function welcome(){
        $file = fopen("welcome.txt", "r");
        echo fgets($file);
    }
    welcome();
    ?>

    <h3>silahkan pilih menu yang diinginkan</h3>
    <p><a href="menu.php">menu</a></p>
    <p><a href="pelanggan.php">pelanggan</a></p>
    <p><a href="pesanan.php">pesanan</a></p>
    <p><a href="transaksi.php">transaksi</a></p>
    <p><a href="logout.php">logou</a></p>


</body>
</html>