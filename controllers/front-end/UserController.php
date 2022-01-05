<?php
	
require_once('controllers/Controller.php');

class UserController extends Controller{

	public function __construct(){
		parent::__construct();	
	}

	public function index(){
		$var1 = 'a';
		$var2 = 'b';
		return $this->view('users',compact('var1','var2'));
	}

	public function edit(){
		
	}

}