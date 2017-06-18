<?php

class Controller_Main extends Controller
{
	
	function action_remove()
	{ 
		if (isset($_GET['id'])) {Model_Main::remove_car($_GET['id']);}
		$this -> action_index();

	}

	public function action_index()
	{	
		Model_Main::checkout();
		$tmp_page = 1;
		if (isset($_GET['page'])) { if($_GET['page'] > 0) {$tmp_page = $_GET['page'];}}
		$data = Model_Main::get_rows(($tmp_page - 1)*10);
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}