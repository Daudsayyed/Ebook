<?php

// Inialize session
session_start();


include_once('config.php');

/// Connect
$link = mysql_connect(DB_HOST,DB_USER,DB_PASS);

mysql_select_db(DB_DATABASE) or die( "Unable to select database");


// Retrieve username and password from database according to user's input
$login = mysql_query("SELECT * FROM register WHERE (email ='" .($_POST['uname']) . "') and (pass = '" .($_POST['upass']) . "')");

// Check username and password match
if (mysql_num_rows($login) == 1) {
        // Set username session variable
        $_SESSION['username'] = $_POST['uname'];
        // Jump to secured page
        header('Location: main.php');
}
else {
        // Jump to login page
        header('Location: reg.php');
}

mysql_close($link);

?>