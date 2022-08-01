<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background-color: #C0C0C0;
        }
        .form{
            width: 190px;
            height: 100px;
            top: 300px;
            border-radius: 12px;
            padding: 100px;
            background: linear-gradient(#999, #777);
            position: relative;
            

        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        .btn {
            margin-top: 10px;
        }
        .logotipo{
            position: absolute;
            width: 170px;
            height: 70px;
            margin: 1px;
            bottom: 320px;
        }
        #password{
            border-radius: 4px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            box-shadow: 1px 1px 2px #333333;
            -moz-box-shadow: 1px 1px 2px #333333;
            -webkit-box-shadow: 1px 1px 2px #333333;
            background: #cccccc;
            border: 1px solid #000000;
            height: 26px;
            width: 300px;

        }
        #email{
            border-radius: 4px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            box-shadow: 1px 1px 2px #333333;
            -moz-box-shadow: 1px 1px 2px #333333;
            -webkit-box-shadow: 1px 1px 2px #333333;
            background: #cccccc;
            border: 1px solid #000000;
            height: 26px;
            width: 300px;
        }
        .mt-4{
            color: white;
            font-size: 13px;
            font-family:;
            font-weight: bold;
            position: absolute;
            top: 120px;
            left: 30px;
        }
        .em{
            color: white;
            font-size: 13px;
            font-family:;
            font-weight: bold;
            position: absolute;
            top: 60px;
            left: 30px;
        }
        .flex{
            position: absolute;
            top: 120px;
            left: 101px;
        }
        .register{
            position: absolute;
            top: 140px;
            left: 1px;
        }
        .underline{
            text-decoration: underline;
            color: #d3d3d3;
            font-size: 15px;
            font-family:;
            font-weight: bold;
        } 
        .underline:hover{
            color: #555555;
        }
        .ml-3{
            background-color: #d3d3d3;
            color: black;
            border: 2px solid #555555;
            border-radius: 12px;
            border: none;
            color: white;
            padding: 12px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .ml-3:hover{
           background-color: #555555;
            color: white;
        }
        .error-message {
            background: white;
            color: black;
            text-align: center;
            list-style-type: none;
            width: 40%;
            border-radius: 12px;
            position: relative;
            left: 580px;
            
        }
        </style>
</head>
<body>

    <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4 error-message" :errors="$errors" />
        
    <div class = "container">
    
    
    <form class="form group control" method="post">
        @csrf <!-- {{ csrf_field() }} -->
    <img src="img/logo-rodape.png" alt="Mirror Fashion" class="logotipo">
                {{-- Email --}}

             <div class = "em">
                <x-label for="email" :value="__('Email')" />
                <BR>
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
        
            {{-- Password --}}

            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />
                <BR>
                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <div class="block ">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            {{-- Cadastro --}}

            <div class = "register">
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="underline">{{ __('Register') }}</a>
                @endif


            </div>

            <div class="flex items-center justify-end ">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
    </form>
    </div>
</body>
</html>