<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/jquery.fullpage.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.2/jquery.fullPage.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
	
</head>
	<script>
	jQuery(document).ready(function($) {
		$("#fullpage").fullpage({
			sectionsColor:['#ffe6e6','#e6ffff','#ecffe6'],
			anchors:['fistPage','secondPage','3rdPage'],
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
	</ul>
<div id="fullpage">
	<div class="section" id="section1">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, quia libero unde sapiente consectetur aspernatur tenetur aliquid quis magni consequatur, quisquam! Necessitatibus et porro velit, non earum atque deserunt harum.  </p>
	</div>
	<div class="section" id="section2">
		<p>Explicabo nemo quae animi natus cum porro in sequi perspiciatis vel veritatis. Quaerat laborum repudiandae, ratione ipsa similique. Nihil obcaecati, consequuntur incidunt qui assumenda laudantium eius aut. Suscipit, tempore corporis.</p>
	</div>
	<div class="section" id="section3">
		<p>Quisquam ex possimus, quia tenetur. Rerum facere nesciunt esse officia sit minima quidem laboriosam nobis, fugit laudantium. Molestias placeat facere, laudantium quidem voluptatibus voluptatum nobis libero commodi, iure tempora ducimus.</p>
	</div>
</div>
	
</body>
</html>