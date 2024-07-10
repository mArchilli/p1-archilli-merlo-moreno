<x-layout>
    <x-slot:title>Sobre nosotros</x-slot:title>

    <section class="py-5">
	<div class="mt-5 container">
		<div class="row align-items-center gx-4">
			<div class="col-md-5">
				<div class="ms-md-2 ms-lg-5"><img class="img-fluid rounded-3" alt="Imagen de portada sobre nosotros" src="{{ asset('images/about/libro.jpg') }}"></div>
			</div>
			<div class="col-md-6 offset-md-1">
				<div class="ms-md-2 ms-lg-5">
					<h2 class="mosta display-5 fw-bold py-2">Sobre Nosotros</h2>
					<p class="lead">Libralink es una innovadora plataforma digital argentina que ofrece
                        suscripciones mensuales para el acceso a una extensa variedad de libros electrónicos
                        en formatos online y offline. Nuestro catálogo abarca desde literatura de ciencia
                        ficción y terror hasta romances y cuentos infantiles, satisfaciendo los gustos de cada
                        lector.</p>
					<p class="lead mb-0">Además, nuestra plataforma incluye un blog interactivo donde los
                        usuarios pueden escribir reseñas, compartir opiniones y debatir sobre sus lecturas
                        favoritas.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center text-center mt-5">
			<div class="col-md-8">
				<h2 class="mosta pb-4 fw-bold display-5">Descubre lo que tenemos para ti</h2>
				<p class="lead mb-4">Explora nuestra diversa selección de libros
                    y sumérgete en tu próxima gran aventura literaria.</p>
			</div>
			<div class="col-lg-8">
				<div class="row gy-3">
					<div class="col-md-6">
						<div class="border rounded-3 bg-white p-5">
							<h3 class="fw-bold mb-0">Nuestro catálogo</h3>
							<p class="my-4">Navega por nuestra amplia variedad de géneros y encuentra el libro perfecto para cada momento.</p>
                            <a class="btnespecial" href="{{ route('catalogo') }}">Más Información</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="border rounded-3 bg-white p-5">
							<h3 class="fw-bold mb-0">Empezá hoy</h3>
							<p class="my-4">Registrate ahora, explorá nuestra vasta biblioteca y participá en nuestro blog interactivo con solo un clic.</p>
                            <a class="btnespecial" href="{{ route('auth.login.form') }}">Ingresar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="py-5">
	<div class="container">
		<div class="row justify-content-center text-center mb-3">
			<div class="col-lg-8 col-xl-7">
				<span class="text-muted">F.A.Q</span>
				<h2 class="mosta display-5 fw-bold pb-3">Preguntas Frecuentes</h2>
				<p class="lead">Encuentra respuestas rápidas a tus dudas más comunes y obtén más información sobre
                    cómo aprovechar al máximo nuestra plataforma.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-5 align-items-center">
				<h2 class="pb-4 pt-4 fw-bold">¿Tenés alguna pregunta?</h2>
				<p class="pb-3 pt-2">Si tenés alguna pregunta adicional o necesitas más información, no dudes en contactarnos. Estamos aquí para ayudarte.</p>
                <a class="btnespecial" href="#">Contáctanos</a>
			</div>
			<div class="col-md-7 mt-4">
				<div class="accordion" id="Questions-accordion">
					<div class="accordion-item">
						<h3 class="accordion-header" id="Questions-headingOne"><button aria-controls="Questions-collapseOne" aria-expanded="false" class="accordion-button collapsed bg-light" data-bs-target="#Questions-collapseOne" data-bs-toggle="collapse" type="button">
						<div class="text-muted me-3">
							<svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
						</div>¿Cómo puedo registrarme en Libralink?</button></h3>
						<div aria-labelledby="Questions-headingOne" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseOne">
							<div class="accordion-body">
                            Para registrarte, simplemente haz clic en el botón "Regístrate" en nuestra página de inicio, completa el formulario con tus datos y sigue las instrucciones para confirmar tu cuenta. ¡Es rápido y fácil!
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h2 class="accordion-header" id="Questions-headingTwo"><button aria-controls="Questions-collapseTwo" aria-expanded="false" class="accordion-button collapsed bg-light" data-bs-target="#Questions-collapseTwo" data-bs-toggle="collapse" type="button">
						<div class="text-muted me-3">
							<svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
						</div>¿Puedo acceder a los libros sin conexión a internet?</button></h2>
						<div aria-labelledby="Questions-headingTwo" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseTwo">
							<div class="accordion-body">
                            Sí, con nuestra suscripción premium puedes descargar libros para leerlos offline. Asegúrate de descargar los libros que desees leer mientras tengas conexión a internet y podrás disfrutarlos en cualquier lugar, sin necesidad de conexión.
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h3 class="accordion-header" id="Questions-headingThree"><button aria-controls="Questions-collapseThree" aria-expanded="false" class="accordion-button collapsed bg-light" data-bs-target="#Questions-collapseThree" data-bs-toggle="collapse" type="button">
						<div class="text-muted me-3">
							<svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
						</div>¿Qué tipos de libros ofrece Libralink?</button></h3>
						<div aria-labelledby="Questions-headingThree" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseThree">
							<div class="accordion-body">
                            Nuestro catálogo incluye una amplia variedad de géneros, desde ciencia ficción, terror y romance, hasta libros de recetas y literatura infantil. ¡Hay algo para cada lector en Libralink!
							</div>
						</div>
					</div>
					<div class="accordion-item">
						<h3 class="accordion-header" id="Questions-headingFour"><button aria-controls="Questions-collapseFour" aria-expanded="false" class="accordion-button collapsed bg-light" data-bs-target="#Questions-collapseFour" data-bs-toggle="collapse" type="button">
						<div class="text-muted me-3">
							<svg class="bi bi-question-circle-fill" fill="currentColor" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
							<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"></path></svg>
						</div>¿Cómo puedo participar en el blog de Libralink?</button></h3>
						<div aria-labelledby="Questions-headingFour" class="accordion-collapse collapse" data-bs-parent="#Questions-accordion" id="Questions-collapseFour">
							<div class="accordion-body">
                            Todos nuestros usuarios registrados con el plan PREMIUM pueden participar en el blog. Una vez que inicies sesión, podrás escribir reseñas, compartir opiniones y discutir sobre tus autores y libros favoritos. Simplemente navega a la sección del blog en nuestro sitio web y comienza a compartir tus pensamientos y experiencias con la comunidad.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</x-layout>
