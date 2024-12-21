<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('App_model', 'app_model');
	}

	public function output_json($data, $encode = true)
	{
		if($encode) $data = json_encode($data);
		$this->output->set_content_type('application/json')->set_output($data);
	}

	public function index()
	{
		$this->viewPages('sign_in');
	}
	public function sign_in()
	{
		$this->viewPages('sign_in');
	}
	public function sign_up()
	{
		$this->viewPages('sign_up');
	}

	//viewPages
	public function viewPages($key) 
	{
		switch ($key) {

			case 'sign_in':
				$data['breadcum'] = 'Dashboard';
				$this->load->view('app/pages/sign_in');
			break;

			case 'sign_up':
				$data['breadcum'] = 'Dashboard';
				$this->load->view('app/pages/sign_up');
			break;

			default:
				# code...
				break;
		}
	}

	public function sendDataNewUser()
	{
		$postData = json_decode($this->input->post('value'));
		$postData->ip_address =  getHostByName(getHostName());
		$postData->password = password_hash($postData->password,PASSWORD_DEFAULT);
		$postData->isAdmin = 'N';
		$result = $this->app_model->create('users',$postData);
	    $this->output_json($result);
	}

	public function loginUser()
	{
		date_default_timezone_set('Asia/Tokyo');
		$condition = false;
		$postData = json_decode($this->input->post('value'));
		$result = $this->app_model->getListDataByColumnGeneral('users','email',$postData->email);
		if($result){
			if (password_verify($postData->password, $result['password'])) {
				if($this->saveDataAccessLogin($result)){
					$this->app_model->update('users',['last_login'=> date('Y-m-d H:i:s')],'id_users',$result['id_users']);
					$this->session->set_userdata($result);
					$condition = true;
				}
			}
		}
		$this->output_json($condition);
	}

	public function saveDataAccessLogin($result)
	{
		$data = [
			'id_users' => $result['id_users'],
			'ip_address' => getHostByName(getHostName()),
			'browser_name' => $_SERVER['HTTP_USER_AGENT'],
			'login_status' => 'A'
		];
		$result = $this->app_model->create('login_access',$data);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	public function logoutUser()
	{
			$this->session->sess_destroy();
			redirect('sign-in');
	}
}
