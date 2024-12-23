<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

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
		if(!$this->session->userdata('email')){
			redirect('sign-in');
		}
	}

	public function output_json($data, $encode = true)
	{
		if($encode) $data = json_encode($data);
		$this->output->set_content_type('application/json')->set_output($data);
	}

	public function index()
	{
		$this->t_tryout();
	}

	public function dashboard()
	{
		$this->viewPages('dashboard');
	}
	public function billing()
	{
		$this->viewPages('billing');
	}
	public function m_course()
	{
		$this->viewPages('m_course');
	}
	public function m_questions()
	{
		$this->viewPages('m_questions');
	}
	public function t_tryout()
	{
		$this->viewPages('t_tryout');
	}
	public function do_tryout($id)
	{
		$this->viewPages('do_tryout');
	}
	public function result_tryout($id)
	{
		$this->viewPages('result_tryout');
	}
	public function list_result_tryout($id)
	{
		$this->viewPages('list_result_tryout');
	}
	public function t_bimbel()
	{
		$this->viewPages('t_bimbel');
	}
	public function do_bimbel($id)
	{
		$this->viewPages('do_bimbel');
	}
	public function m_packages()
	{
		$this->viewPages('m_packages');
	}

	public function viewPages($key) 
	{
		switch ($key) {
			case 'billing':
				$data['breadcum'] = 'Billing';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/billing');
				$this->load->view('app/pages/footer');
			break;

			case 'dashboard':
				$data['breadcum'] = 'Dashboard';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/dashboard');
				$this->load->view('app/pages/footer');
			break;

			case 'm_course':
				$data['breadcum'] = 'List Course';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/m_course', $data);
				$this->load->view('app/pages/footer');
			break;

			case 'm_questions':
				$data['breadcum'] = 'List Questions';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/m_questions');
				$this->load->view('app/pages/footer');
			break;

			case 't_tryout':
				$data['breadcum'] = 'List Tryout';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/t_tryout');
				$this->load->view('app/pages/footer');
			break;

			case 'do_tryout':
				$data['breadcum'] = 'Do Tryout';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/do_tryout');
				$this->load->view('app/pages/footer');
			break;

			case 'result_tryout':
				$data['breadcum'] = 'Result Tryout';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/result_tryout');
				$this->load->view('app/pages/footer');
			break;

			case 'list_result_tryout':
				$data['breadcum'] = 'List Result Tryout';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/list_result_tryout');
				$this->load->view('app/pages/footer');
			break;

			case 't_bimbel':
				$data['breadcum'] = 'List Bimbel';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/t_bimbel');
				$this->load->view('app/pages/footer');
			break;

			case 'do_bimbel':
				$data['breadcum'] = 'Do Bimbel';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/do_bimbel');
				$this->load->view('app/pages/footer');
			break;

			case 'm_packages':
				$data['breadcum'] = 'List Packages';
				$this->load->view('app/pages/header', $data);
				$this->load->view('app/pages/m_packages');
				$this->load->view('app/pages/footer');
			break;

			default:
				# code...
				break;
		}
	}

	public function sendData()
	{
		$postData = json_decode($this->input->post('value'));
		$result = $this->app_model->create('m_course',$postData);
	    $this->output_json($result);
	}

	public function sendDataPackages()
	{
		$postData = json_decode($this->input->post('value'));
		$result = $this->app_model->create('m_packages',$postData);
	    $this->output_json($result);
	}

	public function sendDataQuestions()
	{
		$postData = json_decode($this->input->post('value'));
		$result = $this->app_model->create('m_questions',$postData);
	    $this->output_json($result);
	}
	public function sendDataEditCourseToDB()
	{
		$postData = json_decode($this->input->post('value'));
		$oldPhoto = json_decode($this->input->post('oldPhoto'));
		if ($oldPhoto < 1){
			$result = $this->delete_photo('m_course','course',json_decode($this->input->post('id')), 'id_course', 'id_course','course_banner');
		}
		$result = $this->app_model->update('m_course',$postData, 'id_course', json_decode($this->input->post('id')));
	    $this->output_json($postData);
	}
	public function sendDataEditPackageToDB()
	{
		$postData = json_decode($this->input->post('value'));
		$oldPhoto = json_decode($this->input->post('oldPhoto'));
		if ($oldPhoto < 1){
			$result = $this->delete_photo('m_packages','course',json_decode($this->input->post('id')), 'id_package', 'id_package','package_banner');
		}
		$result = $this->app_model->update('m_packages',$postData, 'id_package', json_decode($this->input->post('id')));
	    $this->output_json($postData);
	}
	public function sendDataEditQuestionsToDB()
	{
		$postData = json_decode($this->input->post('value'));
		$result = $this->app_model->update('m_questions',$postData, 'id_questions', json_decode($this->input->post('id')));
	    $this->output_json($postData);
	}
	
	public function sendDataAnswers()
	{
		$postData = json_decode($this->input->post('value'), true);
		$result = $this->calculateResultAnswers($postData);
		$query = $this->app_model->create('list_answers',$result);
	    $this->output_json($query);
	}
	
	
	public function add_course()
	{
		$this->addPages('add_course');
	}
	public function add_questions()
	{
		$this->addPages('add_questions');
	}
	public function add_packages()
	{
		$this->addPages('add_packages');
	}
	

	public function addPages($key) 
	{
		switch ($key) {
			case 'add_course':
				$data['breadcum'] = 'Add Course';
				$this->load->view('app/pages/header',$data);
				$this->load->view('app/pages/add_course',$data);
				$this->load->view('app/pages/footer');
			break;

			case 'add_questions':
				$data['breadcum'] = 'Add Question';
				$this->load->view('app/pages/header',$data);
				$this->load->view('app/pages/add_questions',$data);
				$this->load->view('app/pages/footer');
			break;

			case 'add_packages':
				$data['breadcum'] = 'Add Package';
				$this->load->view('app/pages/header',$data);
				$this->load->view('app/pages/add_packages',$data);
				$this->load->view('app/pages/footer');
			break;
			
			default:
				# code...
				break;
		}
	}

	public function edit_course($id)
	{
		$this->editPages('edit_course');
	}
	public function edit_questions($id)
	{
		$this->editPages('edit_questions');
	}
	public function edit_packages($id)
	{
		$this->editPages('edit_packages');
	}

	public function editPages($key) 
	{
		switch ($key) {
			case 'edit_course':
				$data['breadcum'] = 'Edit Course';
				$this->load->view('app/pages/header',$data);
				$this->load->view('app/pages/edit_course',$data);
				$this->load->view('app/pages/footer');
			break;
			
			case 'edit_questions':
				$data['breadcum'] = 'Edit Question';
				$this->load->view('app/pages/header',$data);
				$this->load->view('app/pages/edit_questions',$data);
				$this->load->view('app/pages/footer');
			break;

			case 'edit_packages':
				$data['breadcum'] = 'Edit Package';
				$this->load->view('app/pages/header',$data);
				$this->load->view('app/pages/edit_packages',$data);
				$this->load->view('app/pages/footer');
			break;

			default:
				# code...
				break;
		}
	}

	public function getDataDatabaseJSON($key, $params = '')
	{
		switch ($key) {
			case 'm_course':
				$data = $this->app_model->getListData('m_course','id_course');
				$this->output_json($data);
			break;

			case 'm_course_search':
				$data = $this->app_model->getListData('m_course','id_course',$params, 'course_name', 'like');
				$this->output_json($data);
			break;

			case 'm_course_search_to':
				$data = $this->app_model->getListDataMyTryout('a.course_name','like',$params);
				$this->output_json($data);
			break;

			case 'm_course_search_by_id':
				$data = $this->app_model->getListData('m_course','id_course',$params,'id_course', 'equals');
				$this->output_json($data);
			break;
			case 'm_course_search_by_id_like':
				$data = $this->app_model->getListDataMyTryout(['a.course_name','a.id_course'],'list_like', $params);
				$this->output_json($data);
			break;
			case 'm_questions':
				$data = $this->app_model->getListDataQuestions();
				$this->output_json($data);
			break;

			case 'm_questions_search':
				$data = $this->app_model->getListDataQuestions('q.question_description','like',$params);
				$this->output_json($data);
			break;

			case 'm_questions_search_by_id':
				$data = $this->app_model->getListDataQuestions('q.id_questions','equals',$params);
				$this->output_json($data);
			break;

			case 'm_questions_search_course':
				$data = $this->app_model->getListDataQuestions('q.id_course','equals',$params);
				$this->output_json($data);
			break;
			
			case 'my_tryout':
				$data = $this->app_model->getListDataMyTryout();
				$this->output_json($data);
			break;

			case 'my_tryout_list_id':
				$ids = join("','",$params);
				$data = $this->app_model->getListDataMyTryout('a.id_course','list',$ids);
				$this->output_json($data);
			break;
			

			case 'do_tryout':
				$data = $this->app_model->getListDataQuestions('c.uuid','do',$params);
				$this->output_json($data);
			break;

			case 'list_result_tryout':
				$data = $this->app_model->getListDataQuestions('uuid_course','list_to',$params);
				$this->output_json($data);
			break;

			case 'data_result_tryout':
				$data = $this->resultDoAnswer($params);
				$this->output_json($data);
			break;

			case 'my_bimbel':
				$data = $this->app_model->getListDataMyBimbel();
				$this->output_json($data);
			break;

			case 'm_package':
				$data = $this->app_model->getListDataMyPackages();
				$this->output_json($data);
			break;

			case 'm_package_search_by_id':
				$data = $this->app_model->getListDataMyPackages('id_package','equals',$params);
				$this->output_json($data);
			break;
			
			default:
				# code...
				break;
		}
	}



	public function list_data_m_course()
	{
		$this->getDataDatabaseJSON("m_course");
	}
	public function list_data_m_course_search()
	{
		$this->getDataDatabaseJSON("m_course_search", json_decode($this->input->get('val')));
	}
	public function list_data_m_course_search_to()
	{
		$this->getDataDatabaseJSON("m_course_search_to", json_decode($this->input->get('val')));
	}
	public function list_data_m_course_search_by_id()
	{
		$this->getDataDatabaseJSON("m_course_search_by_id", json_decode($this->input->get('val')));
	}
	public function list_data_m_course_search_to_like_by_id()
	{
		$this->getDataDatabaseJSON("m_course_search_by_id_like", $this->input->get('val'));
	}
	public function list_data_m_questions()
	{
		$this->getDataDatabaseJSON("m_questions");
	}
	public function list_data_m_questions_search()
	{
		$this->getDataDatabaseJSON("m_questions_search", json_decode($this->input->get('val')));
	}
	public function list_data_m_questions_search_by_id()
	{
		$this->getDataDatabaseJSON("m_questions_search_by_id", json_decode($this->input->get('val')));
	}
	public function list_data_m_questions_search_course()
	{
		$this->getDataDatabaseJSON("m_questions_search_course", json_decode($this->input->get('val')));
	}
	public function list_data_my_tryout()
	{
		$this->getDataDatabaseJSON("my_tryout");
	}
	public function list_data_my_tryout_by_list_id()
	{
		$this->getDataDatabaseJSON("my_tryout_list_id", json_decode($this->input->get('val')));
	}
	public function data_result_tryout()
	{
		$this->getDataDatabaseJSON("data_result_tryout", json_decode($this->input->get('val')));
	}
	public function list_data_do_tryout()
	{
		$this->getDataDatabaseJSON("do_tryout", json_decode($this->input->get('val')));
	}
	public function list_data_result_tryout()
	{
		$this->getDataDatabaseJSON("list_result_tryout", $this->input->get('val'));
	}
	public function list_data_my_bimbel()
	{
		$this->getDataDatabaseJSON("my_bimbel");
	}
	public function list_data_m_package()
	{
		$this->getDataDatabaseJSON("m_package");
	}
	public function list_data_m_package_search_by_id()
	{
		$this->getDataDatabaseJSON("m_package_search_by_id", json_decode($this->input->get('val')));
	}
	
	public function deleteDataDatabaseJSON($key, $params = '')
	{
		switch ($key) {
			case 'm_course':
				$data = $this->delete_photo('m_course','course',$params, 'id_course', 'id_course','course_banner');
				$data = $this->app_model->delete('m_course',$params,'id_course');
				$this->output_json($data);
			break;

			case 'm_questions':
				$data = $this->app_model->delete('m_questions',$params, 'id_questions');
				$this->output_json($data);
			break;
			
			case 'm_package':
				$data = $this->delete_photo('m_packages','course',$params, 'id_package', 'id_package','package_banner');
				$data = $this->app_model->delete('m_packages',$params,'id_package');
				$this->output_json($data);
			break;

			default:
				# code...
				break;
		}
	}

	public function delete_data_m_course()
	{
		$this->deleteDataDatabaseJSON("m_course", json_decode($this->input->get('val')));
	}
	public function delete_data_m_questions()
	{
		$this->deleteDataDatabaseJSON("m_questions", json_decode($this->input->get('val')));
	}
	public function delete_data_m_package()
	{
		$this->deleteDataDatabaseJSON("m_package", json_decode($this->input->get('val')));
	}

	//importExcelQuestions
	public function importExcelQuestions()
	{
		
		 if(isset($_FILES["file"]["name"])){
		 	 $path = $_FILES["file"]["tmp_name"];
		 	 $this->output_json(json_decode($path));
		 }
	}
	///upload
	public function upload_photo()
	{
		$id = $this->randomID();
		$config['upload_path'] = './assets/app/images/course';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] 	= $id;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('file')){
            $status = "error";
            $msg = $this->upload->display_errors();
        }
        else{
            $dataupload = $this->upload->data();
            $status = "success";
            $msg = $id;
        }
        $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>$status,'msg'=>$dataupload['file_name'])));
	}

	public function delete_photo($table, $folder, $id, $order_by, $column_search, $column_photo)
	{
		$data = $this->app_model->getListData($table, $order_by, $id, $column_search, 'equals');
		if($data){
			unlink('./assets/app/images/'.$folder.'/'.$data[$column_photo]);
		}
	}

	public function randomID()
	{
		$str = rand();
		return md5($str);
	}

	public function calculateResultAnswers($data)
	{
		$query = $this->app_model->getListDataQuestions('q.id_course','equals',$data['id_course']);
		$good_answers = 0;
		$wrong_answers = 0;
		$value_answers = 0;
		$count = 1;
		foreach ($query as $key) {
			$keyData = $key["id_questions"].'-answer';
			$ansval = $data['list_answers'][$keyData];
			if ($ansval == $key['answer']) {
				$good_answers++;
				$value_answers += (1 * $key['bobot']);
			}else{
				$wrong_answers++;
			}
		}
		$result = [
			'id_users' => $data['id_users'],
			'uuid_list_answers' => $data['uuid_list_answers'],
			'id_course' => $data['id_course'],
			'uuid_course' => $data['uuid_course'],
			'list_answers' => json_encode($data['list_answers']),
			'good_answers' => $good_answers,
			'wrong_answers' => $wrong_answers,
			'value_answers' => $value_answers,
			'start_time' => $data['start_time'],
			'end_time' => $data['end_time'],
			'status_answers' => "D",
		];
		return $result;
	}

	public function resultDoAnswer($id)
	{
		
		$header = $this->app_model->getListDataQuestions('uuid_list_answers','result_to',$id);
		$val = [
			'id_answer' => $header['uuid_course'],
			'id_users' => $this->session->userdata('id_users')
		];
		$detail = $this->app_model->getListDataQuestions('q.id_course','equals',$header['id_course']);
		$grafik = $this->app_model->getListDataQuestions('uuid_course',$val);
		return [
			'header' => $header,
			'detail' => $detail,
			'grafik' => $grafik
		];
	}
}
