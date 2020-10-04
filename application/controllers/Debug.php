<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Debug extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $data = array(
            'session' => $_SESSION,
            'post' => $_POST,
            'file' => $_FILES,
        );

        echo json_encode($data);
    }

    public function set_user_nik($nik)
    {
        $this->session->set_userdata(array(
            'user_nik' => $nik
        ));

        echo("user_nik =>" . $this->session->userdata('user_nik'));
    }

    public function clear_user_nik()
    {
        $this->session->unset_userdata('user_nik');

        echo('Logged out');
    }
}