<?php 

class About extends Controller{
    
    public function index($name = "Adrian", $job = "Programmer", $age = 18)
    {

        $data['name'] = $name;
        $data['job'] = $job;
        $data['age'] = $age;
        $data['title'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }
    
    public function page()
    {
        $data['title'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    
    }
}

?>