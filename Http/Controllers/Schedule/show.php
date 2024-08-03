<?php
    use Core\Database;
    use Core\App;

    $header = "Note";
    $db= App::resolve(Database::class);

    

        
        
        $note = $db->query('select * from schedule where id = :id',['id'=> $_GET['id']])->findOrFail();
        
        
        $currentUserId = 1;
        
        authorize($note['user_id']=== $currentUserId);
        
        
        view("Schedule/show.views.php", [
            'header'=> 'Note',
            'note' => $note
        ]);
    
        ?>