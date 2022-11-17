<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}">

    <title>Iniciar Sesion</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">


          <x-flash-messages />

          <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />

          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
            </div>

            <!-- Remember Me -->
            <div>
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <br>

                <x-primary-button class="btn">
                    {{ __('Log in') }}
                </x-primary-button>

                @foreach ($errors->all() as $error)
                <div style="display: block"> {{ $error }} </div>
            @endforeach
                
              
            </div>
          </form>


          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
            @csrf
            <h2 class="title">Sign up</h2>

            <!-- Name -->
            <div class="input-field">
              <i class="fas fa-user"></i>
              <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="Nombre"/>

            </div>

            <!-- Apellido -->
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <x-text-input id="apellido" class="block mt-1 w-full" type="text" name="apellido" :value="old('apellido')" required autofocus placeholder="Apellido" />
            </div>

            <!-- Documento -->
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <x-text-input id="documento" class="block mt-1 w-full" type="number" name="documento" :value="old('documento')" required autofocus placeholder="Documento" />

            </div>

            <!-- Telefono -->
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <x-text-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required autofocus placeholder="Telefono" />

            </div>

            <!-- Email Address -->
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Email" />

            </div>

            <!-- Password -->
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
            </div>
            
            <!-- Confirm Password -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required placeholder="Password confirmation" />
            </div>

            <div>
                <x-primary-button  class="btn">
                    {{ __('Register') }}
                </x-primary-button>
            </div>

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
              ex ratione. Aliquid!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="{{ asset('images/log.svg') }}" alt="" class="image">
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="{{ asset('images/register.svg') }}" alt="" class="image">
        </div>
      </div>
    </div>

    <script src="{{ asset('js/auth.js') }}"></script>
  </body>
</html>
