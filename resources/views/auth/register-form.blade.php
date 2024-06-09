<x-layout>
    <x-slot:title>Registro</x-slot:title>


    <h1 class="d-none">Registrarse</h1>

    <section class="text-center text-lg-start">
        <div class="container py-4">
            <div class="row g-0 align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('images/login/libros-login.jpg') }}" class="libroslogin rounded-4 shadow-4 d-none d-lg-block" alt="Imagen de libros en blanco y negro" />
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                        <div class="card-body p-5 shadow-5">
                            <h2 class="fw-bold mosta">Crear cuenta</h2>
                            <h3 class="fw-bold mb-5 mosta">Ingresa tus datos</h3>
                            <form action="{{ route('auth.register.process') }}" method="POST">

                                @csrf

                                <div class="form-outline mb-4">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        value="{{ old('email') }}">
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="lastName" class="form-label">Apellido</label>
                                    <input type="text" id="lastName" name="lastName" class="form-control"
                                        value="{{ old('email') }}">
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="{{ old('email') }}">
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox" class="form-label">Acepto los términos y condiciones</label>
                                </div>

                                <button type="submit" class="btnespecial btn-block mb-4 w-100">Registrarse</button>
                            </form>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>
</x-layout>
