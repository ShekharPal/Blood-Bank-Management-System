<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style>
    #body {
        background-image: url('img/Image.jpeg');
        /* Make sure this path is correct */
        background-size: cover;
        /* Ensures it covers the whole div */
        background-repeat: no-repeat;
        background-position: center;
        min-height: 500px;
        /* Optional: adjust based on your layout */
    }
    </style>
</head>

<body>
    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h4>JEVANDAN-Blood Bank Management System</h4>
            </div>
            <div id="body">
                <form action="" method="post" id="login_form">
                    <table id="login_table">
                        <tr>
                            <td width="200px" height="70px"><b>Enter Username</b></td>
                            <td width="100px" height="70px"><input type="text" name="un" placeholder="Enter Username">
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="70px"><b>Enter Password</b></td>
                            <td width="200px" height="70px"><input type="text" name="ps" placeholder="Enter Password">
                            </td>
                        </tr>
                        <tr class="login">
                            <td><input class="login_btn" type="submit" name="sub" value="Login"></td>
                        </tr>
                    </table>
                    <div class="image_box">
                        <img src="images/login_avatar-removebg-preview.png" alt="">
                    </div>
                </form>
                <?php
                if (isset($_POST['sub'])) {
                    $un = $_POST['un'];
                    $ps = $_POST['ps'];
                    $q = $db->prepare("SELECT*FROM admin where uname='$un' && pass='$ps'");
                    $q->execute();
                    $res = $q->fetchAll(PDO::FETCH_OBJ);
                    if ($res) {
                        $_SESSION['un'] = $un;
                        header("Location: admin-home.php");
                    } else {
                        echo "<script>alert('Wrong User')</script>";
                    }
                }
                ?>
            </div>
            <div id="footer">
                <h4 align="center">Copyright@JEVANDAN</h4>
            </div>
        </div>
    </div>
</body>

</html>