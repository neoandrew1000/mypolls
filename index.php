<!DOCTYPE html>
<html lang="en">
<head>
<!--
+подключение шрифтов
+базовое форматирование
+базовые заливки и фоны
-меню переключения
-svg
-текст
-тестирование
-постобработка, анимация
-добавление форм
-тестирование

-->
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="sass/build/css/jquery.fullpage.css" />
	<link rel="stylesheet" href="sass/build/css/style.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.2/jquery.fullPage.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
	
</head>
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
	<ul class="menu">
		<li data-menuanchor="fistPage"><a href="#fistPage">fistSlaider</a></li>
		<li data-menuanchor="secondPage"><a href="#secondPage">secondSlider</a></li>
		<li data-menuanchor="3rdPage"><a href="#3rdPage">3rd Slider</a></li>
		<li data-menuanchor="4thPage"><a href="#4thPage">4th Slider</a></li>
		<li data-menuanchor="5thPage"><a href="#5thPage">5th Slider</a></li>
		<li data-menuanchor="6thPage"><a href="#6thPage">6th Slider</a></li>
	</ul>
<div id="fullpage">
	<div class="section" id="section1">
		<p>
			<h1>Пример h1</h1>
			<h2>Пример h2</h2>
			<h3>Пример h3</h3>
			<h4>Пример h4</h4>
			<h5>Пример h5</h5>
		</p>
	</div>
	<div class="section" id="section2">
		<p>Explicabo nemo quae animi natus cum porro in sequi perspiciatis vel veritatis. Quaerat laborum repudiandae, ratione ipsa similique. Nihil obcaecati, consequuntur incidunt qui assumenda laudantium eius aut. Suscipit, tempore corporis.</p>
	</div>
	<div class="section" id="section3">
		<p>Quisquam ex possimus, quia tenetur. Rerum facere nesciunt esse officia sit minima quidem laboriosam nobis, fugit laudantium. Molestias placeat facere, laudantium quidem voluptatibus voluptatum nobis libero commodi, iure tempora ducimus.</p>
	</div>
	<div class="section" id="section4">
		<p>Explicabo nemo quae animi natus cum porro in sequi perspiciatis vel veritatis. Quaerat laborum repudiandae, ratione ipsa similique. Nihil obcaecati, consequuntur incidunt qui assumenda laudantium eius aut. Suscipit, tempore corporis.</p>
	</div>
	<div class="section" id="section5">
		<p>Quisquam ex possimus, quia tenetur. Rerum facere nesciunt esse officia sit minima quidem laboriosam nobis, fugit laudantium. Molestias placeat facere, laudantium quidem voluptatibus voluptatum nobis libero commodi, iure tempora ducimus.</p>
	</div>	
	<div class="section" id="section6">
		<p>Quisquam ex possimus, quia tenetur. Rerum facere nesciunt esse officia sit minima quidem laboriosam nobis, fugit laudantium. Molestias placeat facere, laudantium quidem voluptatibus voluptatum nobis libero commodi, iure tempora ducimus.</p>
	</div>		
</div>
	
</body>
</html>