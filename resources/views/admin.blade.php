<x-layoutadmin>

    <x-slot:title>Administracion</x-slot:title>

    <section class="py-5 mt-5">
	<div class="container">
		<div class="row align-items-center gx-4">
			
			<div class="col-md-5 offset-md-1">
				<div class="ms-md-2 ms-lg-5">
					<h2 class="mosta display-5 fs-1 fw-bold py-2">¡Bienvenido al panel administrativo!</h2>
					<p class="lead"> Aquí puedes agregar, editar o eliminar fácilmente entradas y libros según tus necesidades. 
                        Simplificamos la gestión para que puedas concentrarte en lo que más importa: 
                        tu contenido. ¡Explora y crea sin límites!</p>
				</div>
			</div>
            <div class="col-md-6">
				<div class="ms-md-2 ms-lg-5"><img class="img-fluid rounded-3" src="{{ asset('images/about/admin.jpg') }}"></div>
			</div>
		</div>
	</div>
</section>

    <section class="py-5 mb-5">
	<div class="container">
		<div class="row justify-content-center text-center mt-5">
			<div class="col-md-8">
				<h2 class="mosta pb-2 fs-1 fw-bold display-5">Acceder al panel administrativo</h2>
				<p class="lead mb-5">Compartí los libros y entradas que desees con todos los lectores de Libralink</p>
			</div>
			<div class="col-lg-8">
				<div class="row gy-3">
					<div class="col-md-6">
						<div class="border rounded-3 bg-white p-5">
							<h3 class="fw-bold mb-0">Edición de Libros</h3>
							<p class="my-4">Administra todos tus libros en un solo lugar</p>
                            <a class="btnespecial fs-4" href="{{ route('libroadm') }}">Empezar</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="border rounded-3 bg-white p-5">
							<h3 class="fw-bold mb-0">Edición del Blog</h3>
							<p class="my-4">Administra todas tus entradas en un solo lugar</p>
                            <a class="btnespecial fs-4" href="{{ route('blogadm') }}">Empezar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


</x-layoutadmin>