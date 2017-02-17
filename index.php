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
+++текст
+++верстка
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
<div class="pageWrap">
<div id="fullpage">
	 <!-- первая главная страничка -->
	<div class="section" id="section1">
		<ul>
			<li><h1>MyPolls.ru</h1></li>
			<li><h1>Создание опросов</h1></li>
			<li><h1>Просто и удобно</h1></li>
			<li><div></div></li>
			<li><a href="modal"><h5>НАЧНИТЕ ПРЯМО СЕЙЧАС</h5></a></li>
		</ul>
	</div>
	<!-- вторая страничка "с нами нет ничего сложного" -->
	<div class="section" id="section2">
		<ul>
			<li><h2>С нами нет ничего сложного:</h2></li>
			<li>
				<ul>
					<li><h4>Вы создаете<br>опрос</h4></li>
					<li><img src="svg/icon1.svg" width="150" alt=""></li>
					<li><p>Удобная панель для<br>конструирования<br>опросов</p></li>
				</ul>
				<ul>
					<li><h4>Собираете<br>ответы</h4></li>
					<li><img src="svg/icon2.svg" width="150" alt=""></li>
					<li><p>Большое количество<br>активных<br>респондентов</p></li>
				</ul>
				<ul>
					<li><h4>Получаете<br>результат</h4></li>
					<li><img src="svg/icon3.svg" width="170" alt=""></li>
					<li><p>Результат в нужном<br>вам формате,<br>графики и диаграммы</p></li>
				</ul>
			</li>		
			
		</ul>
		
	</div>
	<!-- третья страничка "быстрое получение результата" -->
	<div class="section" id="section3">
		<ul>
			<li><img src="img/sl3img1.jpg" width="600" alt=""></li>
			<li>
				<ul>
					<li>
						<h5>Быстрое получение результата</h5>
					</li>
					<li>
						<h5>Серверы находятся на территории<br>Российской Федерации</h5>
					</li>
					<li>
						<h5>Наши анкеты и сервис доступны на<br>всех современных устройствах</h5>
					</li>
					<li>
						<h5>На возникшие вопросы поможет<br>ответить личный менеджер</h5>
					</li>
				</ul>
			</li>
		</ul>
		
	</div>
	<!-- четвертая страничка "консультации" -->
	<div class="section" id="section4">
		<ul class="section4Ul">
			<li class="leftSectionLi">		
				<div class="leftSection"> <!-- левая секция -->
					<ul> <!-- вертикальный flex-box левой секции -->
						<li>
							<ul class="firstManager"> <!-- горизонтальный flex-box 1-го менеджера -->
								<li><img src="img/icon5.png" width="150" alt=""></li>
								<li>
									<ul> <!-- вертикальный flex-box имени/специальности 1-го менеджера -->
										<li><h4>Александр Пушкин</h4></li>
										<li><p>социолог-эксперт</p></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<ul class="secondManager"> <!-- горизонтальный flex-box 2-го менеджера -->
								<li><img src="img/icon4.png" width="150" alt=""></li>
								<li>
									<ul> <!-- вертикальный flex-box имени/специальности 2-го менеджера -->
										<li>
											<h4>Федор Достоевский</h4>
										</li>
										<li><p>менеджер по работе с клиентами, социолог</p></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>			
				</div>
			</li>
			<li class="rightSectionLi">
				<div class="rightSection">
					<ul>
						<li><h3>Комплексные профессиональные услуги</h3></li>
						<li><p>Наши специалисты качественно<br>и быстро подготовят и проведут<br> исследования, 		осуществят<br>расчет индексов, составят<br>статестический и аналитический<br>отчеты</p></li>
						<li></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<!-- пятая страничка "отзывы" -->
	<div class="section" id="section5">
	</div>	
	<!-- шестая страничка "футер" -->
	<div class="section" id="section6">
		<p>Quisquam ex possimus, quia tenetur. Rerum facere nesciunt esse officia sit minima quidem laboriosam nobis, fugit laudantium. Molestias placeat facere, laudantium quidem voluptatibus voluptatum nobis libero commodi, iure tempora ducimus.</p>
	</div>		
</div>
</div>
	
</body>
</html>