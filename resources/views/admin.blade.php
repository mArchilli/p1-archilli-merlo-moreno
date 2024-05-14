<x-layoutadmin>

    <x-slot:title>Administracion</x-slot:title>

    <section class="py-5">
	<div class="container">
		<div class="row justify-content-center text-center mt-5">
			<div class="col-md-8">
				<h2 class="mosta pb-2 fw-bold display-5">Accede al panel administrativo</h2>
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
							<h3 class="fw-bold mb-0">Edición de Blog</h3>
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