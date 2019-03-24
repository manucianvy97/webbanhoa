<?php
Class Footer extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('footer_model');
    }
    
    /*
     * Lay danh sach admin
     */
    function edit()
    {
        $data = array();
            $id = $this->uri->segment(4);
            $row = $this->footer_model->get_info($id);
            $this->load->library('form_validation');
            if ($this->input->post()) {
                # code...
                $this->form_validation->set_rules('main','Nội Dung','required');
                if ($this->form_validation->run()) {
                    # code...
                    $nd = $this->input->post('main');
                    $input = array('content'=>$nd);
                    $this->footer_model->update($id,$input);
                    $this->session->set_flashdata('mess','Đã sửa thành công');
                    $row->content = $nd;
                }
            }
        $this->data['row'] = $row;
        $this->data['title']='Thông Tin';
        $this->data['title_page']='Nội dung';
        $this->data['temp'] = 'admin/footer/index';
        $this->load->view('admin/main', $this->data);
    }
}