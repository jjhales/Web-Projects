<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
// loads dashboard after login if fail directs back to login
	public function index()
	{
		if($this->session->userdata('is_logged_in')){
			// show view/dashboard.php if login valid
			//autoload views with data
			$this->load->view('templates/header');
			// run functions to load dropdown views with data
			$this->employee_name();
			$this->client_fullname();
			$this->client_hour();
			$this->last_10_e();
			$this->calc_pay();
			$this->load->view('templates/footer');
		}else{
			$this->load->view('templates/header');
			$this->load->view('login');
			$this->load->view('templates/footer');
		}
	}//close index
	//loads welcome username 
	public function employee_name(){
		$data ['s_un']= $this->session->userdata('username');
		$this->load->view('dashboard', $data);
	}//closes employee_name
	//loads query data for client data viewd on button client hours
	public function client_hour(){
		$this->load->model("model_users");
		$data['client_hr'] = $this->model_users->client_hours();
		$this->load->view('buttons/client_hours', $data);
		
	}//closes client_hour
	//load query data for client name, employee_id and services in form submit hours displays form submit hours
	public function client_fullname(){
		$this->load->model("model_users");
		//adds client name pulldown to form
		$data['client_name'] = $this->model_users->client_name();
		//adds employee_id hidden to form
		$data['employee_id'] = $this->model_users->emp_id();
		//adds pulldown services
		$data['services'] = $this->model_users->services();
		$this->load->view('submit_hours_form', $data);
	}//closes fullname
	//upon submit validates and redirects, if validation submits to db, upon submission to db table employee_hours trigger runs to subtract hours worked from hours_remain in client table displays in client hours table
	public function submit_hours_valid(){
		//validate entries and post to db
		$this->load->library('form_validation');
		$this->form_validation->set_rules('client_id', 'Client Id', 'required|trim');
		$this->form_validation->set_rules('date', 'Date', 'required|trim');
		$this->form_validation->set_rules('service_id', 'Service Id', 'required|trim');
		$this->form_validation->set_rules('hours_worked', 'Hours Worked', 'required|trim');
		//if statement to success or failure
		if($this->form_validation->run()){
			$data = array(
				"employee_id" => $this->input->post('employee_id'),
				"client_id" => $this->input->post('client_id'),
				"date" => $this->input->post('date'),
				"service_id" => $this->input->post('service_id'),
				"hours_worked" => $this->input->post('hours_worked')
					);
			$query = $this->db->insert('employee_hours', $data);
			$this->load->view('templates/header');
			$this->load->view('hours_submit_success');
			$this->load->view('templates/footer');
			
		}else{
			$this->load->view('templates/header');
			$this->client_fullname();
			$this->load->view('unsuccessful_hours');
			$this->load->view('templates/footer');
			}
	}
	//last 10 entries calls model last_10_emp_entries query for data
	public function last_10_e(){
		$this->load->model("model_users");
		$data['employee_entries'] = $this->model_users->last_10_emp_entries();
		$this->load->view('buttons/last_10_entries', $data);

	}
	//last 10 entries calls model calc_pay_entire query for data
	public function calc_pay(){
		$this->load->model("model_users");
		$data['employee_pay'] = $this->model_users->total_pay();
		$this->load->view('buttons/calc_pay', $data);

	}
	//kills the user session redirects home
	public function logout()
	{
			$this->session->sess_destroy();
			redirect('home');
	}
}//close controller