<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/Demo/' => 'controllers/index.php',
    '/Demo/about' => 'controllers/about.php',
    '/Demo/notes' => 'controllers/notes.php',
    '/Demo/contact' => 'controllers/contact.php',
    '/Demo/note' => 'controllers/note.php',
];

routeToController($uri, $routes);