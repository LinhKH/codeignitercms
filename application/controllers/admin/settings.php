<?php


class Settings extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        //Access Control
        if(!$this->session->userdata('logged_in'))
        {
            redirect('admin/login');
        }
    }


    public function index()
    {
        //Get Users
        // $data['users'] = $this->user_model->get_users();

        //Views
        $data['main_content'] = 'admin/settings/index';
        $this->load->view('admin/layouts/main', $data);
    }

}