<?php
include "../classes/User.php";

//Create an object
$user = new User;

//Create the method
$user->store($_POST);

?>