<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title_for_layout ?> | kazfashion.kz</title>
	
	<?php 
	echo $this->fetch('css');
	echo $this->fetch('script');
	echo $this->Html->css(array('reset', 'style', 'style2', 'slide', 'jquery.fancybox'));
	echo $this->Html->script(array('http://code.jquery.com/jquery-2.1.4.js', 'app', 'jquery.fancybox.pack'));
	 ?>


	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body>
	<header>
		<div class="top_line">
			<div class="cr">
				<!-- <div class="lang">
				Языки:
				<a href="">РУС</a>/
				<a href="">ENG</a>
				</div> -->
			</div>
		</div>
		<section class="head">
			<div class="cr">
				<div class="logo">
					<a href="/">
						<img src="/img/logo_gif.gif" alt=""/>
					</a>
				
				</div>
				<nav class="top_menu">
					<div class="top_menu_item  <?php echo ($this->request->params['action']=='home') ? 'active' : '' ?>">
						<a href="/">Главная</a>
						<span>Главная</span>
					</div>
					<div class="top_menu_item">
						<a href="">О компании</a>
						<span>О нас, информация</span>
					</div>
					<div class="top_menu_item <?php echo ($this->request->params['controller']=='childmodels') ? 'active' : '' ?>">
						<a href="/models">Модели</a>
						<span>Дети модели</span>
					</div>
					<div class="top_menu_item">
						<a href="">Услуги</a>
						<span>Подразделы</span>
					</div>
					<div class="top_menu_item  <?php echo ($this->request->params['controller']=='albums') ? 'active' : '' ?>">
						<a href="/albums"> Галерея  </a>
						<span>   Фотосессии </span>
					</div>
					<div class="top_menu_item  <?php echo ($this->request->params['controller']=='news') ? 'active' : '' ?>">
						<a href="/news">   Новости      </a>
						<span>                   События    </span>
					</div>
					<div class="top_menu_item">
						<a href="">Каталог товаров</a>
						<span>Шоппинг</span>
					</div>
					<div class="top_menu_item">
						<a href="">Контакты</a>
						<span>Связь</span>
					</div>
				</nav>
			</div>
		</section>
	</header>
	<div class=" cr">
		<div class="container">
			<?php echo $this->Session->flash('good'); ?>
			<?php echo $this->Session->flash('bad'); ?>
		<?php echo $this->fetch('content') ?>
			
		</div>
	</div>
	<div class="partners">
		<div class="cr">
			<div class="partners_title">Наши партнеры</div>
			<div class="partners_item">
				<a href="http://astanacreative.kz/" target="_blanck"><img src="/img/astanacreative.png" alt=""></a>
			</div>
			<div class="partners_item">
				<a href=""><img src="/img/logo_autoradio.jpg" alt=""></a>
			</div>
			<div class="partners_item">
				<a href=""><img src="/img/logo_melisprint.jpg" alt=""></a>
			</div>
			<div class="partners_item">
				<a href=""><img src="/img/pekarnya.jpg" alt=""></a>
			</div>
		</div>
	</div>
	<footer>
		<div class="cr">
			<div class="developed">
				<p>Разработано в <a href="http://astanacreative.kz/" target="_blanck">Astanacreative.kz</a></p>
			</div>
		</div>
		<div class="top_line"></div>
	</footer>
</body>
</html>