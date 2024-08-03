<?php

use Core\Database;
use Core\Validator;
use Core\App;

$db= App::resolve(Database::class);



// if(!Validator::email('f@gmail.com')){

// }


$errors = [];

    if(!Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] ='Bad';
    }
    
    if(!empty($errors)){
        view("Schedule/view.create.php", [
            'header'=> 'Create Note',
            'errors' => $errors,
        ]);
    }
    
        $db->query('INSERT INTO schedule(body, Time, user_id) VALUES(:body, :Time, :user_id)',[
            'body'=> $_POST['body'],
            'Time' => "2020-06-06 06:06:06",
            'user_id' => "1"
        ]);
    
    
    

    header('location: /Schedule');
    die();

?>