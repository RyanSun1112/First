<?php
use Core\Session;
use Core\ValidationException;
const BASE_PATH = __DIR__.'/../';
require BASE_PATH.'/vendor/autoload.php';
session_start();

require  BASE_PATH."Core/functions.php";


// spl_autoload_register(function($class){ // on demand
//     $class = str_replace('\\','/',$class);
    
//     require base_path("{$class}.php");
// });

require base_path("bootstrap.php");

$router = new \Core\Router();
$pathways = require base_path("routes.php");
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method =$_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
try{

    $router->route($uri, $method);
}catch(ValidationException $exception){
    Session::flash('errors', $exception->errors);
    Session::flash('old', $exception->old);
    return redirect($router->previousUrl());
}
Session::unflash();
// if ($uri === '/'){
//     require "Controllers/index.php";
// } else if($uri === '/about'){
//     require "Controllers/about.php";

// } else if($uri === '/contact'){
//     require "Controllers/contact.php";
    
// }else{
//     require "Controllers/project.php";
// }

//connecting to MYSQL 

// $config = require("config.php");
// $db = new Database($config['database']);

// $id = $_GET['id'];
// $query = "select * from posts where id = ?";

// $posts= $db->query($query, [$id])-> fetch();
// dd($posts);


// foreach($posts as $post){
//     echo "<li> {$post['title']} <li>";
// }
// class Person
// {
//     public $name;
//     public $age;
    
//     public function breathe()
//     {
//         echo $this->name . " is breathing";
//     }

// }

// $person = new Person();

// $person-> name = 'Ryan Sun';
// $person-> age = 24;

// dd($person-> breathe());

?>