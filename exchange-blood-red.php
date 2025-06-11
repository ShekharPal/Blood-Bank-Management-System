<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Exchange Blood Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style>
    #form2 {
        width: 80%;
        height: 330px;
        background-color: red;
        color: white;
        border-radius: 10px;
    }
    </style>
</head>

<body>
    <div id="full">
        <div id="inner_full">
            <div id="header">
                <h4><a href="admin-home.php" style="text-decoration: none; color: white;">Blood Bank Management
                        System</a></h4>st
            </div>
            <div id="body">
                <br>
                <?php
                $un = $_SESSION['un'];
                if (!$un) {
                    header("Location:index.php");
                }
                ?>
                <h1>Exchange Blood Registration</h1>
                <center>
                    <div id="form2">
                        <form action="" method="post">
                            <table>
                                <tr>
                                    <td width="200px" height="50px">Enter Name</td>
                                    <td width="200px" height="50px"><input type="text" name="name"
                                            placeholder="Enter Name" required></td>
                                    <td width="200px" height="50px">Enter Father's Name</td>
                                    <td width="200px" height="50px"><input type="text" name="fname"
                                            placeholder="Enter Father's Name" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Enter Address</td>
                                    <td width="200px" height="50px"><textarea name="address" required></textarea></td>
                                    <td width="200px" height="50px">Enter City</td>
                                    <td width="200px" height="50px"><input type="text" name="city"
                                            placeholder="Enter City" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Enter Age</td>
                                    <td width="200px" height="50px"><input type="text" name="age"
                                            placeholder="Enter Age" required></td>
                                    <td width="200px" height="50px">Enter E-Mail</td>
                                    <td width="200px" height="50px"><input type="text" name="email"
                                            placeholder="Enter E-Mail" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Enter Mobile No</td>
                                    <td width="200px" height="50px"><input type="text" name="mno"
                                            placeholder="Enter Mobile No" required></td>
                                </tr>
                                <tr>
                                    <td width="200px" height="50px">Select Blood Group</td>
                                    <td width="200px" height="50px">
                                        <select name="bgroup" required>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                        </select>
                                    </td>
                                    <td width="200px" height="50px">Exchange Blood Group</td>
                                    <td width="200px" height="50px">
                                        <select name="exbgroup" required>
                                            <option>O+</option>
                                            <option>O-</option>
                                            <option>A+</option>
                                            <option>A-</option>
                                            <option>B+</option>
                                            <option>B-</option>
                                            <option>AB+</option>
                                            <option>AB-</option>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <table>
                                <tr>
                                    <td width="1000px" align="center"><input type="submit" name="sub" value="Save"></td>
                                </tr>
                            </table>
                        </form>
                        <?php
                        if (isset($_POST['sub'])) {
                            //frontend data input start
                            $name = $_POST['name'];
                            $fname = $_POST['fname'];
                            $address = $_POST['address'];
                            $city = $_POST['city'];
                            $age = $_POST['age'];
                            $bgroup = $_POST['bgroup'];
                            $mno = $_POST['mno'];
                            $email = $_POST['email'];
                            $exbgroup = $_POST['exbgroup'];
                            //frontend data input end

                            //select and insert start
                            $q2 = "select * from donor_registration where bgroup = '$bgroup'";
                            $st = $db->query($q2);
                            $num_row = $st->fetch(PDO::FETCH_ASSOC);

                            if ($num_row) {
                                if (isset($num_row['id'], $num_row['name'], $num_row['bgroup'], $num_row['mno'])) {
                                    $id = $num_row['id'];
                                    $name = $num_row['name'];
                                    $b1 = $num_row['bgroup'];
                                    $mno = $num_row['mno'];
                                } else {
                                    echo "<script>alert('Data missing in donor row.')</script>";
                                    exit;
                                }
                                $q1 = "INSERT INTO out_stoke_b (bname, name, mno) VALUES (?, ?, ?)";
                                $st1 = $db->prepare($q1);
                                $st1->execute([$b1, $name, $mno]);

                                $delete_q = "DELETE FROM donor_registration WHERE id = '$id'";
                                $st1 = $db->prepare($delete_q);
                                $st1->execute();
                            } else {
                                echo "<script>alert('No donor found with that blood group.')</script>";
                                exit;
                            }

                            //exchange info insert
                            $q = $db->prepare("INSERT INTO exchange_b (name, fname, address, city, age, bgroup, mno, email, ebgroup) VALUES
                        (:name,:fname, :address, :city, :age, :bgroup, :mno, :email, :ebgroup)");
                            $q->bindValue('name', $name);
                            $q->bindValue('fname', $fname);
                            $q->bindValue('address', $address);
                            $q->bindValue('city', $city);
                            $q->bindValue('age', $age);
                            $q->bindValue('bgroup', $bgroup);
                            $q->bindValue('mno', $mno);
                            $q->bindValue('email', $email);
                            $q->bindValue('ebgroup', $exbgroup);
                            if ($q->execute()) {
                                echo "<script>alert('Registration Successfull')</script>";
                            } else {
                                echo "<script>alert('Registration Fail')</script>";
                            }
                            //exchange info end   
                        }
                        ?>
                    </div>
                </center>
            </div><br><br><br><br><br>
            <div id="footer">
                <h4 align="center">Copyright@JEVANDAN</h4>
                <p align="center"><a href="logout.php">
                        <font color="white">Logout</font>
                    </a></p>
            </div>
        </div>
    </div>
</body>

</html>