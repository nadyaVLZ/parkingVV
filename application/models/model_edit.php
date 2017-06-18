<?php

class Model_Edit
{
	static function get_data($phone)
	{
		global $pdo;
		try {
		$query = "SELECT * FROM clients LEFT JOIN car ON phone = owner_phone WHERE phone = :phone";
		$rows = $pdo->prepare($query);
		$rows->bindParam(':phone' , $phone);
		$rows->execute();
		$result['cars'] = $rows->fetchALL(PDO::FETCH_ASSOC);	
		return($result);
	}
		catch (PDOException $e)
		{
			echo "Ошибка выполнения запроса ".$e->getMessage();
		}
	}

	static function edit_client()
	{	
		global $pdo;
		try{
		$query = "UPDATE `clients` SET `name`=:name,`gender`=:gender,`address`=:address WHERE phone = :basephone";
		$car = $pdo->prepare($query);
		$client = $pdo->prepare($query);
		$client->bindParam(':name' , $_POST['name']);
		$client->bindParam(':gender' , $_POST['gender']);
		$client->bindParam(':basephone' , $_POST['phone']);
		$client->bindParam(':address' , $_POST['address']);
		$client->execute();
		}
		catch (PDOException $e)
		{
		echo "Ошибка выполнения запроса ".$e->getMessage();
		}
	}

	static function edit_car()
	{
		global $pdo;
		try {
		$query = "UPDATE `car` SET `car_brand`= :car_brand,`car_model`= :car_model,`car_color`= :car_color WHERE car_numb = :car_numb;";
		$car = $pdo->prepare($query);
		$car->bindParam(':car_brand' , $_POST['car_brand']);
		$car->bindParam(':car_model' , $_POST['car_model']);
		$car->bindParam(':car_color' , $_POST['car_color']);
		$car->bindParam(':car_numb' , $_POST['car_numb']);
		$car->execute();
		}
		catch (PDOException $e)
		{
			echo "Ошибка выполнения запроса ".$e->getMessage();
		}
	}

	static function add_car()
	{
		try {
		global $pdo;
		$query = "INSERT INTO car VALUES (:car_brand, :car_model, :car_color, :car_numb, :owner_phone, 1)";
		$car = $pdo->prepare($query);
		$car->bindParam(':car_brand' , $_POST['car_brand']);
		$car->bindParam(':car_model' , $_POST['car_model']);
		$car->bindParam(':car_color' , $_POST['car_color']);
		$car->bindParam(':car_numb' , $_POST['car_numb']);
		$car->bindParam(':owner_phone' , $_POST['owner_phone']);
		$car->execute();
		
		}
		catch (PDOException $e)
		{
			echo "Ошибка выполнения запроса ".$e->getMessage();
		}
	}
} 
?>