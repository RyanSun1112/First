<?php
use Core\Database;
use Core\App;
use Core\Validator;

$header = "Note";
$db= App::resolve(Database::class);



    
    
    $note = $db->query('select * from schedule where id = :id',['id'=> $_POST['id']])->findOrFail();
    
    
    $currentUserId = 1;
    
    authorize($note['user_id']=== $currentUserId);
    $errors = [];

    if(!Validator::string($_POST['body'], 1, 1000)){
        $errors['body'] ='Bad';
    }

    if(count($errors)){
        return view("notes/edit.view.php",[
            'header' => 'Edit note',
            'errors' => $errors,
            'note' => $note
        ]);
    }


    $db->query('update schedule set body = :body where id = :id', [
        'id' => $_POST['id'],
        'body' => $_POST['body']
    ]);
    // $db-> query('update schedule set body = :body where id :id',[
    //     'id' => $_POST['id'],
    //     'body' => $_POST['body']
    // ]);


    header('location: /Schedule');
    die();

?>