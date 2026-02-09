<?php
session_start();
if (!empty($_SESSION['SESS_NAME'])) {
    header("Location: voter.php");
    exit();
}
?>

<style>
/* Home Page Design */
.home-container {
    min-height: 70vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.home-card {
    max-width: 800px;
    background: #ffffff;
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    text-align: center;
}

.home-card h1 {
    color: #16a34a;
    margin-bottom: 20px;
}

.home-card p {
    font-size: 18px;
    color: #444;
    line-height: 1.6;
}

.home-actions {
    margin-top: 30px;
}

.home-actions a {
    display: inline-block;
    padding: 12px 25px;
    margin: 10px;
    text-decoration: none;
    color: #fff;
    border-radius: 6px;
    font-size: 16px;
}

.btn-login {
    background: #4f46e5;
}

.btn-register {
    background: #16a34a;
}

.btn-login:hover {
    background: #4338ca;
}

.btn-register:hover {
    background: #15803d;
}
</style>

<div class="home-container">
    <div class="home-card">

        <h1>Online Voting System</h1>

        <?php global $msg; echo $msg; ?>

        <p>
            This system allows all registered users to vote for their favorite
            <strong>Political Party</strong>.
        </p>

        <p>
            To participate in voting, you must first <strong>register</strong>
            and then <strong>login</strong>.
        </p>

        <div class="home-actions">
            <a href="login.php" class="btn-login">Login</a>
            <a href="register.php" class="btn-register">Register</a>
        </div>

    </div>
</div>

<?php include "footer.php"; ?>