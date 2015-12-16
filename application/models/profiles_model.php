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
        //$sql = "SELECT users.id, users.userName, profiles.nickname, profiles.avatar, profiles.age, profiles.sex, profiles.memo, profiles.createTime, profiles.updateTime FROM users, profiles WHERE users.id = 1 AND users.id = profiles.id";

        $sql =  "SELECT users.id, users.userName, profiles.nickname, profiles.avatar, profiles.age, profiles.sex, profiles.memo, profiles.createTime, profiles.updateTime FROM users, profiles WHERE";

        $sqlWhere = "users.id = profiles.id";

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
