<?php 
	require_once ('core/init.php');
?>
	
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
+++bg svg
+++тестирование
+++постобработка, анимация
+__добавление форм
___стили форм
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
			afterLoad:function(link,index) {
				if(index == 1) {
					$("#section1").animate({'opacity':'1'},700);
				}				
				if(index == 2) {
					$("#section2 h2").animate({'opacity':'1'},50);
					$("#section2 h4").animate({'opacity':'1'},200);
					$("#section2 img").animate({'opacity':'1'},300);
					$("#section2 .firstP").animate({'opacity':'1'},400);
					$("#section2 .secondP").animate({'opacity':'1'},500);
					$("#section2 .thirdP").animate({'opacity':'1'},600);
				}
				if(index == 3) {
					$("#section3 .wr").animate({'width':'100%'},500);
				}		
				if(index == 4) {
					$("#section4 .firstManager").animate({'opacity':'1'},200);
					$("#section4 h3").animate({'opacity':'1'},200);
					$("#section4 .secondManager").animate({'opacity':'1'},500);
					$("#section4 .rightSectionP").animate({'opacity':'1'},500);
				}							

			}

		});

		// скрипт отправки формы без ребута страницы
		$('#register-form').on('submit', function(e) {
        	e.preventDefault();
        	$.ajax({
            	url : 'register.php',
           		type: "POST",
           		dataType:'json',
            	data: $(this).serialize(),
            	success: function (data) {

            		if (data === "true"){

            			$("#response").html("Вы зарегестрированы и теперь можете войти!");
            			$("#register-form").remove();

            		}else{
            			
                		$("#response").html(data);
                	}
            	},
            	error: function (jXHR, textStatus, errorThrown) {
                	alert(errorThrown);
            	}
        	});
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
		    <li data-menuanchor="3rdPage"><a href="#3rdPage">3rd Slider</a></li>-->
		    <li data-menuanchor="5thPage"><a href="#5thPage">Тарифы</a></li>
		    <li data-menuanchor="4thPage"><a href="#4thPage">Услуги</a></li>
		    <!--<li data-menuanchor="6thPage"><a href="#6thPage">6 thPage</a></li>-->
		    <li class="respondents"><a href="http">Вход для респондентов</a></li>
		</ul>
		<!-- правое меню -->
		<ul class="menu" id="rightMenu">
			<li class="login"><a href="http">Войти</a></li>
			<li class="registration"><button onClick="getElementById('modalRegistration').removeAttribute('style');" type="button">Регистрация</button></li>
		</ul>
	</nav>


<!-- модальное окно регистрации -->
<div id="modalRegistration" style="display:none;">
   	<div class="overlay">
     	<div class="visible">
     	<button type="button" onClick="getElementById('modalRegistration').style.display='none';">закрыть</button>
       	<h2>Заголовок окна</h2>
          	<div class="content">
          		<!-- поле для ответа от сервера -->
          	   <div id = "response">
          	   </div>
           		<form id= "register-form">
					<div class="field">
						<label for = "usrnam">Username</label>
						<input type="text" name="usrnam" id="usrnam" value="<?php echo escape(Input::get("usrnam"))?>" autocomplete="off" >
					</div>

					<div class="field">
						<label for ="password">Password</label>
						<input type ="password" name="password" id="password"> characters and numbers
					</div>	
					
					<div class="field">
						<label for ="password_again">Password Again</label>
						<input type ="password" name="password_again" id="password_again">
					</div>	

					<div class="field">
						<label for ="frname">Frst name</label>
						<input type ="text" name="frname" id="frname" value="<?php echo escape(Input::get("frname"))?>">
					</div>	

					<div class="field">
						<label for ="lsname">Last name</label>
						<input type ="text" name="lsname" id="lsname" value="<?php echo escape(Input::get("lsname"))?>">
					</div>	

					<div class="field">
						<label for ="eml">Email</label>
						<input type ="text" name="eml" id="eml" value="<?php echo escape(Input::get("eml"))?>" >test@test.com
					</div>	

				 	<div class="field">
						<label for ="phne">Phone +7</label>
						<input type ="text" name="phne" id="phne" value="<?php echo escape(Input::get("phne"))?>">1231231231
					</div>
					<input type = "hidden" name = "token" value="<?php echo escape(Session::get('token')) ?>">
					<input type ="submit" value = "register">
				</form> 
          	</div>
        </div>
    </div>
</div>

<!-- нужный див для работы бибилиоткеи fullpage.js -->
<div id="fullpage">
	 <!-- первая главная страничка -->
	<div class="section" id="section1">
		<ul>
			<li><h1>MyPolls.ru</h1></li>
			<li><h1>Создание опросов</h1></li>
			<li><h1>Просто и удобно</h1></li>
			<li><div></div></li>
			<li class="begin"><a href="modal"><h5>НАЧНИТЕ ПРЯМО СЕЙЧАС</h5></a></li>
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
					<li><p class="firstP">Удобная панель для<br>конструирования<br>опросов</p></li>
				</ul>
				<ul>
					<li><h4>Собираете<br>ответы</h4></li>
					<li><img src="svg/icon2.svg" width="150" alt=""></li>
					<li><p class="secondP">Большое количество<br>активных<br>респондентов</p></li>
				</ul>
				<ul>
					<li><h4>Получаете<br>результат</h4></li>
					<li><img src="svg/icon3.svg" width="170" alt=""></li>
					<li><p class="thirdP">Результат в нужном<br>вам формате,<br>графики и диаграммы</p></li>
				</ul>
			</li>		
		</ul>	
	</div>
	<!-- третья страничка "быстрое получение результата" -->
	<div class="section" id="section3">
	<div class="wr">
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
						<li><p class="rightSectionP">Наши специалисты качественно<br>и быстро подготовят и проведут<br> исследования, 		осуществят<br>расчет индексов, составят<br>статестический и аналитический<br>отчеты</p></li>
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
		
	</div>		
</div>




	
</body>
</html>