<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TT_Session extends CI_Session
{
    public $logged_in = FALSE;
    public $userID = 0;

    public function __construct()
    {
        parent :: CI_Session();
        $this->is_logged_in();
    }

    public function is_logged_in()
    {
        $userID = $this->userdata('userID');

        if (isset($userID) && !empty($userID))
        {
            $this->logged_in = TRUE;
        }
        else
        {
            $this->logged_in = FALSE;
        }

        //$this->logged_in = ($logged) ? TRUE : FALSE;
    }
}




