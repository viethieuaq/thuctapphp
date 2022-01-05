<?php
require_once('controllers/Controller.php');
require_once('models/User.php');

class AuthController extends Controller{

    public function register(){
        // validate data

        // create user
        $user = new User();

        if(empty($this->data['username'] ||
            $this->data['password'] ||
            $this->data['email'] ||
            $this->data['first_name'] ||
            $this->data['middle_name'] ||
            $this->data['last_name'] ||
            $this->data['phone'] ||
            $this->data['address'] ||
            $this->data['date_of_birth']))
        {
            echo '<script>alert("Khong duoc de trong 1 truogn nao")</script>';
            return $this->view("front-end/login");
        }





        //$user->create($this->data);


        /*$this->data['username'] = 'viethieu111';
                $this->data['password'] = '123456';
                $this->data['email'] = 'viethieu@gmail.com';

                $this->data['first_name'] = 'hieu';
                $this->data['middle_name'] = 'viet';
                $this->data['last_name'] = 'nguyen';
                $this->data['address'] = 'an quy';
                $this->data['phone'] = '123456';
                $this->data['date_of_birth'] = '2000-11-16';*/

        // return user was created


    }

}