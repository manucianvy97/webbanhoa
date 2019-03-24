<?php
Class Home extends MY_Controller
{
    function index()
    {
    	$this->data['title']='Trang Quản Trị';
        $this->data['temp'] = 'admin/home/index';
        $this->load->view('admin/main', $this->data);
    }
    
}