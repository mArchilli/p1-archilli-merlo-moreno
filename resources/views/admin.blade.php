<x-layoutadmin>

    <x-slot:title>Administracion</x-slot:title>

    <div class="row">
        <h1>Panel de Administracion</h1>

        <div class="col-12 col-md-6">
           <a href="{{ route('blogadm') }}">Blog</a>
        </div>

        <div class="col-12 col-md-6">
            <a href="{{ route('libroadm') }}">Libros</a>
        </div>
    </div>

</x-layoutadmin>