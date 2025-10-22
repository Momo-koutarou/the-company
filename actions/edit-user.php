<?php
include "../classes/User.php";

// Create an object
$user = new User;

// Call the method
$user->update($_POST,$_FILES);

// $_POST holds all the data from the form in views/edit-user.php
//$_FILE holds an array items uploaded to the current script via the POST method.


?>