<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Points extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		$this->load->model('Points_model');
	}

	public function index()
	{
		$this->show();
	}

	public function Add()
	{
		$this->load->view('points_add.html');
	}

	public function Add_Post()
	{
		$data['id'] = $_POST['id'];
		$data['pointID'] = $_POST['pointID'];
		$data['pointValue'] = $_POST['pointValue'];
		$data['pointTime'] = time();

		if($this->Points_model->Add($data))
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
		//$query['points'] = $this->Points_model->GetAll();
		//$this->load->view('points_list.html', $query);
		$this->get(0);
	}


	public function get($id)
	{
		$query['points'] = $this->Points_model->GetRecords($id);
		$this->load->view('points_list.html', $query);
	}


}
