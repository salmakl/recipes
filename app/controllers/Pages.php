<?php
session_start();
class Pages extends Controller {

    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function index() {

        $this->view('home');
    }
}
