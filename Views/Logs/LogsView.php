<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View System Logs</title>
    <link rel="stylesheet" href="../../CSS/Logs_Style.css"> <!-- Link to external CSS file -->
</head>
<body>

<?php include ('../Menu/MenusideView.php') ?>

    <div class="container">
        <h2>System Logs</h2>

        <!-- Login and Logout -->
        <h3>Login and Logout</h3>
        <table class="logs-table">
            <thead>
                <tr>
                    <th>Date and Time</th>
                    <th>Action</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example log data for login/logout -->
                <tr>
                    <td>2025-01-19 10:00:45</td>
                    <td>User logged in</td>
                    <td>john_doe</td>
                </tr>
                <tr>
                    <td>2025-01-19 10:30:45</td>
                    <td>User logged out</td>
                    <td>john_doe</td>
                </tr>
                <tr>
                    <td>2025-01-19 10:45:30</td>
                    <td>User logged in</td>
                    <td>jane_smith</td>
                </tr>
                <tr>
                    <td>2025-01-19 11:00:00</td>
                    <td>User logged out</td>
                    <td>jane_smith</td>
                </tr>
            </tbody>
        </table>

        <!-- System Actions -->
        <h3>System Actions</h3>
        <table class="logs-table">
            <thead>
                <tr>
                    <th>Date and Time</th>
                    <th>Action</th>
                    <th>User</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example log data for system actions -->
                <tr>
                    <td>2025-01-19 10:01:00</td>
                    <td>User performed a system action</td>
                    <td>Accessing Dashboard</td>
                </tr>
                <tr>
                    <td>2025-01-19 10:46:00</td>
                    <td>User performed a system action</td>
                    <td>Viewing Reports</td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
