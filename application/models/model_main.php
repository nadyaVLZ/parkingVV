<?php

class Model_Main 
{
	static function get_rows($start)	// Получение 10 строк от $start + 1
	{	
		global $pdo;
		try {
		$query = "SELECT * FROM clients LEFT JOIN car ON phone = owner_phone  ORDER BY name LIMIT $start, 10";
		$query = $pdo->query($query);	
		$rows = $query->fetchALL(PDO::FETCH_OBJ);					
		return($rows);}
		catch (PDOException $e)
		{
			echo "Ошибка выполнения запроса ".$e->getMessage();
		}
	}

	static function get_count_pages()	// Получение числа записей	
	{
	try {	
		global $pdo;
		$sql  = 'SELECT * FROM `clients`';
		$query = $pdo->query($sql);
		$count= $query->rowCount();
		return(ceil($count/10));
		}
		catch (PDOException $e)
		{
			echo "Ошибка выполнения запроса ".$e->getMessage();
		}
	}

	static function get_count_rows($phone)
	{
		global $pdo;
		try {
		$query = "SELECT * FROM clients LEFT JOIN car ON phone = owner_phone WHERE phone = :phone";
		$query = $pdo->prepare($query);
		$query->bindParam(':phone' , $phone);
		$query->execute();		
		$count = $query->rowCount();
		return($count);			
			}				
		catch (PDOException $e)
			{
			echo "Ошибка выполнения запроса ".$e->getMessage();
			}
	}


	static function remove_car($numb)
	{
		global $pdo;
		try {
		$query = "DELETE FROM car WHERE car_numb = :numb";
		$query = $pdo->prepare($query);
		$query->bindParam(':numb' , $numb);
		$query->execute();
			}				
		catch (PDOException $e)
			{
			echo "Ошибка выполнения запроса ".$e->getMessage();
			}
	}

	static function get_count_cars($phone)
	{
		global $pdo;
		try {
		$query = "SELECT * FROM car WHERE owner_phone = :phone";
		$query = $pdo->prepare($query);
		$query->bindParam(':phone' , $phone);
		$query->execute();
		$count = $query->rowCount();
		return($count);			
			}				
		catch (PDOException $e)
			{
			echo "Ошибка выполнения запроса ".$e->getMessage();
			}
	}

	static function checkout()
	{
		global $pdo;
		try {
			$sql = "SELECT phone FROM clients";
			$clients = $pdo -> query($sql);
			$clients = $clients->fetchALL(PDO::FETCH_ASSOC);
			foreach ($clients as $item) {
			if (Model_Main::get_count_cars($item['phone']) == 0)
				{
					$query = "DELETE FROM clients WHERE phone = :phone";
					$query = $pdo->prepare($query);
					$query->bindParam(':phone' , $item['phone']);
					$query->execute();
				}
			}
			}				
		catch (PDOException $e)
			{
			echo "Ошибка выполнения запроса ".$e->getMessage();
			}
	}

}
?>