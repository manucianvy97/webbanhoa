<?php
Class Suppot extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('suppot_model');
    }
    
    /*
     * Lay danh sach admin
     */
    function edit()
    {
        $data = array();
            $id = $this->uri->segment(4);
            $row = $this->suppot_model->get_info($id);
            $this->load->library('form_validation');
            if ($this->input->post()) {
                # code...
                $this->form_validation->set_rules('name','Tên','required');
                $this->form_validation->set_rules('phone','Số điện thoại','required');
                $this->form_validation->set_rules('email','Địa Chỉ Email','required');
                if ($this->form_validation->run()) {
                    # code...
                    $ten = $this->input->post('name');
                    $sdt = $this->input->post('phone');
                    $mail = $this->input->post('email');
                    $input = array(
                        'name'=>$ten,
                        'email'=>$mail,
                        'phone'=>$sdt);
                    $this->suppot_model->update($id,$input);
                    $this->session->set_flashdata('mess','Đã sửa thành công');
                    $row->name = $ten;
                    $row->email = $mail;
                    $row->phone = $sdt;
                }
            }
        $this->data['row'] = $row;
        $this->data['title']='Hỗ Trợ';
        $this->data['title_page']='Thông Tin';
        $this->data['temp'] = 'admin/suppot/index';
        $this->load->view('admin/main', $this->data);
    }
    
}