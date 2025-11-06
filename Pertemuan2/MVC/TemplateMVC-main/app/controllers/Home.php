<?php
class Home extends Controller
{
    public function index()
    {
        $data["judul"] = "Data user";
        $data['users'] = $this->model('User_model')->getAllUsers();
        $this->view('templates/header', $data);
        $this->view('list', $data);
        $this->view('templates/footer');
    }

    
}
?>