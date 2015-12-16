<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		$this->load->model('Users_model');
		$this->load->model('Profiles_model');

	}

	public function index()
	{
		$this->show();
	}

	public function Add()
	{
		$this->load->view('users_add.html');
	}

	public function Add_Post()
	{
		$data['userName'] = $_POST['userName'];
		$data['password'] = $_POST['password'];
		$data['regTime'] = time();

		if($this->Users_model->Add($data))
		{
			echo 'success';
		}
		else
		{
			echo 'failed';
		}
	}

	public function show()
	{
		$data['title'] = 'Users';
		$data['users'] = $this->Users_model->GetAll();

		/*
		foreach ($query['users'] as $row)
		{
			echo $row['userName'];
			echo $row['password'];
			echo $row['regTime'];
		}
		*/

		//$this->load->view('users_list.html', $data);
		$this->load->view('users_list.php', $data);

	}

	public function get($id)
	{
		$data['title'] = 'Profiles';
		$data['profiles'] = $this->Profiles_model->GetRecords($id);
		//$this->load->view('profiles_list.html', $data);
		$this->load->view('profiles_list.php', $data);

	}
}
