<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Victor Andres Martinez" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="github.png" type="image/x-icon">
    <title>Portafolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	
		<header>
			<div class="banner">
				<h1>VICTOR</h1>
			</div>
			<div class="sobre-mi">
				<a href="">PROYECTOS</a>
				<a href="">SOBRE MI</a>
				<a href="">CONTACTO</a>
			</div>
		</header>

		
		<section>
			<h1>Hola, soy Victor馃憢馃徑<br>
				<i>Frontend developer</i> autodidacta, colombiano y<br>
				Apasionado por la web, tecnología y educación.</h1>
		</section>
		
		<nav>
			<div class="li"></div>
			<a href="" target="blank"><img src="linkedin.png" class="imgg1" alt="Freepik"></a>
			<a href="https://github.com/Victormartinezvergara" target="blank"><img src="github.png" class="imgg1" alt="Freepik"></a>
			<a href="https://twitter.com/7codigos?t=of83qE2HGXZUEFx7mElcgg&s=09" target="blank"><img src="twi.png" class="imgg1" alt="Freepik"></a>
			<div class="li"></div>
		</nav>
		
		
		<article>
			<button><a href="">Descargar CV</a></button>
		</article>
		
		<aside>
			<p>Conoce mas...</p>
			<div class="porta">
				<h1>Sobre mi</h1>
			</div>
			<p>Experiencia, educación y tecnologias que domino.</p>
			<div class="linea"></div>
		</aside>
		
		<main>
			<div class="imagenes">
				<h1>Experiencia</h1>
				<h4>+10 meses...</h4>
				<i>Estudiando de forma autodidacta y practicando constantemente...</i><br>
			</div>
			
			<div class="imagenes">
				<h1>Proyectos</h1>
				<h4>+5 Proyectos de practica</h4>
				<i>Sitios web adaptables, formularios, validaciones y mucho mas...</i><br>
			</div>
			
			<div class="imagenes">
				<h1>Habilidades</h1>
				<h4>Autodidacta e investigador</h4>
				<i>Adquiridas en mi etapa de educación y practicas de codificación...</i><br>
			</div>
		
			
			<div class="cerar">
			
			<div class="imagenes">
				<div class="peque"><h1>
						<img src="programador.png" alt="">
					HTML</h1></div>
				<h4 style="color: yellow; font-weight: bolder;">Avanzado</h4>
			</div>
			
			<div class="imagenes">
				<div class="peque"><h1>
						<img src="programador.png" alt="">
					CSS</h1></div>
				<h4 style="color: yellow; font-weight: bolder;">Intermedio</h4>
			</div>
			
			<div class="imagenes">
				<div class="peque"><h1>
						<img src="programador.png" alt="">
					BOOTSTRAP 5</h1></div>
				<h4 style="color: yellow; font-weight: bolder;">Intermedio</h4>
			</div>
			
			<div class="imagenes">
				<div class="peque"><h1>
						<img src="programador.png" alt="">
					JAVASCRIPT</h1></div>
				<h4 style="color: yellow; font-weight: bolder;">Novato</h4>
			</div>
			
			<div class="imagenes">
				<div class="peque"><h1>
						<img src="programador.png" alt="">
					REACT.JS</h1></div>
				<h4 style="color: yellow; font-weight: bolder;">Novato</h4>
			</div>
			
			<div class="imagenes">
				<h1>NEXT.JS</h1>
				<h4 style="color: yellow; font-weight: bolder;">Aprendiendo</h4>
			</div>
			
			<div class="imagenes">
				<div class="peque"><h1>
						<img src="programador.png" alt="">
					NODEJS - EXPRESS</h1></div>
				<h4 style="color: yellow; font-weight: bolder;">Aprendiendo</h4>
			</div>
			
			<div class="imagenes">
				<div class="peque"><h1>
						<img src="programador.png" alt="">
					PHP con MYSQL</h1></div>
				<h4 style="color: #FEF07B; font-weight: bolder;">Novato</h4>
			</div>
			
			</div>
			
		</main>
		
		<aside>
			<p>Mis proyectos</p>
			<div class="porta">
				<h1>Portafolio</h1>
			</div>
			<p>Proyectos que demuestran mi educación autodidacta. Esta sección crecerá y mejorará según mi avance y crecimiento profesional.</p>
			<div class="linea"></div>
		</aside>
		
		<main>
			<div class="imagenes">
				<img src="img1.jpg" alt="">
				<h1>Sitio de páginas web</h1>
				<i>En Proceso</i><br>
				<button><a href="">Ver en Github</a></button>
			</div>
			
			<div class="imagenes">
				<img src="img2.jpg" alt="">
				<h1>Plataforma de cursos gratis</h1>
				<i>En Proceso</i><br>
				<button><a href="">Ver en 000webhostapp</a></button>
			</div>
		</main>
		
		
		<aside>
			<p>驴Te gusta lo que hago?</p>
			<div class="porta">
				<h1>Contacto</h1>
			</div>
			<p>Enviame un mail dandome tu feedback, recomendaciones o la oportunidad de trabajar, aprender y crecer junto a tu empresa.</p>
			<div class="linea"></div>
		</aside>
		
		<div class="centrar">
		
		<form method="post">
			<h1>Contactame</h1>
			<input type="text" name="name" placeholder="Nombre completo">
			<br>
			<input type="email" name="email" placeholder="Tu email">
			<br>
			<br>
			
			<input type="submit" name="register">
		</form>
		
		<?php 
		include("registrar.php");
		?>
		
		</div>
		
		<footer>
			<p>@ VICTOR Developer. All rights reserved.<br>
				Ultima actualizacion : 03/05/2022</p>
		</footer>
	
</body>
</html>
