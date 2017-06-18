
<table class = "table table-striped">
<thead>
	<th>ФИО</th>
	<th>Автомобиль</th>
	<th>Гос. номер РФ</th>
</thead>
<tbody>
	<?php foreach($data as $obj):?>
		<tr>
			<td> <? echo $obj->name;?></td>
			<td> <? echo "$obj->car_brand ". $obj->car_model ;?> </td>
			<td> <? echo $obj->car_numb  ;?> </td>
			<td> <a class="btn" href="/edit/index/?edit=<?=$obj->phone ?>" ><i class=" glyphicon glyphicon-pencil"></i></a> </td>
			<td> <a class="btn" href="/main/remove/?id=<?=$obj->car_numb?>"> <i class="glyphicon glyphicon-minus"></i></a> </td>
		</tr>
	<?php endforeach; ?>
	<tr><td colspan="5"> <a href = "/add/index/" class="btn btn-primary btn-lg btn-block">Добавить клиента</a></td>></tr>
</tbody>
</table>
<nav class="text-center">
    <ul class="pagination pagination-lg">
    	<li <? if (!(isset($_GET['page'])) || ($_GET['page'] == 1)): ?> class="active" <?endif;?> > <a href="/main/index/?page=1">1</a></li>
    	<?php for ($i = 2; $i <= Model_Main::get_count_pages() + 1; $i++):?>
    	<li <? if ((isset($_GET['page'])) && ($_GET['page'] == $i)) : ?> class = "active" <? endif; ?> ><a href="/main/index/?page=<?=$i?>"><?=$i?></a></li> 
    	<?endfor;?>
    </ul>
</nav>
