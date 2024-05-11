<x-layout>

    <x-slot:title>Login</x-slot:title>

    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5 mosta">Ingresá Ahora</h2>

                            <form action="{{ route('auth.login.process') }}" method="POST">

                                @csrf

                                <!-- Email input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}"/>

                                </div>

                                <!-- Password input -->
                                <div data-mdb-input-init class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control" />
                                    <label class="form-label" for="password">Contraseña</label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" data-mdb-button-init data-mdb-ripple-init
                                    class="btnespecial btn-block mb-4">
                                    Ingresar
                                </button>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('images/login/muchos-libros2.jpg') }}" class="w-100 rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</x-layout>
