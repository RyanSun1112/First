<?php
        use Core\App;

    use Core\Database;
    


    $header = "Schedule";
    $db= App::resolve(Database::class);

    
    $schedule = $db->query('select * from schedule where user_id = 1')->all();
    

    view("Schedule/index.view.php", [
        'header'=> 'Schedule',
        'schedule' => $schedule
    ]);
?>