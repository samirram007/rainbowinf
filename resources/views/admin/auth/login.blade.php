{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            align-items: center;
            justify-content: center;
            background-position: center;
            background-repeat: none;
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/images/rainbowimg.jpg');
            background-size: cover;
            background-color: rgba(0, 0, 0, 25%);


        }

        body::before {
            content: "";
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 25%);
        }

        .loginpage {
            height: 100vh;
            background-color: red;
        }

        .container {

            margin-top: 12%;
        }

        .card {
            overflow: hidden;
            border: 0 !important;
            border-radius: 20px !important;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 25%);
        }

        .img-left {
            width: 50%;
            height: 100%;
            background: url('/images/rainbowlogin_admin.jpg');
            background-size: cover;
        }

        .img-left .rainbow-logo {
            height: 4.7rem;
            width: 6rem;
            position: absolute;
            top: 10px;
            left: 15px;
        }

        .card-body {
            padding: 2rem;
            width: 50%;
        }

        .title {
            margin-bottom: 3rem;
        }

        .form-input {
            position: relative;
        }

        .form-input input {
            width: 100%;
            height: 45px;
            padding-left: 40px;
            margin-bottom: 20px;
            box-sizing: border-box;
            box-shadow: none;
            border: 1px solid #00000020;
            border-radius: 50px;
            outline: none;
            background: transparent;
        }

        .form-input span {
            position: absolute;
            top: 10px;
            padding-left: 15px;
            color: #007bff;
        }

        .mobile-logo {
            display: none;
        }

        @media(max-width:991px) {
            .container {
                margin-top: 2%;
            }

            .mobile-logo {
                display: block;
            }

        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    {{-- <div class="d-flex justify-content-end px-5 pt-5">
        <a href="{{ route('login') }}" class="btn bg-white fw-bold">Employee Login</a>
    </div> --}}

    <div class="container">
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="row px-3 py-4">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex">
                    <a href="/"> <img src="{{ asset('images/logo.png') }}" alt=""
                            class="rainbow-logo"></a>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="" srcset="" class="mobile-logo">
                    </div>
                    <h4 class="title fw-bold text-center mt-4 mb-3 text-uppercase">
                        Admin login
                    </h4>
                    <form action="{{ route('login') }}" method="post" class="form-box my-5 px-3">
                        @csrf
                        <div class="form-input">
                            <span><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Enter Admin Email Address" tabindex="10"
                                required id="email">
                        </div>
                        <div class="form-input">
                            <span><i class="fa fa-key"></i></span>
                            <input type="password" name="password" id="password" placeholder="Enter Admin Password"
                                tabindex="10" required>
                        </div>
                        <div class="mt-4 mb-5 d-flex justify-content-center">
                            <button type="submit"
                                class="btn btn-success rounded-5 fw-bold w-100 text-uppercase">LogIn</button>
                        </div>

                    </form>
                    <hr class="bg-dark">
                    <div class="d-flex float-end">
                     <a href="{{route('login')}}" class="btn bg-dark text-white">Employee Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
