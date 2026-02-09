<?php
if (!isset($_SESSION)) { 
    session_start();
}
include "auth.php";
include "header_voter.php";
include "connection.php";
?>

<style>
/* Results Page Design */
.results-container {
    min-height: 75vh;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    padding: 30px;
}

.results-card {
    background: #ffffff;
    width: 90%;
    max-width: 800px;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.12);
}

.results-card h3 {
    text-align: center;
    margin-bottom: 20px;
    color: #1e3a8a;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background: #2563eb;
    color: white;
}

thead th {
    padding: 12px;
    text-align: left;
}

tbody tr {
    border-bottom: 1px solid #e5e7eb;
}

tbody tr:nth-child(even) {
    background: #f9fafb;
}

tbody td {
    padding: 10px;
}

.vote-count {
    font-weight: bold;
    color: #16a34a;
    text-align: center;
}

.no-result {
    text-align: center;
    color: red;
    font-size: 16px;
}
</style>

<div class="results-container">
    <div class="results-card">

        <h3>Voting Results So Far</h3>

        <?php
        $member = mysqli_query($con, "SELECT * FROM languages");

        if (mysqli_num_rows($member) == 0) {
            echo '<div class="no-result">No results found</div>';
        } else {
            echo '
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Party</th>
                        <th>About</th>
                        <th style="text-align:center;">Votes</th>
                    </tr>
                </thead>
                <tbody>';

            while ($mb = mysqli_fetch_object($member)) {
                echo '
                <tr>
                    <td>'.$mb->lan_id.'</td>
                    <td>'.$mb->fullname.'</td>
                    <td>'.$mb->about.'</td>
                    <td class="vote-count">'.$mb->votecount.'</td>
                </tr>';
            }

            echo '
                </tbody>
            </table>';
        }
        ?>

    </div>
</div>