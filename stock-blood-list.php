<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Stock Blood List</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style type="text/css">
    table {
        width: 50%;
        border-collapse: collapse;
        margin: 20px auto;
        font-family: Arial, sans-serif;
    }

    th,
    td {
        border: 1px solid #444;
        padding: 8px 12px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    div#form1 table tr {
        background-color: red;
    }

    /* #form1 {
        width: 80%;
        height: 320px;
        background-color: red;
        color: white;
        border-radius: 10px;
    } */
    </style>
</head>

<body>
    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h4><a href="admin-home.php" style="text-decoration: none; color: white;">Blood Bank Management
                        System</a></h4>
            </div>
            <div id="body">
                <br>
                <?php
                $un = $_SESSION['un'];
                if (!$un) {
                    header("Location:index.php");
                }
                ?>
                <h1>
                    <marquee behavior="" direction="">Stock Blood List</marquee>
                </h1>
                <center>
                    <div id="form1">
                        <table>
                            <tr>
                                <td>
                                    <center><b>
                                            <font color="black">Name</font>
                                        </b></center>
                                </td>
                                <td>
                                    <center><b>
                                            <font color="black">Qty</font>
                                        </b></center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>O+</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = $db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                                        echo $row = $q->rowcount();
                                        ?>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>O-</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = $db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
                                        echo $row = $q->rowcount();
                                        ?>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>A+</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = $db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
                                        echo $row = $q->rowcount();
                                        ?>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>A-</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = $db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
                                        echo $row = $q->rowcount();
                                        ?>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>B+</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = $db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
                                        echo $row = $q->rowcount();
                                        ?>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>B-</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = $db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
                                        echo $row = $q->rowcount();
                                        ?>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>AB+</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = $db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                                        echo $row = $q->rowcount();
                                        ?>
                                    </center>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <center>AB-</center>
                                </td>
                                <td>
                                    <center>
                                        <?php
                                        $q = $db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                                        echo $row = $q->rowcount();
                                        ?>
                                    </center>
                                </td>
                            </tr>
                        </table>
                    </div>
                </center>
            </div>
            <br><br><br><br><br><br>
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