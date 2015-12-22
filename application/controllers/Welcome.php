<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function bootgrid()
	{
		$this->load->view('index.php');
	}

	public function bootgrid_Post()
	{
		$json_data = array(
			"current"            => 1,
			"rowCount"            => 10,
			"total"    			=> 1,
			"rows"            => array
			(
				[	"id" => 1,
					"employee_name" => "Bob",
					"employee_salary"=>5000,
					"employee_age"=>20
				],

				[	"id" => 2,
					"employee_name" => "Tiger",
					"employee_salary"=>6000,
					"employee_age"=>21
				],


			)
		);

		//var_dump(json_encode($json_data));


		echo json_encode($json_data);  // send data as json format

	}
}
