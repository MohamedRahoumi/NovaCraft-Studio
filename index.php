<?php 
$routes = [
    '/'         => 'home',
    '/services' => 'services',
    '/about'    => 'about',
    '/contact'  => 'contact',
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$page = $routes[$uri] ?? '404';

$titles = [
    'home'     => 'Accueil - DigitalWave',
    'services' => 'Nos Services - DigitalWave',
    'about'    => 'A propos - DigitalWave',
    'contact'  => 'Contact - DigitalWave',
    '404'      => 'Page introuvable - DigitalWave'
];



?>





