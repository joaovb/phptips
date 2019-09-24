<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;


$user = (new User())->findById(1);
$user->last_name = "Moura";
$user->save();


var_dump($user);

