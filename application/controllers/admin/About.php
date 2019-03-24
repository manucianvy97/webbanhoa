<?php
Class About extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('about_model');
    }
    
    /*
     * Lay danh sach admin
     */
    function edit()
    {
        $data = array();
            $id = $this->uri->segment(4);
            $row = $this->about_model->get_info($id);
            $this->load->library('form_validation');
            if ($this->input->post()) {
                # code...
                $this->form_validation->set_rules('main','Nội Dung','required');
                if ($this->form_validation->run()) {
                    # code...
                    $nd = $this->input->post('main');
                    $input = array('content'=>$nd);
                    $this->about_model->update($id,$input);
                    $this->session->set_flashdata('mess','Đã sửa thành công');
                    $row->content = $nd;
                     redirect(admin_url('about/edit/Content'));
                }
            }
        $this->data['row'] = $row;
        $this->data['title']='Giới Thiệu';
        $this->data['title_page']='Nội dung';
        $this->data['temp'] = 'admin/about/index';
        $this->load->view('admin/main', $this->data);
    }
}