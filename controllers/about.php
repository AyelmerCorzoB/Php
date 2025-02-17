<?php

$_SESSION['name'] = 'Alan';
$_SESSION['last'] = 'Corzo';
view("about.view.php", [
    'heading' => 'About Us',
]);