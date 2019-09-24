<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;


$user = new User();
$user->first_name = "João";
$user->last_name = "Barreto";
$user->genre = "M";
$user->save();

$addr = new Address();
$addr->add($user, "Nome da Rua", "22b");
$addr->save();
var_dump($user);

