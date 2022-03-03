<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Single - Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">Blog J y R</a></h1>
						<!-- <nav class="links">
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">Ipsum</a></li>
								<li><a href="#">Feugiat</a></li>
								<li><a href="#">Tempus</a></li>
								<li><a href="#">Adipiscing</a></li>
							</ul>
						</nav> -->
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Search</a>
									<form id="search" method="get" action="#">
										<input type="text" name="query" placeholder="Search" />
									</form>
								</li>
								
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
						<section>
							<ul class="links">
								<li>
									<a href="singletwo.blade.php">
										<h3>Describir los sistemas con arquitectura Cliente / Servidor</h3>
										<p>Arquitectura cliente-servidor</p>
									</a>
								</li>
								<li>
									<a href="singlethree.blade.php">
										<h3>Reconocer protocolos de comunicación de red</h3>
										<p>Tipos de protocolos de red</p>
									</a>
								</li>
								<li>
									<a href="singlefour.blade.php">
										<h3>Clasificar los sitemas de información de acuerdo a su arquitectura</h3>
										<p>Clasificación de los sistemas de información</p>
									</a>
							</ul>
						</section>

						<!-- Actions -->
							

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a >Conceptos De Modelo, Control Y Vista, En Las Arquitecturas Cliente/Servidor.</a></h2>
										<p>Modelo Vista-Controlador</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">November 1, 2015</time>
										<a href="#" class="author"><span class="name">Emmanuel Servin</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="images/flujo de MVC.PNG" alt="" /></span>
								<p>
                                Modelo Vista Controlador (MVC) es un estilo de arquitectura de software que separa los datos de una aplicación, la interfaz de usuario, y la lógica de control en tres componentes distintos. <br>
                                Se trata de un modelo muy maduro y que ha demostrado su validez a lo largo de los años en todo tipo de aplicaciones, y sobre multitud de lenguajes y plataformas de desarrollo. <br>
                                •	El Modelo que contiene una representación de los datos que maneja el sistema, su lógica de negocio, y sus mecanismos de persistencia. <br>
•	La Vista, o interfaz de usuario, que compone la información que se envía al cliente y los mecanismos interacción con éste. <br>
•	El Controlador, que actúa como intermediario entre el Modelo y la Vista, gestionando el flujo de información entre ellos y las transformaciones para adaptar los datos a las necesidades de cada uno. <br>

                                </p>
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
                            <article class="post">
								<header>
									<div class="title">
										<h2><a href="#">Explicar el proceso de flujo de control a partir del MVC, en las arquitecturas Cliente/Servidor.</a></h2>
										<p></p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">November 1, 2015</time>
										<a href="#" class="author"><span class="name">Emmanuel Servin</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="images/vista_control.png" alt="" /></span>
								<p>
                                1.	El usuario interactúa con la interfaz de usuario de alguna forma (por ejemplo, el usuario pulsa un botón, enlace, etc.) <br>
2.	El controlador recibe (por parte de los objetos de la interfaz-vista) la notificación de la acción solicitada por el usuario. El controlador gestiona el evento que llega, frecuentemente a través de un gestor de eventos (handler) o callback. <br>
3.	El controlador accede al modelo, actualizándolo, posiblemente modificándolo de forma adecuada a la acción solicitada por el usuario (por ejemplo, el controlador actualiza el carro de la compra del usuario). Los controladores complejos están a menudo estructurados usando un patrón de comando que encapsula las acciones y simplifica su extensión. <br>
4.	El controlador delega a los objetos de la vista la tarea de desplegar la interfaz de usuario. La vista obtiene sus datos del modelo para generar la interfaz apropiada para el usuario donde se refleja los cambios en el modelo (por ejemplo, produce un listado del contenido del carro de la compra) <br>
5.	La interfaz de usuario espera nuevas interacciones del usuario

                                </p>
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="/js/jquery.min.js"></script>
			<script src="/js/browser.min.js"></script>
			<script src="/js/breakpoints.min.js"></script>
			<script src="/js/util.js"></script>
			<script src="/js/main.js"></script>

	</body>
</html>