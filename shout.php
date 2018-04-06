<?php
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'root';

$dbname = 'exchangerDB';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);

if($_POST['name']) {
    $name       = $_POST['name'];
    $message    = $_POST['message'];
    /*** set all errors to execptions ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "INSERT INTO shoutbox (date_time, name, message)
            VALUES (NOW(), :name, :message)";
    /*** prepare the statement ***/
    $stmt = $dbh->prepare($sql);

    /*** bind the params ***/
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':message', $message, PDO::PARAM_STR);

    /*** run the sql statement ***/
    if ($stmt->execute()) {
        populate_shoutbox();
    }
} 
}
catch(PDOException $e) {
    echo $e->getMessage();
}

if($_POST['refresh']) {
    populate_shoutbox();
}


function populate_shoutbox() {
    global $dbh;
    $sql = "select * from shoutbox order by date_time desc limit 10";
    echo '<div class="many_reviews_ins">';
    foreach ($dbh->query($sql) as $row) {
        echo '<div class="one_reviews">';
        echo '<div class="date">'.date("d.m.Y H:i", strtotime($row['date_time'])).'</div>';
        echo '<div class="name">'.$row['name'].'</div>';
        echo '<div class="message">'.$row['message'].'</div>'.'<br>';
        echo '</div>';
    }
    echo '</div>';
}


?>