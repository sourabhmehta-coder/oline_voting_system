<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!empty($_SESSION['SESS_NAME'])) {
    header("Location: voter.php");
    exit();
}

include "header.php";
?>

<style>
.login-container {
    min-height: 75vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: #f1f5f9;
}

.login-card {
    background: #ffffff;
    width: 360px;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.login-card h3 {
    text-align: center;
    margin-bottom: 20px;
    color: #1e293b;
}

.login-card label {
    font-weight: 600;
}

.login-card input[type="text"],
.login-card input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 6px;
    margin-bottom: 15px;
    border-radius: 6px;
    border: 1px solid #cbd5e1;
}

.login-card input[type="submit"] {
    width: 100%;
    padding: 10px;
    background: #2563eb;
    color: #fff;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    cursor: pointer;
}

.login-card input[type="submit"]:hover {
    background: #1d4ed8;
}

.message {
    text-align: center;
    color: red;
    margin-bottom: 10px;
}
</style>

<div class="login-container">
    <div class="login-card">

        <h3>Login for Voting</h3>

        <div class="message">
            <?php 
            if (isset($nam)) echo $nam;
            if (isset($error)) echo $error;
            ?>
        </div>

        <form action="login_action.php" method="post" id="myform">
            <label>Username</label>
            <input type="text" name="username">

            <label>Password</label>
            <input type="password" name="password">

            <input type="submit" name="login" value="Login">
        </form>

    </div>
</div>

<script>
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("username","req","Please enter username");
frmvalidator.addValidation("password","req","Please enter password");
</script>

<?php include "footer.php"; ?>