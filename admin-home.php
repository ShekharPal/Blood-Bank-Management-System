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
            <div id="header">
                <h4><a href="admin-home.php" style="text-decoration: none; color: white;">JEVANDAN-Blood Bank Management
                        System</a> <span id="currentTime"></span></h4>
            </div>
            <div id="body">
                <?php
                $un = $_SESSION['un'];
                if (!$un) {
                    header("Location:index.php");
                }
                ?>

                <h1>
                    <marquee behavior="" direction="">Welcome Admin — <span id="currentDate"></span></marquee>
                </h1>
                <ul class="items">
                    <li><a href="donor-red.php">Donor Registration</a></li>
                    <li><a href="donor-list.php">Donor List</a></li>
                    <li><a href="stock-blood-list.php">Stock Blood List</a></li>
                </ul>
                <ul class="items">
                    <li><a href="recipient.php">Recipient Registration</a></li>
                    <li><a href="recipient-list.php">Recipient List</a></li>
                    <li><a href="blood-bank-red.php">Blood Bank Registration</a></li>
                    <li><a href="blood-camp-red.php">Blood Camp Registration</a></li>
                </ul>
                <ul class="items">
                    <li><a href="blood-bank-list.php">Blood Bank List</a></li>
                    <li><a href="blood-camp-list.php">Blood Camp List</a></li>
                </ul>
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

    <script>
    const currentDate = new Date().toLocaleDateString('en-IN', {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });

    document.getElementById('currentDate').innerText = currentDate;
    </script>
    <script>
    function updateTime() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('en-IN', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
        });
        document.getElementById('currentTime').innerText = timeString;
    }

    updateTime();
    setInterval(updateTime, 1000);
    </script>
</body>

</html>