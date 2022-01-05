<?php

require_once('controllers/Controller.php');

class HomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){

        return $this->view('admin/index');
    }

    public function titleslogan(){

        return $this->view('admin/titleslogan');
    }

    public function social(){

        return $this->view('admin/social');
    }
    public function copyright(){

        return $this->view('admin/copyright');
    }
    public function slideradd(){

        return $this->view('admin/slideradd');
    }
    public function sliderlist(){

        return $this->view('admin/sliderlist');
    }
    public function addcat(){

        return $this->view('admin/catadd');
    }
    public function catlist(){

        return $this->view('admin/catlist');
    }
    public function addproduct(){

        return $this->view('admin/productadd');
    }
    public function productlist(){

        return $this->view('admin/productlist');
    }







}