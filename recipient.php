<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Recipient Registration</title>
    <link rel="stylesheet" type="text/css" href="css/s1.css">
    <style>
        #form2{
        width: 80%;
        height: 260px;
        background-color: red;
        color: white;
        border-radius: 10px;
        padding-top: 15px;
        }
    </style>
</head>
<body>
<div id="full">
    <div id="inner_full">
        <div id="header"><h2><a href="admin-home.php" style="text-decoration: none; color: white;">Blood Bank Management System</a></h2></div>
        <div id="body">
            <br>
            <?php
            $un=$_SESSION['un'];
            if(!$un)
            {
                header("Location:index.php");
            }
            ?>
            <h1>Recipient Registration</h1>
            <center><div id="form2">
                <form action="" method="post">
                <table>
                    <tr>
                        <td width="200px" height="50px">Enter Name</td>
                        <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"required></td>
                        <td width="200px" height="50px">Enter Father's Name</td>
                        <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"required></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter Address</td>
                        <td width="200px" height="50px"><textarea name="address"required></textarea></td>
                        <td width="200px" height="50px">Enter City</td>
                        <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"required></td>
                    </tr>
                    <tr>
                        <td width="200px" height="50px">Enter Age</td>
                        <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"required></td>
                        <td width="200px" height="50px">Select Required Blood Group</td>
                        <td width="200px" height="50px">
                            <select name="rbgroup"required>
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
                    <tr>
                        <td width="200px" height="50px">Enter E-Mail</td>
                        <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"required></td>
                        <td width="200px" height="50px">Enter Mobile No</td>
                        <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No"required></td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td width="1000px"  align="center"><input type="submit" name="sub" value="Save"></td>
                    </tr>
                </table>
                </form>
                <?php
                    if(isset($_POST['sub']))
                    {
                        $name=$_POST['name'];
                        $fname=$_POST['fname'];
                        $address=$_POST['address'];
                        $city=$_POST['city'];
                        $age=$_POST['age'];
                        $rbgroup=$_POST['rbgroup'];
                        $mno=$_POST['mno'];
                        $email=$_POST['email'];
                        $q=$db->prepare("INSERT INTO recipient_registration (name, fname, address, city, age, rbgroup, mno, email) VALUES
                        (:name,:fname, :address, :city, :age, :rbgroup, :mno, :email)");
                        $q->bindValue('name', $name);
                        $q->bindValue('fname', $fname);
                        $q->bindValue('address', $address);
                        $q->bindValue('city', $city);
                        $q->bindValue('age', $age);
                        $q->bindValue('rbgroup', $rbgroup);
                        $q->bindValue('mno', $mno);
                        $q->bindValue('email', $email);
                        if($q->execute())
                        {
                            echo "<script>alert('Recipient Registration Successfull')</script>";
                        }
                        else
                        {
                            echo "<script>alert('Recipient Registration Failed')</script>";
                        }   
                    }
                ?>
            </div></center> 
        </div>
        <div id="footer"><h4 align="center">Copyright@JEVANDAN</h4>
            <p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
        </div>
    </div>
</div>
</body>
</html>