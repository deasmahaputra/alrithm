<?php 

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->view('layout/styling');
		$this->load->view('layout/laundryOwner/main-navbar');
		$this->load->model('auth_model');
	}
	public function logout()
	{
		//unset($_SESSION);
		$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect("auth/login","refresh");
	}

	public function login()
	{	
		$this->form_validation->set_rules('username', 'Username','required');
		$this->form_validation->set_rules('password', 'Password','required|min_length[8]');

		if($this->form_validation->run() == TRUE){

			$username = $_POST['username'];
			$password = md5($_POST['password']);

			$this->db->select('*');
			$this->db->from('users');
			$this->db->where(array('username' => $username, 'password' => $password));
			
			$query = $this->db->get();
			//$query = $this->auth_model->regist($data);
			$user = $query->row();

			if($user->email){
				$this->session->set_flashdata("success", "You are logged in");
				$_SESSION['user_logged'] = TRUE;
				$_SESSION['username'] = $user->username;

				if($user->role == 0){
					redirect("laundryOwner/beranda/index", "refresh");
				}elseif($user->role == 1){
					redirect("superAdmin/beranda/index", "refresh");
				}

				
			}else{
				$this->session->set_flashdata("error", "No such account exists in database");
				redirect("auth/login", "refresh");
			}
		}

		$this->load->view('login');
	}

	public function register()
	{
		if(isset($_POST['register'])){
			$this->form_validation->set_rules('username', 'Username','required');
			$this->form_validation->set_rules('email', 'Email','required');
			$this->form_validation->set_rules('password', 'Password','required|min_length[8]');
			$this->form_validation->set_rules('password2', 'Confirm Password','required|min_length[8]|matches[password]');
			$this->form_validation->set_rules('gender', 'Gender','required');
			$this->form_validation->set_rules('phone', 'Phone','required');
			$this->form_validation->set_rules('role', 'Role','required');
			
			$role = 0;
			if($this->form_validation->run() == TRUE){
				//echo "form validated";

				$data = array(
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => md5($this->input->post('password')),
					'gender' => $_POST['gender'],
					'created_date' => date('Y-m-d H:i:s',strtotime($this->input->post('created_date'))),
					'phone' => $_POST['phone'],
					'role' => $_POST['role']
				);
				

				//$this->db->insert('users', $data);

				$this->auth_model->regist($data);

				$this->session->set_flashdata("success", "Your account has been registered. You can login now");
				redirect("auth/register", "refresh");
			}
		}
		$this->load->view('register');
	}

}

?>