<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Tao
 * Date: 2015/12/15
 * Time: 10:38
 */

class Profiles_model extends CI_Model
{
    const TBL = 'profiles';

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


    public function GetRecords($id=0)
    {
        //$sql = "SELECT users.id, users.userName, fields.pointName, points.pointValue FROM users, fields, points WHERE users.id = ? AND users.id = fields.id AND users.id = points.id";

        $sql =  "SELECT users.id, users.userName, fields.pointName, points.pointValue FROM users, fields, points WHERE";

        $sqlWhere = "users.id = fields.id AND users.id = points.id AND fields.pointID = points.pointID";

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
