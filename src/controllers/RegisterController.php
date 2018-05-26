<?php
/**
 * Created by PhpStorm.
 * User: ohs70145
 * Date: 2018/05/25
 * Time: 17:20
 */

namespace Acme\controllers;

use Acme\Models\User;
use Acme\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;

class RegisterController extends BaseController
{
    public function getShowRegisterPage() {
//        echo $this->twig->render('register.twig');
        echo $this->blade->render('register');
    }

    public function postShowRegisterPage() {

        $errors = array();

        $validation_data = [
            "first_name" => "min:3",
            "last_name" => "min:3",
            'email' => 'email|equalTo:verify_email',
            'verify_email' => 'email',
            'password' => 'min:3|equalTo:verify_password',
//            'email' => 'equalTo:verify_email',
//            'password' => 'equalTo:verify_password'
        ];

        // validate date
        $validator = new Validator();

        $errors = $validator->isValid($validation_data);

//        print_r($errors);
//        exit();

        if (count($errors) > 0) {

            $_SESSION['msg'] = $errors;
            echo $this->blade->render('register');
            unset($_SESSION['msg']);
            exit();

//            $_SESSION['msg'] = $errors;
//            header("Location: /register");
//            echo $this->twig->render('register.twig', [
//                'errors' => $errors
//            ]);
//            exit();
        }

        // if validation falis, go back to register
        // page and display error message

        // save this data into a database
        $user = new User;
        $user->first_name = $_REQUEST['first_name'];
        $user->last_name = $_REQUEST['last_name'];
        $user->email = $_REQUEST['email'];
        $user->password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
        $user->save();

        echo "Posted";
    }

    public function getShowLoginPage() {
//        echo $this->twig->render('login.twig');
        echo $this->blade->render('login');
    }
}