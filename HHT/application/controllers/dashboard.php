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
			
			$this->load->view('buttons/calc_pay');
			$this->load->view('buttons/last_10_entries');
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
	//load query data for client name, employee_id and services in form submit hours
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
	public function submit_hours_valid(){
		//validate entries and post to db
		$this->load->library('form_validation');
		$this->form_validation->set_rules('client_id', 'Client Id', 'required|trim');
		$this->form_validation->set_rules('date', 'Date', 'required|trim');
		$this->form_validation->set_rules('service_id', 'Service Id', 'required|trim');
		$this->form_validation->set_rules('hours_worked', 'Hours Worked', 'required|trim');

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
			$this->new_client_hours_remain();
			$this->load->view('templates/footer');
			redirect('dashboard');
			
		}else{
			echo 'fail';
		}
	}

	public function new_client_hours_remain(){
		$this->load->model('model_users');
		$data = $this->model_users->update_hours_remain();

	}
	public function logout()
	{
			$this->session->sess_destroy();
			redirect('home');
	}
}//close controller