<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Blood Camp List</title>
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
                    <marquee behavior="" direction="">Blood Camp List</marquee>
                </h1>
                <center>
                    <div id="form">
                        <table border="1">
                           <tr>
                            <td>
                                <center><b><font color="black">Blood Bank Name</font></b></center>
                            </td>
                            <td>
                                <center><b><font color="black">Organizer Name</font></b></center>
                            </td>
                            <td>
                                <center><b><font color="black">Camp Address</font></b></center>
                            </td>
                            <td>
                                <center><b><font color="black">City</font></b></center>
                            </td>
                            <td>
                                <center><b><font color="black">Date of Camp</font></b></center>
                            </td>
                            <td>
                                <center><b><font color="black">Number of Donors</font></b></center>
                            </td>
                            <td>
                                <center><b><font color="black">Contact Email</font></b></center>
                            </td>
                            <td>
                                <center><b><font color="black">Contact Phone</font></b></center>
                            </td>
                           </tr>
                            <?php
                            $q = $db->query("SELECT * FROM blood_camp_registration");
                            while ($r1 = $q->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <tr>
                                <td><center><?= $r1->bank_name; ?></center></td>
                                <td><center><?= $r1->organizer_name; ?></center></td>
                                <td><center><?= $r1->camp_address; ?></center></td>
                                <td><center><?= $r1->camp_city; ?></center></td>
                                <td><center><?= $r1->camp_date; ?></center></td>
                                <td><center><?= $r1->num_donors; ?></center></td>
                                <td><center><?= $r1->contact_email; ?></center></td>
                                <td><center><?= $r1->contact_phone; ?></center></td>
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