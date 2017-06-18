<? if (!isset($data)): ?>

<h1>Клиент</h1>

    <form  method="POST" role = "form" class="form-horizontal" >

        <div class="form-group">
  		      <label for="name" class="col-sm-2 control-label">ФИО</label>
  		      <div class="col-sm-10">
  		      <input type="text" class="form-control" id="name" name = "name"></div>
  		</div>

        <div class="form-group">
  		      <label for="phone" class="col-sm-2 control-label">Номер телефона</label>
              <div class="col-sm-10">
              <input type="int" class="form-control" id="phone" name = "phone" ></div>
 	    </div>

 	    <div class="form-group">
  		    <label for="address" class="col-sm-2 control-label">Адрес</label>
  		      <div class="col-sm-10">
  		      <input type="text" class="form-control" id="address" name = "address" ></div>
 	    </div>

        <div class="form-group">
   		     <label for="gender" class="col-sm-2 control-label">Пол</label>                               
 		      <div class="radio">
 	          <label><input type="radio" name="gender" id="radio1" value="1" checked> Мужской </label></div>
	          <div class="col-sm-offset-2">
	          <div class="radio">
              <label><input type="radio" name="gender" id="radio2" value="0" checked> Женский</label></div></div>
        </div>

        <div class="form-group">
        	  <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" name = "function" value = "add_client" class="btn btn-success">Добавить</button> 
  			  </div>
      	</div>
	</form>

  <? endif;?>
<? if (isset($data)): ?> <h3> Добавить автомобиль текущему клиенту </h3> 
<h1>Автомобили</h1>

    <form  method="POST" role = "form" class="form-horizontal" >

        <div class="form-group">
             <label for="owner_phone" class="col-sm-2 control-label">Телефон клиента</label>
             <div class="col-sm-10"><input type="text" class="form-control" id="car_brand" name = "owner_phone" value="<?=$data?>"></div>
        </div>

      	<div class="form-group">
  		  	   <label for="car_brand" class="col-sm-2 control-label">Марка</label>
  		  	   <div class="col-sm-10"><input type="text" class="form-control" id="car_brand" name = "car_brand" placeholder=""></div>
      	</div>

      	<div class="form-group">
  		  	    <label for="car_model" class="col-sm-2 control-label">Модель</label>
  			    <div class="col-sm-10"><input type="text" class="form-control" id="car_model" name = "car_model" placeholder=""></div>
 	   	</div>

 	    <div class="form-group">
  		  	    <label for="car_color" class="col-sm-2 control-label">Цвет</label>
  		  	    <div class="col-sm-10"><input type="text" class="form-control" id="car_color" name ="car_color" placeholder=""></div>
 	    </div>

 	    <div class="form-group">
  		  	 	<label for="car_numb" class="col-sm-2 control-label">Гос. Номер</label>
  		  		<div class="col-sm-10"><input type="text" class="form-control" id="car_numb" name = "car_numb" placeholder="С065МК 78"></div>
 	    </div>

      	<div class="form-group">
        		<div class="col-sm-offset-2 col-sm-10"><button type="submit" class="btn btn-success" name = "function" value = "add_car">Добавить</button></div>
      	</div>
	</form>

  <? endif;?>

