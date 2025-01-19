<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../CSS/MenusideStyle.css">
    <title>Full-Screen Static Sidebar Menu</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Menu</h2>
        <ul>
            <li><a href="../Events/EventsView.php">Event Management</a></li>
            <li><a href="#" onclick="showMessage()">Profile</a></li>
            <li><a href="../Logs/LogsView.php">Logs</a></li>
            <li><a href="#" onclick="showMessage()">Settings</a></li>
            <li><a href="../About/AboutView.php">About</a></li>
            <li><a href="#" onclick="showMessage()">Logout</a></li>
        </ul>
    </div>
</body>
</html>

<script>
        function showMessage() {
            alert("Sorry, the Profile page is currently under construction. Please check back later.");
        }
    </script>