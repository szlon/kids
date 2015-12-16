<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		$this->load->model('Profiles_model');
	}

	public function index()
	{
		$this->show();
	}

	public function Add()
	{
		$this->load->view('profiles_add.html');
	}

	public function Add_Post()
	{
		$data['id'] = $_POST['id'];
		$data['nickname'] = $_POST['nickname'];
		$data['avatar'] = $_POST['avatar'];
		$data['age'] = $_POST['age'];
		$data['sex'] = $_POST['sex'];
		$data['memo'] = $_POST['memo'];
		$data['createTime'] = time();
		$data['updateTime'] = time();

		if($this->Profiles_model->Add($data))
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
		//$query['profiles'] = $this->Profiles_model->GetAll();
		//$this->load->view('profiles_list.html', $query);
		$this->get(0);

	}

	public function get($id)
	{
		$query['profiles'] = $this->Profiles_model->GetRecords($id);
		$this->load->view('profiles_list.html', $query);
	}

}
