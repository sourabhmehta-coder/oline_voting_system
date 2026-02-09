<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Online Voting System</title>

<script src="jscript/validation.js" type="text/javascript"></script>

<style>
body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: #ebe9e9;
}

/* Top Marquee */
.marquee {
    background: #4f46e5;
    color: #fff;
    padding: 10px;
    font-weight: bold;
}

/* Navigation Bar */
.navbar {
    background: #ffffff;
    padding: 12px 0;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.navbar a {
    text-decoration: none;
    color: #1f2937;
    font-size: 16px;
    margin: 0 12px;
    font-weight: bold;
}

.navbar a:hover {
    color: #4f46e5;
}
</style>
</head>

<body>

<div class="marquee">
    <marquee>Welcome To Online Voting System</marquee>
</div>

<div class="navbar">
    <a href="voter.php">Home</a> |
    <a href="lan_view.php">Vote Results</a> |
    <a href="profile.php">Profile</a> |
    <a href="change_pass.php">Change Password</a> |
    <a href="logout.php">Logout</a>
</div>