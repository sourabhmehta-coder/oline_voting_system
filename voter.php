<?php
if (!isset($_SESSION)) { 
    session_start();
}
include "auth.php";
include "header_voter.php"; 
?>

<style>
/* Voting Page Design */
.vote-container {
    min-height: 75vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.vote-card {
    background: #ffffff;
    width: 420px;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.vote-card h4 {
    text-align: center;
    color: #2563eb;
    margin-bottom: 10px;
}

.vote-card h3 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.vote-options label {
    display: block;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 6px;
    margin-bottom: 10px;
    cursor: pointer;
    transition: 0.3s;
}

.vote-options input[type="radio"] {
    margin-right: 10px;
}

.vote-options label:hover {
    background: #f1f5f9;
}

.submit-btn {
    width: 100%;
    padding: 10px;
    background: #2563eb;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
}

.submit-btn:hover {
    background: #1e40af;
}

.message {
    text-align: center;
    margin: 10px 0;
    color: red;
}
</style>

<div class="vote-container">
    <div class="vote-card">

        <h4>Welcome <?php echo $_SESSION['SESS_NAME']; ?></h4>
        <h3>Make Your Vote</h3>

        <form action="submit_vote.php" method="post" id="myform">

            <p><strong>What is your favorite political party?</strong></p>

            <div class="vote-options">
                <label>
                    <input type="radio" name="lan" value="BJP"> BJP
                </label>

                <label>
                    <input type="radio" name="lan" value="CONGRESS"> Congress
                </label>

                <label>
                    <input type="radio" name="lan" value="AAP"> AAP
                </label>

                <label>
                    <input type="radio" name="lan" value="NOTA"> TMC
                </label>

                <label>
                    <input type="radio" name="lan" value="NIRDLIY"> Nirdliya
                </label>
            </div>

            <div class="message">
                <?php global $msg; echo $msg; ?>
                <?php global $error; echo $error; ?>
            </div>

            <input type="submit" name="submit" value="Submit Vote" class="submit-btn">

        </form>

    </div>
</div>