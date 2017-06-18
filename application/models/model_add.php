<?php

class Model_Add
{
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
		return($_POST['owner_phone']);
		}
		catch (PDOException $e)
		{
			echo "Ошибка выполнения запроса ".$e->getMessage();
		}
	}


	static function add_client()
	{
		try {
		global $pdo;
		$query = "INSERT INTO clients VALUES (:name, :gender, :phone, :address)";
		$client = $pdo->prepare($query);
		$client->bindParam(':name' , $_POST['name']);
		$client->bindParam(':gender' , $_POST['gender']);
		$client->bindParam(':phone' , $_POST['phone']);
		$client->bindParam(':address' , $_POST['address']);
		$client->execute();
		return($_POST['phone']);
		}
		catch (PDOException $e)
		{
			echo "Ошибка выполнения запроса ".$e->getMessage();
		}
	}
} 
?>