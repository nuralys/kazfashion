
<div class="title">Поиск модели по параметрам</div>

<div class="search_model"> 
	<form action="/models/search" id="ModelSearchForm" method="get" accept-charset="utf-8">
		<div class="search_model_input">
			<label for="">ФИО</label>
			<input name="fio" type="text" class="search_model_f">
		</div>
		<div class="search_model_input">
			<label for="">ВОЗРАСТ</label>
			<input name="from" type="text" class="search_model_f age" placeholder="OT">-
			<input name="to" type="text" class="search_model_f age" placeholder="ДО">
		</div>
		<div class="search_model_input">
			<label for="">НОМЕР #ID</label>
			<input name="id" type="text" class="search_model_f id">
		</div>
		<div class="submit"><input type="submit" value="Найти"></div>
	</form>
</div>

<ul class="model_list	">
<?php foreach($data as $item): ?>
	<li class="model_item_container">
		<div class="model_item">
			<a href="/models/id/<?=$item['ChildModel']['id'] ?>">
				<img src="/img/models/<?=$item['ChildModel']['img'] ?>"></a>
			<div class="gallery_item_des">
				<div class="gallery_item_title">
					<a href="/models/id/<?=$item['ChildModel']['id'] ?>"><?=$item['ChildModel']['fio'] ?></a>
				</div>
				<div class="date_gallery">Номер #ID:<?=$item['ChildModel']['id'] ?></div>
			</div>
		</div>
		<a href="" class="cooperation buttons">Сотрудничать</a>
		<a href="/models/id/<?=$item['ChildModel']['id'] ?>" class="more buttons">Подробнее</a>
	</li>
<?php endforeach; ?>
</ul>