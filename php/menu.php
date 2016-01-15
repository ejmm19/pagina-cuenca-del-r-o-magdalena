<br>
<br>
<br>
<html>
	<head>
		<!-- CHANGE TITLE AND META ACCORDINGLY -->
		<meta name="description" content="Faiz Malkani, Designer and Developer for Android and the Web">
		<meta content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes" name="viewport">
		<link rel="stylesheet" href="css/tidy.css">
		<link rel="stylesheet" href="css/animate.css">		
	</head>
	<body>
		<center><h3 class="titulo" id="titulo">Contenido</h3></center>
	
		<div class="container" style="width: 100%">
			<div class="wow fadeInUp content-works">
			<div class="works-card">
     			<a href="./vistas/introduccion.php">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="img/otherapps/placeholder_one.png" style="width: 100%"></img>
     					<span class="work-title">INTRODUCCIÓN</span> 
     					<paper-ripple fit></paper-ripple>
     				</div>
     			</a>		
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card">
     			<a href="./vistas/caracteristicasf.php">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="img/otherapps/placeholder_two.png" style="width: 100%"></img>
     					<span class="work-title">CARACTERÍSTICAS FISICAS</span> 
     					<paper-ripple fit></paper-ripple>
     				</div>	
     			</a>	
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card">
     			<a href="./vistas/caracteristicassoc.php">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="img/otherapps/placeholder_three.png" style="width: 100%"></img>
     					<span class="work-title">CARACTERÍSTICAS SOCIALES</span>
     					<paper-ripple fit></paper-ripple>
     				</div>	
     			</a>	
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card">
     			<a href="./vistas/caracteristicaseconomicas.php">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="img/otherapps/culmaiz.jpg" style="width: 100%"></img>
     					<span class="work-title">CARECTERÍSTICAS ECONOMICAS</span>
	     				<paper-ripple fit></paper-ripple>
	     			</div>
     			</a>		
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card">
     			<a href="./vistas/futurodelacuenca.php">
     				<div class="works-subcard">
     					<img class="top-corners-rounded" src="img/otherapps/placeholder_five.png" style="width: 100%"></img>
     					<span class="work-title">FUTURO DE LA CUENCA</span>
	     				<paper-ripple fit></paper-ripple>
	     			</div>	
     			</a>	
     		</div>
			<!-- To here-->
			
			<!-- If needed, delete from here -->
     		<div class="works-card" id="titullo">
     			<a href="./vistas/bibliografia.php">
     					<div class="works-subcard">
     					<img class="top-corners-rounded" src="img/otherapps/placeholder_six.png" style="width: 100%"></img>
     					<span class="work-title">GLOSARIO Y BIBLIOGRAFÍA</span>
     						<paper-ripple fit></paper-ripple> 
	     				</div>	
     			</a>		
     		</div>
			<!-- To here-->
			
     	</div><br><br>
		
		
		
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		
		<!-- Scrollwheel Smoothing -->
		<script>
			$(function()
			{	
				var $window = $(window);
				var scrollTime = 0.5;
				var scrollDistance = 270;
				$window.on("mousewheel DOMMouseScroll", function(event)
				{
	
					event.preventDefault();	
					var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
					var scrollTop = $window.scrollTop();
					var finalScroll = scrollTop - parseInt(delta*scrollDistance);
					TweenMax.to($window, scrollTime, 
					{
						scrollTo : { y: finalScroll, autoKill:true }, ease: Power1.easeOut, overwrite: 5	 
						
					});
				});
			});
		</script>
	</body>
</html>	