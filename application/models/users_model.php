<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Tao
 * Date: 2015/12/15
 * Time: 10:38
 */

class Users_model extends CI_Model
{
    const TBL = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function Add($data)
    {
        return $this->db->insert(self::TBL, $data);
    }

    public function GetAll()
    {
        $query = $this->db->get(self::TBL);
        return $query->result_array();
    }

}
