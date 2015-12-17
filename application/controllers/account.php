<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();

        $this->load->model('account_model');

    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $this->load->view('account/login');
    }

    public function login_post()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('userName', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run () == FALSE)
        {
           // echo 'Input Error';
            $this->form_validation->set_message('login_post', '用户名不存在');
            $this->load->view('account/login');
        }
        else
        {
            $typeName = $_POST['typeName'];

            if (isset($typeName) && !empty($typeName))
            {
                $data = array
                (
                    'userName' => $_POST ['userName'],
                    'password' => $_POST ['password']
                    //'password' => md5($_POST ['password'])
                );

                $sessionData = array
                (
                    'userName'  =>  $data ['userName'] ,
                    'loginIP'     => $_SERVER['REMOTE_ADDR'],
                    'loginTime'   =>time()
                );

                if ($typeName == 'login')
                {
                    $query = $this->db->get_where('users', array ('userName' => $data ['userName']), 1, 0 );

                    foreach ( $query->result () as $row )
                    {
                        //echo ' [ '. $row->userName.' : ' .$row->password.' ] ';
                        $pass = $row->password;
                        $userID = $row->id;
                    }

                    if ($pass == $data ['password'])
                    {
                        $sessionData['userID'] = $userID;
                        $this->session->set_userdata($sessionData);

                        echo 'Logined';

                        echo $this->session->userdata('userName');
                        echo $this->session->userdata('userID');

                        redirect(site_url('points'));

                        //$this->load->view('points');
                    }
                    else
                    {
                        echo 'login failed!';
                        redirect(site_url('account/login/'));
                    }
                }
                else if ($typeName == 'register')
                {
                    $this->session->set_userdata($sessionData);

                    $data['regTime'] = time();
                    $this->db->insert('users', $data );

                    //$this->load->view('usercenter', $data );
                }
                else
                {
                    $this->session->sess_destroy();
                    $this->load->view('account/login/');
                }

            }

        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        $this->load->view('account/login');
    }


}



