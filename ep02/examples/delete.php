<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;


$user = (new User())->findById(3);
$nome = "Catota";

if ($user) {
    $user->destroy();
    echo "{$nome} Deletado";
} else {
    var_dump($user);
}



