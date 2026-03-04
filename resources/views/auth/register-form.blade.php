<x-layout>
    <x-slot:title>Registro</x-slot:title>

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
                                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="lastName" class="form-label">Apellido</label>
                                    <input type="text" id="lastName" name="lastName" class="form-control" value="{{ old('lastName') }}">
                                    @error('lastName')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                                    @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" id="password" name="password" class="form-control">
                                    @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label d-block">Suscripción</label>
                                    <div class="d-flex justify-content-between">
                                        <div class="form-check p-3 rounded-4 border text-center plan-card" style="width: 30%;">
                                            <input type="radio" id="gratis" name="role" value="gratis" class="form-check-input" checked required>
                                            <label for="gratis" class="form-check-label d-block fw-semibold">Gratis</label>
                                            <p class="mb-0 fw-bold">$0</p>
                                        </div>
                                        <div class="form-check p-3 rounded-4 border text-center plan-card mx-2" style="width: 30%;">
                                            <input type="radio" id="pro" name="role" value="pro" class="form-check-input" required>
                                            <label for="pro" class="form-check-label d-block fw-semibold">Pro</label>
                                            <p class="mb-0 fw-bold">$9</p>
                                            <span class="badge bg-primary mt-1" style="font-size: 0.6rem;">MercadoPago</span>
                                        </div>
                                        <div class="form-check p-3 rounded-4 border text-center plan-card" style="width: 30%;">
                                            <input type="radio" id="premium" name="role" value="premium" class="form-check-input" required>
                                            <label for="premium" class="form-check-label d-block fw-semibold">Premium</label>
                                            <p class="mb-0 fw-bold">$18</p>
                                            <span class="badge bg-primary mt-1" style="font-size: 0.6rem;">MercadoPago</span>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-2 mb-0" style="font-size: 0.8rem;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-info-circle me-1" viewBox="0 0 16 16">
                                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                        </svg>
                                        Los planes <strong>Pro</strong> y <strong>Premium</strong> requieren pago mediante MercadoPago antes de completar el registro.
                                    </p>
                                    @error('role')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox" class="form-label">Acepto los términos y condiciones</label>
                                    @error('checkbox')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btnespecial btn-block mb-4 w-100" id="submit-btn">Registrarse</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const planRadios = document.querySelectorAll('input[name="role"]');
        const submitBtn  = document.getElementById('submit-btn');

        function updateButton() {
            const selected = document.querySelector('input[name="role"]:checked');
            if (selected && (selected.value === 'pro' || selected.value === 'premium')) {
                submitBtn.textContent = 'Continuar al pago con MercadoPago';
            } else {
                submitBtn.textContent = 'Registrarse';
            }
        }

        planRadios.forEach(radio => radio.addEventListener('change', updateButton));
        updateButton();
    </script>
</x-layout>
