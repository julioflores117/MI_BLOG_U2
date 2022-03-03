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
										<h2><a href="#">Concepto de comunicación orientada a conexión e interfaz de programación de aplicaciones (API).</a></h2>
										<p>Sockets</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Febrero 20, 2021</time>
										<a href="#" class="author"><span class="name">Julio Flores Pineda</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="images/java-socket.jpg" alt="" /></span>
								<p>
                                La API es un conjunto de subrutinas, funciones y procedimientos (o métodos, en la programación orientada a objetos) que ofrece cierta biblioteca para ser utilizada por otro software como una capa de abstracción.
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
										<h2><a href="#">Definir el concepto de sockets.</a></h2>
										<p>Sockets</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Febrero 20, 2021</time>
										<a href="#" class="author"><span class="name">Julio Flores Pineda</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="images/java-socket.jpg" alt="" /></span>
								<p>
                                Los sockets son un mecanismo que nos permite establecer un enlace entre dos programas que se ejecutan independientes el uno del otro (generalmente un programa cliente y un programa servidor) <br>
                                Para Java los sockets nos proveen dos clases: (Socket) para implementar la conexión desde el lado del cliente y (ServerSocket) que nos permitirá manipular la conexión desde el lado del servidor. <br>

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
										<h2><a href="#">Proceso Del Uso De Sockets En Aplicaciones Cliente/Servidor.</a></h2>
										<p>Sockets</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">Febrero 20, 2021</time>
										<a href="#" class="author"><span class="name">Julio Flores Pineda</span><img src="images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="images/sockets_CS.png" alt="" /></span>
                                <p>
                                Para nuestro ejemplo de sockets implementaremos ambos (cliente y servidor) usando Java y se comunicarán usando el puerto 1234 (es bueno elegir los puertos en el rango de 1024 hasta 65535). 
                                La dinámica del ejercicio será como se ve: <br>
                                <br>
                                El servidor estará a la espera de una conexión, en cuanto el cliente inicie enviará un mensaje de petición al servidor, éste le responderá afirmativamente y una vez recibida la confirmación, el cliente enviará un par de mensajes y la conexión finalizará.
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