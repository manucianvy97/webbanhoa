<?php
Class Users extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    /*
     * Lay danh sach user     */
      function index()
    {
        
         $input = array();
        $list = $this->user_model->get_list($input);
        $this->data['list'] = $list;
    
        $total = $this->user_model->get_total();
        $this->data['total'] = $total;
        
        //lay nội dung của biến message
        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

         //suppot
        $this->load->model('suppot_model');
        $content = $this->suppot_model->get_list();
        $this->data['sp'] = $content;

        //footer
        $this->load->model('footer_model');
        $content = $this->footer_model->get_list();
        $this->data['content'] = $content;
        
        $this->data['title']='Quản Trị Người Dùng';
        $this->data['title_page']='Trang Quản Trị Người Dùng';
        //hiển thị ra view
        $this->data['temp'] = 'admin/users/index';
        $this->load->view('admin/index', $this->data);
    }

  function del()
    {
        $id = $this->uri->rsegment('3');
        $id = intval($id);
        //lay thong tin cua quan tri vien
        $info = $this->user_model->get_info($id);
        if(!$info)
        {
            $this->session->set_flashdata('message', 'Không tồn tại thành viên');
            redirect(admin_url('users'));
        }
        //thuc hiện xóa
        $this->user_model->delete($id);
        
        $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
        redirect(admin_url('users'));
    }
    
    
   
}



