<?php

class Pages extends Controller {
    public function __construct() {
        // Load model
        //EXAMPLE $this->postModel = $this->model('Post');
    }

    // Index is the default method
    public function index() {
        // Call model function, set to variable
        //EXAMPLE $posts = $this->postModel->getPosts();

        // Pass it to view
        $data = [
            'title' => 'Luminor MVC Framework'
        ];

        
        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'title' => 'About Us'
        ];

        $this->view('pages/about', $data);
    }
}