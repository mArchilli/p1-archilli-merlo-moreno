<x-layout>
    <x-slot:title>Iniciar Sesión</x-slot:title>

    <h1 class="mb-3">Ingresar a mi Cuenta</h1>

    <section class="text-center text-lg-start">

        <div class="container py-4">
            <div class="row g-0 align-items-center justify-content-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5 mosta">Ingresá Ahora</h2>
                            <form action="{{ route('auth.login.process') }}" method="POST">

                                @csrf

                                <div class="form-outline mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        value="{{ old('email') }}">
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                </div>

                                <button type="submit" class="btnespecial btn-block mb-4">Ingresar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('images/login/muchos-libros2.jpg') }}" class="w-100 rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
    </section>
</x-layout>
