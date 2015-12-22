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

	public function eidt_post()
	{
		$data['id'] = $_POST['id'];
		$data['pointID'] = $_POST['pointID'];
		$data['pointName'] = $_POST['pointName'];

		if($this->Fields_model->edit($data))
		{
			echo 'edit success';
		}
		else
		{
			echo 'failed';
		}
	}

	public function  del_post()
	{
		$data['id'] = $_POST['id'];
		$data['pointID'] = $_POST['pointID'];

		if($this->Fields_model->del($data))
		{
			echo 'edit success';
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


	public function grid()
	{
		$this->load->view('fields_gridview.php');
	}

	public function ajax_response()
	{
		$json_data = array(
			"current"            => 1,
			"rowCount"            => 10,
			"total"    			=> 2,
			"rows"            => array
			(
				[	"id" => 1,
					"userName" => "TT",
					"pointID"=>1,
					"pointName"=>"字段1"
				],
				[	"id" => 2,
					"userName" => "TT",
					"pointID"=>2,
					"pointName"=>"字段2"
				],
			)
		);

		//var_dump(json_encode($json_data));


		echo json_encode($json_data);
	}

}
