<?php
	class Pages extends Controller 
	{
		public function __construct() 
		{           
			//$this->userModel = $this->model('User');
		}

		public function index() 
		{
			$data = ['title' => 'Home page'];

			$this->view('conectingpage', $data);
		}

		public function applicant() 
		{
			$this->view('conectingpage');
		}

		// public function about() 
		// {
		//     $this->view('about');
		// }
	}
?>
