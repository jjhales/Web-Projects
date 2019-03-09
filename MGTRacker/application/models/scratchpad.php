if(password_verify($userPass, $result)){ 
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => 1);
			$this->session->set_userdata($data);
			redirect ('Dashboard');
			}else{
			// loads login.php login form again
				$this->load->view('templates/header3');
				$this->load->view('errors/signin_error');
				$this->load->view('templates/footer');
			}