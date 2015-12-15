<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Tao
 * Date: 2015/12/15
 * Time: 10:38
 */

class Fields_model extends CI_Model
{
    const TBL = 'fields';

    public function __construct()
    {
        parent::__construct();
    }

    public function Add($data)
    {
        return $this->db->insert(self::TBL, $data);
    }


    public function GetRecords($id=0)
    {
        //sql = "SELECT users.id, users.userName, fields.pointID, fields.pointName FROM users,fields WHERE users.id = 1 AND users.id = fields.id";
        $sql =  "SELECT users.id, users.userName, fields.pointID, fields.pointName FROM users,fields WHERE";

        $sqlWhere = "users.id = fields.id";

        if($id > 0)
        {
            $sql = $sql . " users.id = ? AND ". $sqlWhere;
        }
        else
        {
            $sql = $sql . " users.id > ? AND ". $sqlWhere;
        }

        $query = $this->db->query($sql, array($id));

        return $query->result_array();

    }

}
