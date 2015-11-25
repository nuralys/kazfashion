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
			<div class="model_info_img">
				<div class="model_item_container">
					<div class="model_item">
						
							<img src="/img/models/thumbs/<?=$data['ChildModel']['img'] ?>">
						<div class="gallery_item_des">
							<div class="gallery_item_title">
								<?=$data['ChildModel']['fio'] ?>
							</div>
							<div class="date_gallery">Номер #ID:<?=$data['ChildModel']['id'] ?></div>
						</div>
					</div>
					<a href="" class="cooperation buttons">Сотрудничать</a>
					<div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter" data-yashareTheme="counter"></div>
				</div>
			</div>
			<div class="model_info">
				<div class="model_name_id">
					<div class="model_name"><?=$data['ChildModel']['fio'] ?></div>
					<div class="model_id"><?=$data['ChildModel']['date_berth'] ?></div>
				</div>
				<div class="models_card">
					<div class="models_card_title">Models Card (Характеристики моделя):</div>
					<p>Дата рождения: <?=$data['ChildModel']['date_berth'] ?></p>
					<p>Рост: <?=$data['ChildModel']['growth'] ?> см</p>
					<p>Вес: <?=$data['ChildModel']['weight'] ?> кг</p>
					
					<div class="models_card_title">Описание:</div>
					<p>
						<?=$data['ChildModel']['description'] ?>
					</p>
				</div>
				<div class="tabs__wrapper">
					<div class="tabs-header">
						<div class="tabs-header__title  lookbook active">lookbook</div>
						<div class="tabs-header__title video">видео</div>
					</div>
					<div class="tabs-box">
						<div class="tabs-box__item active">
							<ul>
							<?php foreach($lookbook as $item): ?>
								<li class="lookbook_item">
									<a href="/img/lookbook/<?=$item['Lookbook']['img'] ?>" class="fancybox" title="<?php echo $item['Lookbook']['title'] ?>" rel="gallery">
										<img src="/img/lookbook/thumbs/<?=$item['Lookbook']['img'] ?>" alt=""></a>
								</li>
								<?php endforeach ?>
							</ul>
						</div>
						<div class="tabs-box__item">
							<div class="video_model_item">
								<iframe width="325" height="184" src="https://www.youtube.com/embed/rFRR_mTyh1o" frameborder="0" allowfullscreen></iframe>
								<div class="video side_bar_title">COVER STORY LITTLE QUEENS bY WDmagazine</div>
								<div class="vides des">
									<p>
										Летнюю обложку журнала WDmagazine украсят - Одна из 
самых красивых певиц в России Татьяна Котова и юная 
модель Милана Лионенко.
									</p>
								</div>
							</div>
							<div class="video_model_item">
								<iframe width="325" height="184" src="https://www.youtube.com/embed/PWVy6PdijtE" frameborder="0" allowfullscreen></iframe>
								<div class="video side_bar_title">COVER STORY LITTLE QUEENS bY WDmagazine</div>
								<div class="vides des">
									<p>
										Летнюю обложку журнала WDmagazine украсят - Одна из 
самых красивых певиц в России Татьяна Котова и юная 
модель Милана Лионенко.
									</p>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>