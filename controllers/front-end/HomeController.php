<?php

require_once('controllers/Controller.php');

class HomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        return $this->view('front-end/index');
    }
    public function cart(){

        return $this->view('front-end/cart');
    }
    public function products(){

        return $this->view('front-end/products');
    }

    public function topbrands(){

        return $this->view('front-end/topbrands');
    }

    public function contact(){

        return $this->view('front-end/contact');
    }

    public function detail(){

        return $this->view('front-end/detail');
    }


    public function login(){

        return $this->view('front-end/login');
    }


}