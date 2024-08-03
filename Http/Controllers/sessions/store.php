<?php
use Core\Session;
use Http\Forms\LoginForm;
use Core\Authenticator;
use Core\ValidationException;



// $email = $_POST['email'];
// $password = $_POST['password'];

$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$signedIn = (new Authenticator)->attempt($attributes['email'], $atributes['password']);
if(!$signedIn){
    $form->error('email','No matching account found for that email address and password.')->throw();
}
    
redirect('/');







// return view('sessions/create.view.php', [
//     'errors' => $form->errors()
// ]);



// if (! empty($errors)) {
//     return view('sessions/create.view.php', [
//         'errors' => $errors
//     ]);
// }
// $errors = [];
// if (!Validator::email($email)) {
//     $errors['email'] = 'Please provide a valid email address.';
// }

// if (!Validator::string($password)) {
//     $errors['password'] = 'Please provide a valid password.';
// }


