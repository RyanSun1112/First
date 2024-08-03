<?php
    use Core\Database;
    use Core\App;

    $header = "Note";
    // $config = require base_path("config.php");
    // $db = new Database($config['database']);
    $db= App::resolve(Database::class);  //Core\Database
    
        $note = $db->query('select * from schedule where id = :id',['id'=> $_POST['id']])->findOrFail();
        
        
        $currentUserId = 1;
        
        authorize($note['user_id']=== $currentUserId);

        $db->query('delete from schedule where id = :id', [
            'id' => $_POST['id']
        ]);

        header('location: /Schedule');
        exit();
    
        ?>