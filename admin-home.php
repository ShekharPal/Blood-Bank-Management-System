<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="full">
    <div id="inner_full">
        <div id="header"><h2 align="center"><a href="admin-home.php" style="text-decoration: none; color: white;">JEVANDAN-Blood Bank Management System</a></h2></div>
        <div id="body">
            <br>
            <?php
            $un=$_SESSION['un'];
            if(!$un)
            {
                header("Location:index.php");
            }
            ?>
            <h1>Welcome Admin</h1><br><br>
            <ul>
                <li><a href="donor-red.php">Donor Registration</a></li>
                <li><a href="donor-list.php">Donor List</a></li>
                <li><a href="stoke-blood-list.php">Stock Blood List</a></li>
                <li><a href="out-stoke-blood-list.php">Out Stock Blood List</a></li>
            </ul><br><br><br><br><br>
            <ul>
                <li><a href="recipient.php">Recipient Registration</a></li>
                <li><a href="recipient-list.php">Recipient List</a></li>
                <li><a href="blood-bank-red.php">Blood Bank Registration</a></li>
                <li><a href="blood-camp-red.php">Blood Camp Registration</a></li>
            </ul><br><br><br><br><br>
            <ul>
                <li><a href="ngo-red.php">NGO Registration</a></li>
                <li><a href="blood-bank-list.php">Blood Bank List</a></li>
                <li><a href="blood-camp-list.php">Blood Camp List</a></li>
                <li><a href="ngo-list.php">NGO List</a></li>
            </ul><br><br><br><br><br>
            <ul>
                <li><a href="exchange-blood-red.php">Exchange Blood Registration</a></li>
                <li><a href="exchange-blood-list.php">Exchange Blood List</a></li>
            </ul><br><br><br><br><br>
        </div><br><br><br><br><br><br><br><br><br><br>  
        <div id="footer"><h4 align="center">Copyright@JEVANDAN</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div>
    </div>
</div>
</body>
</html>