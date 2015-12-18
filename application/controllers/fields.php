<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fields extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		$this->load->model('Fields_model');
	}

	public function index()
	{
		$userID = $this->session->userdata('userID');

		if (isset($userID) && !empty($userID))
		{
			$this->get($userID);
		}
		else
		{
			redirect(site_url('userlogin/login/'));
		}
	}

	public function Add()
	{
		//$this->load->view('fields_add.html');
		$data['title'] = 'Fields Edit';
		$data['userID'] = $this->session->userdata('userID');
		$this->load->view('kidview/fields_add.php', $data);
	}

	public function Add_Post()
	{
		$data['id'] = $_POST['id'];
		//$data['pointID'] = $_POST['pointID'];
		$data['pointName'] = $_POST['pointName'];

		if($this->Fields_model->Add($data))
		{
			//echo 'success';
			redirect(site_url('fields'));
		}
		else
		{
			echo 'failed';
		}
	}

	public function show()
	{
		//$query['fields'] = $this->Fields_model->GetAll();
		//$this->load->view('fields_list.html', $query);
		$this->get(0);
	}


	public function get($id)
	{
		$data['title'] = 'Fields';
		$data['fields'] = $this->Fields_model->GetRecords($id);
		//$this->load->view('fields_list.html', $data);
		$this->load->view('kidview/fields_list.php', $data);
	}



}
