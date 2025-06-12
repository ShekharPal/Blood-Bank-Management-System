<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Blood Bank Registration</title>
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
                    <marquee behavior="" direction="">Blood Bank Registration</marquee>
                </h1>
                <center>
                    <div id="form2">
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td width="200px" height="50px">Blood Bank Name</td>
                                    <td width="200px" height="50px"><input type="text" name="bank_name"
                                            placeholder="Enter Blood Bank Name" required></td>
                                    <td width="200px" height="50px">Registration Number</td>
                                    <td width="200px" height="50px"><input type="text" name="reg_no"
                                            placeholder="Enter Reg. No." required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Address</td>
                                    <td width="200px" height="50px"><textarea name="address"
                                            placeholder="Enter Address" required></textarea></td>
                                    <td width="200px" height="50px">City</td>
                                    <td width="200px" height="50px"><input type="text" name="city"
                                            placeholder="Enter City" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">State</td>
                                    <td width="200px" height="50px"><input type="text" name="state"
                                            placeholder="Enter State" required></td>
                                    <td width="200px" height="50px">Contact Person</td>
                                    <td width="200px" height="50px"><input type="text" name="contact_person"
                                            placeholder="Enter Contact Person" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Contact Email</td>
                                    <td width="200px" height="50px"><input type="email" name="email"
                                            placeholder="Enter Email" required></td>
                                    <td width="200px" height="50px">Contact Phone</td>
                                    <td width="200px" height="50px"><input type="text" name="phone"
                                            placeholder="Enter Phone No" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">License Valid Till</td>
                                    <td width="200px" height="50px"><input type="date" name="license_validity"
                                            required></td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td width="1000px" align="center"><input type="submit" name="register_bank"
                                            value="Register Bank"></td>
                                </tr>
                            </table>
                        </form>

                        <?php
                        if (isset($_POST['register_bank'])) {
                            $bank_name = $_POST['bank_name'];
                            $reg_no = $_POST['reg_no'];
                            $address = $_POST['address'];
                            $city = $_POST['city'];
                            $state = $_POST['state'];
                            $contact_person = $_POST['contact_person'];
                            $email = $_POST['email'];
                            $phone = $_POST['phone'];
                            $license_validity = $_POST['license_validity'];

                            $q = $db->prepare("INSERT INTO blood_bank_registration 
                            (bank_name, reg_no, address, city, state, contact_person, email, phone, license_validity) 
                            VALUES (:bank_name, :reg_no, :address, :city, :state, :contact_person, :email, :phone, :license_validity)");

                            $q->bindValue('bank_name', $bank_name);
                            $q->bindValue('reg_no', $reg_no);
                            $q->bindValue('address', $address);
                            $q->bindValue('city', $city);
                            $q->bindValue('state', $state);
                            $q->bindValue('contact_person', $contact_person);
                            $q->bindValue('email', $email);
                            $q->bindValue('phone', $phone);
                            $q->bindValue('license_validity', $license_validity);

                            if ($q->execute()) {
                                echo "<script>alert('Blood Bank Registered Successfully')</script>";
                            } else {
                                echo "<script>alert('Blood Bank Registration Failed')</script>";
                            }
                        }
                        ?>
                    </div>
                </center>
            </div><br><br><br><br>
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