<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Blood Bank Camp Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style>
    #form2 {
        width: 80%;
        height: auto;
        background-color: red;
        color: white;
        border-radius: 10px;
        padding-top: 15px;
        padding-bottom: 15px;
    }
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
                    <marquee behavior="" direction="">Blood Bank Camp Registration</marquee>
                </h1>
                <center>
                    <div id="form2">
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td width="200px" height="50px">Blood Bank Name</td>
                                    <td width="200px" height="50px"><input type="text" name="bank_name"
                                            placeholder="Enter Blood Bank Name" required></td>
                                    <td width="200px" height="50px">Organizer Name</td>
                                    <td width="200px" height="50px"><input type="text" name="organizer_name"
                                            placeholder="Enter Organizer Name" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Camp Address</td>
                                    <td width="200px" height="50px"><textarea name="camp_address"
                                            required></textarea></td>
                                    <td width="200px" height="50px">City</td>
                                    <td width="200px" height="50px"><input type="text" name="camp_city"
                                            placeholder="Enter City" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Date of Camp</td>
                                    <td width="200px" height="50px"><input type="date" name="camp_date" required></td>
                                    <td width="200px" height="50px">Number of Donors</td>
                                    <td width="200px" height="50px"><input type="number" name="num_donors"
                                            placeholder="Enter Number" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Contact Email</td>
                                    <td width="200px" height="50px"><input type="email" name="contact_email"
                                            placeholder="Enter Email" required></td>
                                    <td width="200px" height="50px">Contact Phone</td>
                                    <td width="200px" height="50px"><input type="text" name="contact_phone"
                                            placeholder="Enter Phone Number" required></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td width="1000px" align="center"><input type="submit" name="submit_camp"
                                            value="Register Camp"></td>
                                </tr>
                            </table>
                        </form>

                        <?php
                        if (isset($_POST['submit_camp'])) {
                            $bank_name = $_POST['bank_name'];
                            $organizer_name = $_POST['organizer_name'];
                            $camp_address = $_POST['camp_address'];
                            $camp_city = $_POST['camp_city'];
                            $camp_date = $_POST['camp_date'];
                            $num_donors = $_POST['num_donors'];
                            $contact_email = $_POST['contact_email'];
                            $contact_phone = $_POST['contact_phone'];

                            $query = $db->prepare("INSERT INTO blood_camp_registration 
                                (bank_name, organizer_name, camp_address, camp_city, camp_date, num_donors, contact_email, contact_phone) 
                                VALUES (:bank_name, :organizer_name, :camp_address, :camp_city, :camp_date, :num_donors, :contact_email, :contact_phone)");

                            $query->bindValue('bank_name', $bank_name);
                            $query->bindValue('organizer_name', $organizer_name);
                            $query->bindValue('camp_address', $camp_address);
                            $query->bindValue('camp_city', $camp_city);
                            $query->bindValue('camp_date', $camp_date);
                            $query->bindValue('num_donors', $num_donors);
                            $query->bindValue('contact_email', $contact_email);
                            $query->bindValue('contact_phone', $contact_phone);

                            if ($query->execute()) {
                                echo "<script>alert('Camp Registration Successful')</script>";
                            } else {
                                echo "<script>alert('Camp Registration Failed')</script>";
                            }
                        }
                        ?>
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