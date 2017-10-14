<?php 

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->view('layout/styling');
		$this->load->view('layout/laundryOwner/main-navbar');
	}
	public function logout()
	{
		unset($_SESSION);
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

			$user = $query->row();

			if($user->email){
				$this->session->set_flashdata("success", "You are logged in");
				$_SESSION['user-logged'] = TRUE;
				$_SESSION['username'] = $user->username;

				redirect("laundryOwner/beranda/index", "refresh");
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
			

			if($this->form_validation->run() == TRUE){
				//echo "form validated";

				$data = array(
					'username' => $_POST['username'],
					'email' => $_POST['email'],
					'password' => md5($this->input->post('password')),
					'gender' => $_POST['gender'],
					'created_date' => date('Y-m-d H:i:s',strtotime($this->input->post('created_date'))),
					'phone' => $_POST['phone']
				);
				// $date = date('y-m-d');

				// $data['username'] =    $this->input->post('username');
				// $data['email']  =    $this->input->post('email');
				// $data['password'] =    md5($this->input->post('password'));
				// $data['gender']   =    $this->input->post('gender');
				// $data['created_date']   =    $this->input->post($date);
				// $data['phone']   =    $this->input->post('phone');

				$this->db->insert('users', $data);

				$this->session->set_flashdata("success", "Your account has been registered. You can login now");
				redirect("auth/register", "refresh");
			}
		}
		$this->load->view('register');
	}

}

?>