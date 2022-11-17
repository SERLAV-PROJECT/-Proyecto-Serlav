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

    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />

          <form method="POST" action="{{ route('login') }}" class="sign-in-form">
            @csrf
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="email" type="email" name="email" :value="old('email')" placeholder="Username" required autofocus/>

              <x-input-error :messages="$errors->get('email')"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" />

              <x-input-error :messages="$errors->get('password')" />
            </div>

            <!-- Remember Me -->
            <div class="input-field">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="input-field">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ml-3">
                    {{ __('Log in') }}
                </x-primary-button>

            </div>
          </form>


          <form method="POST" action="{{ route('register') }}" class="sign-up-form">
            @csrf
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input id="name" type="text" name="name" :value="old('name')" required autofocus />

              <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>


            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input id="apellido" type="text" name="apellido" :value="old('apellido')" required autofocus />

              <x-input-error :messages="$errors->get('apellido')" class="mt-2" />
            </div>


            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="documento" type="number" name="documento" :value="old('documento')" required autofocus />

              <x-input-error :messages="$errors->get('documento')" class="mt-2" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="telefono" type="number" name="telefono" :value="old('telefono')" required autofocus />

              <x-input-error :messages="$errors->get('documento')" class="mt-2" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="email" type="email" name="email" :value="old('email')" required />

              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />

              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="password_confirmation"
                                type="password"
                                name="password_confirmation" required />

              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="estado" type="text" name="estado" :value="old('estado')" required autofocus />

              <x-input-error :messages="$errors->get('estado')" class="mt-2" />
            </div>

            <div class="btn">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            
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