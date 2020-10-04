<?php
defined('BASEPATH') or exit('No direct script access allowed');

class File_manager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('File_manager_model', 'model');

        if(empty($this->session->userdata('user_nik'))) {
            set_status_header(403);
            return redirect('/');
        }
    }

    public function index()
    {
        $data['content'] = 'backend/file-manager/index';
        $data['user_files'] = $this->model->get_by_user_nik($this->session->userdata('user_nik'));
        $this->load->view('layouts/master_file_manager', $data);
    }

    public function get_user_files()
    {
        $data = $this->model->get_by_user_nik($this->session->userdata('user_nik'));

        echo json_encode($data);
    }

    public function upload()
    {
        $path = '/storage/user/';
        $upload_path = '.' . $path . $this->session->userdata('user_nik');
        if(!is_dir($upload_path)) {
            mkdir($upload_path, 0777);
        }

        $file_name = str_replace(' ', '_', $_FILES['file']['name']);
        $_FILES['file']['name'] = $file_name;
        $file = array(
            'user_nik'  => $this->session->userdata('user_nik'),
            'path'      => $path,
            'nama'      => $_FILES['file']['name'],
            'tipe'      => $_FILES['file']['type'],
            'ukuran'    => $_FILES['file']['size']
        );
        $this->model->save($file);

        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|png|jpg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('file');
        $data['file'] = $this->upload->data();
        $data['error'] = $this->upload->display_errors();
        
        echo json_encode($data);
    }
}