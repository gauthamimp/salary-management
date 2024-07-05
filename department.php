<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Salary Management</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- W3.CSS for styling -->
    <style>
        /* Custom styles can be added here or linked from an external stylesheet */
        .w3-sidebar {
            z-index: 3;
            width: 250px;
            font-weight: bold;
        }
        .w3-sidebar img {
            width: 100%;
            padding-top: 15px;
            padding-bottom: 15px;
        }
        .w3-main {
            margin-left: 250px; /* Adjust margin for sidebar width */
        }
        .w3-content-container {
            padding: 20px;
            font-size: 20px;
            text-align: center;
        }
        .w3-title {
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-light-blue w3-collapse w3-top w3-large" id="mySidebar">
        <div class="w3-container w3-dark-grey">
            <h4>Menu</h4>
        </div>
        <img src="https://outlookmoney.com/public/uploads/article/gallery/1bf121e8a9efa2dbd7eac9e16bd6bb8e.jpg" alt="Snow">
        <div class="w3-container w3-dark-grey">
            <h4>Salary Management System</h4>
            <div class="w3-bar-block">
                <dl>
                    <dt><a href="home.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a></dt>
                    <dt><a href="department.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Department</a></dt>
                    <dt><a href="employee.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Employee</a></dt>
                    <dt><a href="setsalarypage.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Set Salary</a></dt>
                    <dt><a href="employee-payment.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Set Payment</a></dt>
                    <dt><a href="payslippage.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Pay Slip</a></dt>
                    <dt><a href="employee-payhistory.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Payment History</a></dt>
                    <dt><a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Log Out</a></dt>
                </dl>
            </div>
        </div>
    </nav>

    <!-- Page content -->
    <div class="w3-main" style="margin-left:250px;"> <!-- Adjust margin to match sidebar width -->
        <!-- Header -->
        <div class="w3-content-container">
            <div class="w3-display-container w3-text-blue" style="font-size: 50px">
                <img src="images/banner.jpeg" alt="Lights" style="height: 100px; width: 100%; object-fit: cover">
                <div class="w3-display-middle w3-large">
                    <h1>Payroll Management system</h1>
                </div>
            </div>
            <div class="w3-display-container w3-text-white">
                <img src="home.jpg" alt="Lights" style="width: 100%">
                <div class="w3-display-topmiddle" style="font-size: 20px">
                    <p><br><br><br><h2><center>Welcome to payroll system</center></h2></p>
                    <br><center><h3>This is the homepage</h3></center>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional: JavaScript for sidebar toggle -->
    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }
        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>
</body>
</html>
