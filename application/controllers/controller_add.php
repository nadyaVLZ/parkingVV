<?php
Class Controller_Add extends Controller
{
	 
	
	function add_client()
	{
		if (empty($_POST['name'])) exit('Не заполнено поле "Имя"');
		if (strlen($_POST['name']) < '7' ) exit('Не корректно заполнено поле "Имя"');
		if (empty($_POST['phone'])) exit('Не заполнено поле "Телефон"');
		if (strlen($_POST['phone']) !== 10 ) exit('Не заполнено поле "Телефон"');
		return(Model_Add::add_client());
	}


		function add_car()
	{
		if (empty($_POST['car_brand'])) exit('Не заполнено поле "Марка"');
		if (empty($_POST['car_model'])) exit('Не заполнено поле "Модель"');
		if (empty($_POST['owner_phone'])) exit('Не заполнено поле "Номер клиента"');
		if (empty($_POST['car_color'])) exit('Не заполнено поле "Цвет"');
		if (empty($_POST['car_numb'])) exit('Не заполнено поле "Гос. номер"');
		return(Model_Add::add_car());
	}


		function action_index()
	{	
		
		$owner_phone = "";
		if(isset($_POST['function'])) { 
			switch ($_POST['function']) {
				case "add_client":
					$owner_phone = Controller_Add::add_client();
					break;
				case "add_car":
					$owner_phone = Controller_Add::add_car();
					break;
			}
		
		$this->view->generate('add_view.php', 'template_view.php', $owner_phone);}
		else {$this->view->generate('add_view.php', 'template_view.php');}
	}
}
?>