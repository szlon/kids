<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Points extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();

		$this->load->model('Points_model');
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
		$userID = $this->session->userdata('userID');

		$data['fields'] = $this->Fields_model->GetRecords($userID);

		//$this->load->view('points_add.html');
		$data['title'] = 'Points Edit';
		$data['userID'] = $userID;
		$this->load->view('kidview/points_add.php', $data);
	}

	public function Add_Post()
	{
		$data['id'] = $_POST['id'];
		$data['pointID'] = $_POST['pointID'];
		$data['pointValue'] = $_POST['pointValue'];
		$data['pointTime'] = time();

		//echo $data['pointID'].' - '.$data['pointValue'];

		if($this->Points_model->Add($data))
		{
			//echo 'success';
			redirect(site_url('points'));
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
		$data['title'] = 'Points';
		$data['points'] = $this->Points_model->GetRecords($id);
		$data['pointSum'] = $this->Points_model->GetSum($id);

		//$this->load->view('points_list.html', $data);
		$this->load->view('kidview/points_list.php', $data);
	}


}
