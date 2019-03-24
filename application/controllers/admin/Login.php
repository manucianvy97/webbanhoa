<?php 
    Class Login extends MY_controller
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('admin_model');
        }
        function checklogin()
        {
            $user = $this->input->post('user');
            $password = $this->input->post('pass');
            $where = array('username'=>$user,'password'=>md5($password));
            if($this->admin_model->check_exists($where))
            {
                return true;
            }
            else
            {
                return false;
            }

        }
        function index()
        {
            if ($this->input->post()) 
                {
                    $this->form_validation->set_rules('login','Đăng Nhập','callback_checklogin');
                if($this->form_validation->run())
                {
                    $user = $this->input->post('user');
                    $this->session->set_userdata('login',$user);
                    redirect(admin_url('home/index'));
                }
            }
            $this->load->view('admin/login/index');
        }
        
    }
?>