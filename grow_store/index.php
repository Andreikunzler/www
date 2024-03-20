<?php
require_once("./model/user.php");
require_once('./data/user_data.php');

$newUser = new User('andrei','andrei@andrei.com','1234');
$newUser2 = new User('alana','alana@alana.com','5555');
$userData = $newUser->add($userData);
$userData = $newUser2->add($userData);

User::list($userData);
