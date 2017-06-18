<?php

class Controller_Edit extends Controller
{
	
	function action_index()
	{	$phone;
		if(isset($_POST['function'])) {

		switch ($_POST['function']) 
		{
			case 'edit_client':
				Model_Edit::edit_client();
				break;
			case 'edit_car':
				Model_Edit::edit_car();
				break;
			case 'add_car':
				Model_Edit::add_car();
				break;
			}
		}	
		if(isset($_GET['edit'])) {$phone = $_GET['edit'];}
		$rows = Model_Edit::get_data($phone);		
		$this->view->generate('edit_view.php', 'template_view.php', $rows);
	}
}
?>