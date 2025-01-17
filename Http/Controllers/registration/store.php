<?php
    use Core\Validator;
    use Core\App;
    use Core\Database;
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];
    if(!Validator::email($email)){
        $errors['email'] = 'Please provide a valid emial address';
    }
    if(!Validator::string($password, 7, 255)){
        $errors['password'] = 'Please provide a valid password';
        
    }

    if(!empty($errors)){
        return view('registration/create.view.php',[
            'errors' => $errors
        ]);
    }

    $db = App::resolve(Database::class);

    $result = $db->query('select * from users where email = :email',[
        'email' => $email
    ])-> find();

    if($result){
        header('location: /');
        exit();
    }else{
        $db->query('INSErT INTO users(email, password) VALUES(:email, :password)', [
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ]);

        login($user);
        header('location: /');
        exit();
    }
?>