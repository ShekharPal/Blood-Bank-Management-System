<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Blood Bank List</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
    td {
        width: 200px;
        height: 40px;
    }
    </style>
</head>

<body>
    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h4><a href="admin-home.php" style="text-decoration: none; color: white;">Blood Bank Management System</a></h4>
            </div>
            <div id="body">
                <?php
                $un = $_SESSION['un'];
                if (!$un) {
                    header("Location:index.php");
                }
                ?>
                <h1>
                    <marquee behavior="" direction="">Blood Bank List</marquee>
                </h1>
                <center>
                    <div id="form">
                        <table border="1">
                            <tr>
                                <td><center><b><font color="black">Blood Bank Name</font></b></center></td>
                                <td><center><b><font color="black">Registration Number</font></b></center></td>
                                <td><center><b><font color="black">Address</font></b></center></td>
                                <td><center><b><font color="black">City</font></b></center></td>
                                <td><center><b><font color="black">State</font></b></center></td>
                                <td><center><b><font color="black">Contact Person</font></b></center></td>
                                <td><center><b><font color="black">Contact Email</font></b></center></td>
                                <td><center><b><font color="black">Contact Phone</font></b></center></td>
                                <td><center><b><font color="black">License Valid Till</font></b></center></td>
                            </tr>
                            <?php
                            $q = $db->query("SELECT * FROM blood_bank_registration");
                            while ($r1 = $q->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <tr>
                                <td><center><?= $r1->bank_name; ?></center></td>
                                <td><center><?= $r1->reg_no; ?></center></td>
                                <td><center><?= $r1->address; ?></center></td>
                                <td><center><?= $r1->city; ?></center></td>
                                <td><center><?= $r1->state; ?></center></td>
                                <td><center><?= $r1->contact_person; ?></center></td>
                                <td><center><?= $r1->email; ?></center></td>
                                <td><center><?= $r1->phone; ?></center></td>
                                <td><center><?= $r1->license_validity; ?></center></td>
                            </tr>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </center>
            </div>
            <div id="footer"> 
    <div>
        <h4 style="text-align: center; margin: 0;">Copyright @ JEVANDAN</h4>
        <div style="text-align: center; margin-top: 5px;">
            <a href="logout.php" class="logout-button">Logout</a>
        </div>
    </div>
</div>
        </div>
    </div>
</body>

</html>