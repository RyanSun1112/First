<?php
// return [
//     '/' => "/index.php", 
//     '/about' => "/about.php", 
//     '/contact' => "/contact.php",
//     '/project' => "/project.php", 
//     '/Schedule' => "/Schedule/index.php", 
//     '/note' => "/Schedule/show.php", 
//     '/note/create' => '/Schedule/create.php',
// ];

$router->get('/', '/index.php'); // manuel
$router->get('/about',"/about.php");
$router->get('/contact',"/contact.php");
$router->get('/project', "/project.php");
$router->get('/Schedule', "/Schedule/index.php")->only('auth');
$router->get('/note', "/Schedule/show.php");
$router->patch('/note', "/Schedule/update.php");
$router->get('/note/edit', "/Schedule/edit.php");
$router->delete('/note', "/Schedule/destroy.php");
$router->get('/note/create', '/Schedule/create.php');
$router->post('/note', '/Schedule/store.php');
$router->get('/register', '/registration/create.php')->only('guest');
$router->post('/register', '/registration/store.php');

$router->get('/login', '/sessions/create.php')->only('guest');
$router->post('/login', '/sessions/store.php')->only('guest');
$router->delete('/logout', '/sessions/destroy.php')->only('auth');

?>