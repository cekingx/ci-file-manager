<?php

class File_manager_model extends CI_Model
{
    private $table = 'file_manager';

    public $file_manager_id;
    public $file_manager_user_nik;
    public $file_manager_path;
    public $file_manager_nama;
    public $file_manager_tipe;
    public $file_manager_ukuran;

    public function __construct()
    {
        parent::__construct();
    }

    public function get_by_user_nik($user_nik)
    {
        return $this->db->get_where($this->table, array('file_manager_user_nik' => $user_nik))->result();
    }

    public function save($data)
    {
        $this->file_manager_user_nik    = $data['user_nik'];
        $this->file_manager_path        = $data['path'];
        $this->file_manager_nama        = $data['nama'];
        $this->file_manager_tipe        = $data['tipe'];
        $this->file_manager_ukuran      = $data['ukuran'];

        $this->db->insert($this->table, $this);
    }
}