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
		$this->show();
	}

	public function Add()
	{
		$this->load->view('fields_add.html');
	}

	public function Add_Post()
	{
		$data['id'] = $_POST['id'];
		$data['pointID'] = $_POST['pointID'];
		$data['pointName'] = $_POST['pointName'];

		if($this->Fields_model->Add($data))
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
		//$query['fields'] = $this->Fields_model->GetAll();
		//$this->load->view('fields_list.html', $query);
		$this->get(0);
	}


	public function get($id)
	{
		$data['title'] = 'Fields';
		$data['fields'] = $this->Fields_model->GetRecords($id);
		//$this->load->view('fields_list.html', $data);
		$this->load->view('fields_list.php', $data);
	}



}
