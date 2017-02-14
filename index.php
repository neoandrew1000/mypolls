<!DOCTYPE html>
<html lang="en">
<head>
<!--
+++подключение шрифтов
+++базовое форматирование
+++базовые заливки и фоны
+++меню переключения
+++svg
+++img
___текст
___верстка
___bg svg
___тестирование
___постобработка, анимация
___добавление форм
___тестирование

-->
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="sass/build/css/jquery.fullpage.css" />
	<link rel="stylesheet" href="sass/build/css/style.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.2/jquery.fullPage.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
	
</head>
	<!-- скрипт работы fullfage.js -->
	<script>
	jQuery(document).ready(function($) {
		$("#fullpage").fullpage({
			sectionsColor:['white','#5c717c','white','#ffea00','white','#484848'],
			anchors:['fistPage','secondPage','3rdPage','4thPage','5thPage','6thPage'],
			menu:'#menu',
			scrollBar:false,
			//scrollOverflow:true,
			loopBottom:true,

		});


	})
	</script>
<body>
	<!-- flexbox объединяющий обе менюхи -->
	<nav id="wrapMenu">
		<!-- левое меню -->
	    <ul class="menu" id="leftMenu">
		    <!--<li data-menuanchor="fistPage"><a href="#fistPage">fistSlaider</a></li>
		    <li data-menuanchor="secondPage"><a href="#secondPage">secondSlider</a></li>
		    <li data-menuanchor="3rdPage"><a href="#3rdPage">3rd Slider</a></li>
		    <li data-menuanchor="4thPage"><a href="#4thPage">4th Slider</a></li>-->
			<li data-menuanchor="5thPage"><a href="#5thPage">Тарифы</a></li>
		    <li data-menuanchor="6thPage"><a href="#6thPage">Услуги</a></li>	
		    <li class="respondents"><a href="http">Вход для респондентов</a></li>
		</ul>
		<!-- правое меню -->
		<ul class="menu" id="rightMenu">
			<li class="login"><a href="http">Войти</a></li>
			<li class="registration"><a href="http">Регистрация</a></li>
		</ul>
	</nav>
<!-- нужный див для работы бибилиоткеи fullpage.js -->
<div id="fullpage">
	 <!-- первая главная страничка -->
	<div class="section" id="section1">
		<p>
			<h1>Пример h1</h1>
			<h2>Пример h2</h2>
			<h3>Пример h3</h3>
			<h4>Пример h4</h4>
			<h5>Пример h5</h5>
			<img src="svg/logo.svg" width="400" alt="">
		</p>
	</div>
	<!-- вторая страничка "с нами нет ничего сложного" -->
	<div class="section" id="section2">
		<img src="svg/icon1.svg" width="150" alt="">
		<img src="svg/icon2.svg" width="150" alt="">
		<img src="svg/icon3.svg" width="170" alt="">
		<p>Explicabo nemo quae animi natus cum porro in sequi perspiciatis vel veritatis. Quaerat laborum repudiandae, ratione ipsa similique. Nihil obcaecati, consequuntur incidunt qui assumenda laudantium eius aut. Suscipit, tempore corporis.</p>
	</div>
	<!-- третья страничка "быстрое получение результата" -->
	<div class="section" id="section3">
	<img src="img/sl3img1.jpg" width="600" alt="">
		<p>Quisquam ex possimus, quia tenetur. Rerum facere nesciunt esse officia sit minima quidem laboriosam nobis, fugit laudantium. Molestias placeat facere, laudantium quidem voluptatibus voluptatum nobis libero commodi, iure tempora ducimus.</p>
	</div>
	<!-- четвертая страничка "консультации" -->
	<div class="section" id="section4">
	<img src="img/sl4img1.jpg" width="600" alt="">
	<img src="img/icon4.png" width="100" alt="">
	<img src="img/icon5.png" width="100" alt="">
		<p>Explicabo nemo quae animi natus cum porro in sequi perspiciatis vel veritatis. Quaerat laborum repudiandae, ratione ipsa similique. Nihil obcaecati, consequuntur incidunt qui assumenda laudantium eius aut. Suscipit, tempore corporis.</p>
	</div>
	<!-- пятая страничка "отзывы" -->
	<div class="section" id="section5">
		<p>Quisquam ex possimus, quia tenetur. Rerum facere nesciunt esse officia sit minima quidem laboriosam nobis, fugit laudantium. Molestias placeat facere, laudantium quidem voluptatibus voluptatum nobis libero commodi, iure tempora ducimus.</p>
	</div>	
	<!-- шестая страничка "футер" -->
	<div class="section" id="section6">
		<p>Quisquam ex possimus, quia tenetur. Rerum facere nesciunt esse officia sit minima quidem laboriosam nobis, fugit laudantium. Molestias placeat facere, laudantium quidem voluptatibus voluptatum nobis libero commodi, iure tempora ducimus.</p>
	</div>		
</div>
	
</body>
</html>