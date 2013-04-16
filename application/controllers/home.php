<?php

class Home extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Home";
        $data['content'] = 'home/index';
        $this->load->view($this->layout, $data);
    }

    public function login() {
        $data['title'] = "Home";
        $data['content'] = 'home/login';
        $this->load->view($this->layout, $data);
    }    

    public function signup() {
        $data['title'] = "Home";
        $data['content'] = 'home/signup';
        $this->load->view($this->layout, $data);
    }    

    public function about() {
        $data['title'] = "Home";
        $data['content'] = 'home/about';
        $this->load->view($this->layout, $data);
    }    
    
}