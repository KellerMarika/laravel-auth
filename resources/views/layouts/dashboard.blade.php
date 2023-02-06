<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--  <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body class=" bg-secondary{{-- {{ Auth::user() ? 'bg-success' : 'bg-danger' }} --}}">
    <div id="app" class="">
        <div class="dashboard-container d-flex">
            <aside class="dashboard-aside text-start">

                <div class="d-flex align-items-end shadow-sm">

                    <div class="logo pt-2">
                        {{-- Keller-logo --}}
                        <svg class="keller-logo " width="112" height="111" viewBox="0 0 1426 1419" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="712.84" cy="709.469" rx="393.5" ry="368" fill="" />
                            <path d="M964.462 946.311L834.962 769.311L896.462 709.311L1069.46 946.311H964.462Z"
                                fill="#D9D9D9" stroke="black" />
                            <path d="M637.84 818.469L589.84 942.469L395.34 565.469H504.84L637.84 818.469Z"
                                fill="#D9D9D9" stroke="black" />
                            <path
                                d="M502.34 946.469H331.34C349.007 936.302 390.74 900.269 416.34 837.469C440.74 897.869 483.84 935.302 502.34 946.469Z"
                                fill="#D9D9D9" stroke="black" />
                            <path
                                d="M1046.46 563.811L948.462 660.311C941.662 603.911 902.296 572.478 883.462 563.811H1046.46Z"
                                fill="#D9D9D9" stroke="black" />
                            <rect x="713.841" y="167.969" width="66" height="1073" fill="#D9D9D9"
                                stroke="black" />
                        </svg>
                    </div>

                    <h5 class="logo-title">dashboard</h5>
                </div>


                <div class="users-options px-3 py-4 ">
                    <h6>user options</h6>
                    <ul class="list-group ">
                        <li class="list-group-item bg-transparent">email</li>
                        <li class="list-group-item bg-transparent">chat</li>
                        <li class="list-group-item bg-transparent">to do</li>
                    </ul>
                </div>
            </aside>

            <main class=" w-100 rounded-4 m-2">
                <nav class="d-flex">
                    <h5>nav</h5>
                    
                </nav>
                <div class="row"></div>

            </main>











        </div>
        {{-- @yield('content') --}}
    </div>
</body>

</html>
