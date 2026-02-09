<script src="https://www.google.com/recaptcha/api.js"></script>

<?php 
include "header.php";

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['SESS_NAME']) != "") {
    header("Location: voter.php");
}
?>

<style>
/* Register Page Design */
.register-container {
    min-height: 75vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.register-card {
    background: #ffffff;
    width: 380px;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.register-card h3 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.register-card label {
    font-weight: 500;
}

.register-card input[type="text"],
.register-card input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-top: 6px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.register-card input[type="submit"] {
    width: 100%;
    padding: 10px;
    background: #16a34a;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 15px;
}

.register-card input[type="submit"]:hover {
    background: #15803d;
}

.message {
    text-align: center;
    color: red;
    margin-bottom: 10px;
}
</style>

<div class="register-container">
    <div class="register-card">

        <h3>Register</h3>

        <div class="message">
            <?php 
            global $nam; echo $nam; 
            global $error; echo $error; 
            ?>
        </div>

        <form action="reg_action.php" method="post" id="myform">

            <label>First Name</label>
            <input type="text" name="firstname">

            <label>Last Name</label>
            <input type="text" name="lastname">

            <label>Username</label>
            <input type="text" name="username">

            <label>Password</label>
            <input type="password" name="password">

            <div class="g-recaptcha" data-sitekey="6LeD3hEUAAAAAKne6ua3iVmspK3AdilgB6dcjST0"></div>

            <br>
            <input type="submit" name="submit" value="Next">
        </form>

    </div>
</div>

<script type="text/javascript">
var frmvalidator = new Validator("myform"); 
frmvalidator.addValidation("firstname","req","Please enter student firstname"); 
frmvalidator.addValidation("firstname","maxlen=50");
frmvalidator.addValidation("lastname","req","Please enter student lastname"); 
frmvalidator.addValidation("lastname","maxlen=50");
frmvalidator.addValidation("username","req","Please enter student username"); 
frmvalidator.addValidation("username","maxlen=50");
frmvalidator.addValidation("password","req","Please enter student password"); 
frmvalidator.addValidation("password","minlen=6","Password must not be less than 6 characters.");
</script>

<?php include "footer.php"; ?>