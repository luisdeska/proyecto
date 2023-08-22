<!DOCTYPE html>
<html lang="es"> 
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=REM:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=REM:wght@300&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
	<title>JobFlex</title>
</head>
<body>	

	<div id="contenedor">
		<h1 id="bienvenida">Bienvenido a JobFlex</h1>
		<a href="login.php"><button id="Entrar">Entrar</button></a>
		<img id="banner" src="imagenes/trabajo_equipo.jpg" alt="trabajadores"  width="1920px">
		<br><br>
		<h2>JobFlex, donde el talento de los estudiantes encuentra su camino hacia el éxito laboral.</h2>
		<br>
	</div>
	

	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		</div>
		<div class="carousel-inner">
		<div class="carousel-item active" data-bs-interval="5000">
			<img src="imagenes/carrusel1.jpg" class="d-block w-100" alt="Img1">
			<div class="carousel-caption d-none d-md-block">
			<h5>Encuentra la mejor opción para ti</h5>
			<p>Siempre se buscan trabajadores.</p>
			</div>
		</div>
		<div class="carousel-item" data-bs-interval="5000">
			<img src="imagenes/carrusel2.jpg" class="d-block w-100" alt="Img2">
			<div class="carousel-caption d-none d-md-block">
			<h5>La mejor opción para estudiantes</h5>
			<p>Continua tus estudios mientras generas un ingreso.</p>
			</div>
		</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Anterior</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Siguiente</span>
		</button>
	</div>

	<div id="contenido" class="container">
		<div class="row">
			<div class="col-md-6">
				<p>En JobFlex, nos enorgullece ser una plataforma líder en la búsqueda de empleo para estudiantes universitarios. Nuestro objetivo es brindar una solución integral para conectar a estudiantes talentosos con oportunidades de trabajo flexibles y ajustadas a sus horarios.</p>
				
			</div>
			<div class="col-md-6 ms-auto">
				<p>Nuestra visión se basa en la idea de que los estudiantes universitarios merecen tener acceso a oportunidades laborales flexibles y de calidad. Nos esforzamos por ser líderes en la industria al ofrecer una plataforma confiable, segura y fácil de usar.</p>
			</div>
		</div>
		<div class="row" id="invitacion">
				<p>¡Únete a nosotros y descubre un nuevo mundo de oportunidades laborales flexibles y adaptadas a tu estilo de vida estudiantil! En JobFlex, estamos aquí para apoyarte en tu crecimiento profesional mientras te enfocas en tus estudios y alcanzas tus metas académicas.</p>
		</div>
	</div>
		
	
	
	<footer id="main-footer">
        <div> 
            <h2>JobFlex</h2>
            <div>
                <p>Todos los derechos reservados &copy 2023</p>
            </div>
        </div>
        <div>
            <a href="#">
                <svg width="21" height="21" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16 8.0486C16 3.60314 12.418 -0.000610352 7.99949 -0.000610352C3.58095 -0.000610352 -0.000976562 3.60314 -0.000976562 8.0486C-0.000976562 12.0662 2.92468 15.3962 6.74942 16V10.3753H4.71805V8.0486H6.74942V6.27526C6.74942 4.25792 7.94383 3.14361 9.77132 3.14361C10.6466 3.14361 11.5622 3.30082 11.5622 3.30082V5.28168H10.5534C9.55951 5.28168 9.24957 5.90215 9.24957 6.53869V8.0486H11.4684L11.1137 10.3753H9.24957V16C13.0743 15.3962 16 12.0662 16 8.0486Z" fill="black"/>
				</svg>
					
            </a>
            <a href="#">
                <svg width="21" height="21" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.0495854 3.55544C0.25173 2.66484 1.04822 2 2 2H14C14.9518 2 15.7483 2.66484 15.9504 3.55544L8 8.41403L0.0495854 3.55544ZM0 4.69708V11.8006L5.80319 8.24348L0 4.69708ZM6.7614 8.82905L0.191871 12.8559C0.512604 13.5323 1.20168 14 2 14H14C14.7983 14 15.4874 13.5323 15.8081 12.8559L9.2386 8.82905L8 9.58597L6.7614 8.82905ZM10.1968 8.24348L16 11.8006V4.69708L10.1968 8.24348Z" fill="black"/>
					</svg>
					
            </a>
            <a href="#">
                <svg width="21" height="21" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M1.88477 0.511076C2.62689 -0.231039 3.85149 -0.154797 4.49583 0.673634L6.28954 2.97983C6.6187 3.40304 6.73502 3.95409 6.60498 4.47423L6.05772 6.66329C5.99994 6.8944 6.06766 7.13888 6.2361 7.30732L8.69268 9.7639C8.86113 9.93235 9.1056 10.0001 9.33671 9.94229L11.5258 9.39502C12.0459 9.26499 12.597 9.3813 13.0202 9.71047L15.3264 11.5042C16.1548 12.1485 16.231 13.3731 15.4889 14.1152L14.455 15.1492C13.7153 15.8889 12.6089 16.2137 11.5778 15.8512C9.01754 14.9511 6.61438 13.4774 4.56849 11.4315C2.5226 9.38562 1.04895 6.98246 0.148838 4.42225C-0.213682 3.39112 0.11113 2.28472 0.85085 1.545L1.88477 0.511076Z" fill="black"/>
					</svg>
					
					
            </a>
       </div>
    </footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	
</body>
</html>
