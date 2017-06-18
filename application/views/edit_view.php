

<h1>Клиент</h1>
    <form action = "" method="POST" role = "form" class="form-horizontal" >

        <div class="form-group">
  		      <label for="name" class="col-sm-2 control-label">ФИО</label>
  		      <div class="col-sm-10">
  		      <input type="text" class="form-control" id="name" name = "name" value="<?=$data["cars"]["0"]["name"]?>" ></div>
  		</div>

        <div class="form-group">
  		      <label for="phone" class="col-sm-2 control-label">Номер телефона</label>
              <div class="col-sm-10">
              <input type="int" class="form-control" id="phone" name = "phone" value="<?=$data["cars"]["0"]["phone"]?>" ></div>
 	    </div>

 	    <div class="form-group">
  		    <label for="address" class="col-sm-2 control-label">Адрес</label>
  		      <div class="col-sm-10">
  		      <input type="text" class="form-control" id="address" name = "address" 
            value="<?=$data["cars"]["0"]["address"]?>"></div>
 	    </div>

        <div class="form-group">
   		     <label for="gender" class="col-sm-2 control-label">Пол</label>                               
 		      <div class="radio">
 	          <label><input type="radio" name="gender" id="radio1" value="1" 
  		      <? if($data["cars"]["0"]["gender"] == 1): ?>" checked <? endif; ?> > Мужской </label></div>
	          <div class="col-sm-offset-2">
	          <div class="radio">
              <label><input type="radio" name="gender" id="radio2" value="0" 
              <? if($data["cars"]["0"]["gender"] == 0): ?>" checked <? endif; ?> > Женский</label></div></div>
        </div>
        
        <div class="form-group">
        	  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" name = "function" value = "edit_client" class="btn btn-success "> Редактировать </button>  
  			  </div>
      	</div>
	</form>

<h1>Автомобили</h1>
<?if (isset($data["cars"]["0"]["car_brand"])):?>
	<? for ($i = 0; $i < count($data["cars"]) ; $i++): ?>
    <form  action = "" method="POST" role = "form" class="form-horizontal" >

        <div class="form-group">
             <label for="owner_phone" class="col-sm-2 control-label">Телефон клиента</label>
             <div class="col-sm-10"><input type="text" class="form-control" id="car_brand" name = "owner_phone" value="<?=$data["cars"][$i]["owner_phone"]?>"></div>
        </div>

      	<div class="form-group">
  		  	   <label for="car_brand" class="col-sm-2 control-label">Марка</label>
  		  	   <div class="col-sm-10"><input type="text" class="form-control" id="car_brand" name = "car_brand" 
  		  	    value="<?=$data["cars"][$i]["car_brand"]?>"></div>
      	</div>

      	<div class="form-group">
  		  	    <label for="car_model" class="col-sm-2 control-label">Модель</label>
  			    <div class="col-sm-10"><input type="text" class="form-control" id="car_model" name = "car_model" 
  			    value="<?=$data["cars"][$i]["car_model"]?>"></div>
 	   	</div>

 	    <div class="form-group">
  		  	    <label for="car_color" class="col-sm-2 control-label">Цвет</label>
  		  	    <div class="col-sm-10"><input type="text" class="form-control" id="car_color" name ="car_color" 
  		  	    value="<?=$data["cars"][$i]["car_color"]?>"></div>
 	    </div>

 	    <div class="form-group">
  		  	 	<label for="car_numb" class="col-sm-2 control-label">Гос. Номер</label>
  		  		<div class="col-sm-10"><input type="text" class="form-control" id="car_numb" name = "car_numb" 
  		  		value="<?=$data["cars"][$i]["car_numb"]?>"></div>
 	    </div>

      	<div class="form-group">
        		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-success" name = "function" value = "edit_car">Редактировать</button></div>
      	</div>
	</form>
	<?endfor;?>
<? endif; ?>

    <form form  method="POST" role = "form" class="form-horizontal" >

        <div class="form-group">
             <label for="owner_phone" class="col-sm-2 control-label">Телефон клиента</label>
             <div class="col-sm-10"><input type="text" class="form-control" id="car_brand" name = "owner_phone" value="<?=$data["cars"][0]["phone"]?>"></div>
        </div>

      	<div class="form-group">
  		  	   <label for="car_brand" class="col-sm-2 control-label">Марка</label>
  		  	   <div class="col-sm-10"><input type="text" class="form-control" id="car_brand" name = "car_brand" ></div>
      	</div>

      	<div class="form-group">
  		  	    <label for="car_model" class="col-sm-2 control-label">Модель</label>
  			    <div class="col-sm-10"><input type="text" class="form-control" id="car_model" name = "car_model" ></div>
 	   	</div>

 	    <div class="form-group">
  		  	    <label for="car_color" class="col-sm-2 control-label">Цвет</label>
  		  	    <div class="col-sm-10"><input type="text" class="form-control" id="car_color" name ="car_color"></div>
 	    </div>

 	    <div class="form-group">
  		  	 	<label for="car_numb" class="col-sm-2 control-label">Гос. Номер</label>
  		  		<div class="col-sm-10"><input type="text" class="form-control" id="car_numb" name = "car_numb" placeholder="С065МК 78"></div>
 	    </div>

      	<div class="form-group">
        		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-success" name = "function" value = "add_car">Добавить</button></div>
      	</div>
	</form>
