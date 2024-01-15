<?php
require_once '../helpers/functions.php';
require_once '../models/User.php';

$user = new User();

view('home', [
    'name' => $user->name,
    'age' => $user->age
]);