<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <title>ProMachine | ApoMechanis</title>
</head>
<body class="bg-gray-200">

    <nav class="p-6 bg-white flex justify-between mb-6 shadow-sm">
        <ul class="flex items-center">
            <li>
                <a href="{{ route('dashboard') }}">
                    <img class="h-20 mr-4" src="/images/promachine_002.png" alt="ProMachine Logo">
                </a>
            </li>
            <li><a href="/home" class="p-3">Αρχική</a></li>
            <li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
{{--            <li><a href="{{ route('posts') }}" class="p-3">Posts</a></li>--}}

            <li>
                <div class="">

                    <div class="dropdown inline-block relative">
                        <button class="bg-white  px-3 rounded inline-flex items-center">
                            <span class="mr-1">Skroutz URLs</span>
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/> </svg>
                        </button>
                        <ul class="dropdown-menu absolute hidden text-gray-700 pt-1">
                            <li class=""><a href="{{route('mpnList')}}" class="rounded-t bg-gray-100 hover:bg-blue-100 py-2 px-4 block whitespace-no-wrap">Εύρεση με MPN</a></li>
                            <li class=""><a href="{{route('eanList')}}" class="bg-gray-100 hover:bg-blue-100 py-2 px-4 block whitespace-no-wrap">Εύρεση με EAN</a></li>
{{--                            <li class=""><a href="#" class="rounded-b bg-gray-100 hover:bg-blue-100 py-2 px-4 block whitespace-no-wrap">Placeholder</a></li>--}}
                        </ul>
                    </div>

                </div>
            </li>
        </ul>

        <ul class="flex items-center">
            @auth
                <li><a href="#" class="p-3">{{ auth()->user()->name }}</a></li>
                <li>
                    <form action="{{ route('logout') }}" method="post" class="inline p-3">
                        @csrf
                        <button type="submit" href="{{ route('logout') }}">Logout</button>
                    </form>
                </li>
            @endauth

            @guest
                <li><a href="{{ route('login') }}" class="inline-block uppercase font-semibold tracking-wider bg-indigo-600 text-gray-50 rounded-sm hover:shadow-md py-3 px-6 text-sm">Login</a></li>
{{--                <li><a href="{{ route('login') }}" class="p-3">Login</a></li>--}}
                <li><a href="{{ route('register') }}" class="p-3">Register</a></li>
            @endguest
        </ul>
    </nav>

    @yield('content')
</body>
</html>
