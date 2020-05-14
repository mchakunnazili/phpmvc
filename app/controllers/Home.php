<?php

class Home extends Controller {
    public function index()
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $this->model('user_model')->getuser();
        $this->view('tamplates/header', $data);
        $this->view('home/index', $data);
        $this->view('tamplates/footer');
    }
}