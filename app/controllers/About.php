<?php

class About extends Controller {
    public function index($nama = 'Chaqun', $pekerjaan = 'Calon Presiden Republik Indonesia')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'About Me';
        $this->view('tamplates/header', $data);
        $this->view('about/index', $data);
        $this->view('tamplates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Halaman page';
        $this->view('tamplates/header', $data);
        $this->view('about/page');
        $this->view('tamplates/footer');
    }
}