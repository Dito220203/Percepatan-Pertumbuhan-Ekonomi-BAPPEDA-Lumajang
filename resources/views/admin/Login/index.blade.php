<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="" name="viewport">

    <title>Login - P2 Ekonomi BAPPEDA</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        
        <div class="login-card">
            
            <div class="logo-section">
                <img src="{{ asset('assets/img/logo-kabupaten.png') }}" alt="Logo" class="logo">
                <h1>Percepatan Pertumbuhan Ekonomi KAB.Lumajang</h1>
                {{-- <p class="subtitle">BAPPEDA Dashboard</p> --}}
            </div>

            <div class="form-header">
                {{-- <h2>Welcome Back</h2> --}}
                <p>Silakan login untuk mengakses dashboard</p>
            </div>

            <form action="{{ route('login.post') }}" method="POST" id="loginForm" class="login-form">
                @csrf

                <div class="form-group">
                    <label for="yourUsername">Username</label>
                    <div class="input-wrapper @error('username') error @enderror">
                        <i class="bi bi-person"></i>
                        <input 
                            type="text" 
                            id="yourUsername" 
                            name="username" 
                            placeholder="Masukkan username"
                            value="{{ old('username') }}"
                            required
                        >
                    </div>
                    <span class="error-message" id="usernameError">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="form-group">
                    <label for="yourPassword">Password</label>
                    <div class="input-wrapper @error('password') error @enderror">
                        <i class="bi bi-lock"></i>
                        <input 
                            type="password" 
                            id="yourPassword" 
                            name="password" 
                            placeholder="Masukkan password"
                            required
                        >
                        <i class="bi bi-eye toggle-password" id="togglePassword"></i>
                    </div>
                    <span class="error-message" id="passwordError">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <button type="submit" class="btn-login">
                    <span>Login</span>
                    <i class="bi bi-arrow-right"></i>
                </button>
            </form>

            <div class="footer-text">
                <p>&copy; 2025 <strong>P2 Ekonomi BAPPEDA</strong></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Toggle Password Visibility
            const togglePassword = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('yourPassword');

            if (togglePassword && passwordInput) {
                togglePassword.addEventListener('click', function() {
                    const type = passwordInput.type === 'password' ? 'text' : 'password';
                    passwordInput.type = type;
                    this.classList.toggle('bi-eye');
                    this.classList.toggle('bi-eye-slash');
                });
            }

            // Form Validation & Submit Logic (Sama seperti sebelumnya)
            const form = document.getElementById('loginForm');
            const username = document.getElementById('yourUsername');
            const password = document.getElementById('yourPassword');

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                let isValid = true;
                
                // Clear previous errors
                document.getElementById('usernameError').textContent = '';
                document.getElementById('passwordError').textContent = '';
                username.parentElement.classList.remove('error');
                password.parentElement.classList.remove('error');

                if (username.value.trim() === '') {
                    document.getElementById('usernameError').textContent = 'Username tidak boleh kosong';
                    username.parentElement.classList.add('error');
                    isValid = false;
                }

                if (password.value.trim() === '') {
                    document.getElementById('passwordError').textContent = 'Password tidak boleh kosong';
                    password.parentElement.classList.add('error');
                    isValid = false;
                }

                if (isValid) {
                    Swal.fire({
                    title: 'Sedang Memproses...',
                    html: 'Mohon tunggu sebentar',
                    allowOutsideClick: false,
                    showConfirmButton: false, // Hilangkan tombol saat loading
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                form.submit();
            }
            });

            @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil Masuk!',
                text: '{{ session('success') }}',
                timer: 2000,
                timerProgressBar: true,
                showConfirmButton: false
            });
        @endif

            @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Gagal Masuk',
                text: '{{ session('error') }}',
                confirmButtonText: 'Coba Lagi',
            });
        @endif

            // Input focus effects
            const inputs = document.querySelectorAll('.input-wrapper input');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('focused');
                });
                input.addEventListener('blur', function() {
                    if (this.value === '') {
                        this.parentElement.classList.remove('focused');
                    }
                });
            });
        });
    </script>

</body>
</html>