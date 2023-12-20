<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class MainController extends Controller {
	public function index(){
        return $this->call->view('dashboard');
    }
    public function register(){
        $this->call->view('register');
    }
    public function dashboard(){
        return $this->call->view('dashboard');
    }
    public function login(){
        return $this->call->view('login');
    }
}
?>
