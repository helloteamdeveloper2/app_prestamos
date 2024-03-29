<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>Dinero Inmediato</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b34d6606d6.js" crossorigin="anonymous"></script>

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing/style.css') }}" rel="stylesheet">
    @stack('css')
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    @livewireStyles
    @livewireScripts

    <style>
        .solicita:hover{
            background: #da8b0c !important;

            color: white;

        }
        .solicita{
            background: #f5a82d !important;
            color: white;
        }
        .btn-verde{
            background: #38A937
        }
        .btn-verde:hover{
            color: #e0fc70;
        }
        .btn-close{
            color: black;
        }
        p{
            color:red;
            font-size: 15px;
        }
        @media only screen and (max-width: 460px){
            .texto-solicita-verde{
                font-size: 35px;
                color: #38A937;
                margin-bottom: 10px;
            }
            .vinculo{
                color: #38A937;
                font-size: 15px;
            }
            .text-green{
                color: #38A937;
                font-size: 15px;
            }
        }
        @media only screen and (max-width: 400px){
            .texto-solicita-verde{
                font-size: 29px;
                color: #38A937;
                margin-bottom: 10px;
            }
            .vinculo{
                color: #38A937;
                font-size: 13px;
            }
            .text-green{
                color: #38A937;
                font-size: 13px;
            }
        }
        @media only screen and (max-width: 386px){
            .texto-solicita-verde{
                font-size: 29px;
                color: #38A937;
                margin-bottom: 10px;
            }
            .vinculo{
                color: #38A937;
                font-size: 13px;
            }
            .text-green{
                color: #38A937;
                font-size: 13px;
            }
        }

    </style>
</head>

<body >
    {{-- <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 shadow">
        <a href="index.html" class="navbar-brand p-0">
            <img src="{{ asset('img/logo.png')}}" width="180"  class="d-inline-block align-text-top ml-10" style="margin-top: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse bg-white  p-3" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link active text-dark itemNav">Inicio</a>
                <a href="about.html" class="nav-item nav-link text-dark itemNav">Acerca de Nosotros</a>
            </div>

            <a href="" class="btn btn-outline-secondary py-2 px-4 ms-3 itemNav">Inicio de Sesión</a>
            <a href="" class="btn btn-primary py-2 px-4 ms-3 itemNav solicita">¡Solicita tu pr&eacute;stamo ya!</a>
        </div>
    </nav> --}}
{{--Menú--}}
@include('components.landing.cuerpo._menu')


    <div class="content cent" >
        <center>
            @if (session('status'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <p>{{session('status')}}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
            </div>
            @endif
            <div>
               <form action="{{route('login.store')}}" method="POST">
                    @csrf
                    <p class="texto-solicita-verde Medium Carot">Inicio de sesión</p>
                    <input name="credencial" type="text" placeholder="Correo electrónico o teléfono" class="form-control Carot ExtraLight" >
                    @error('credencial')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                    <br />
                    <input name="password" type="password" placeholder="Contraseña" class="form-control Carot ExtraLight"  >
                    @error('password')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                    <center><p class="text-green Carot Sans" style="padding-top:20px; padding-bottom:20px;">¿Olvidaste tu contraseña?. <a href="{{route('recover1')}}" class="vinculo" style=" text-decoration: underline; ">Haz clic aquí para recuperarla</a></p></center>
                    <div>
                        <a  class="btn btn-verde btn-md btn-block" href="{{route('home')}}" style="float: left;">Regresar</a>
                        <button  class="btn btn-naranja btn-md " style="float: right; background:#da8b0c
                        ;" type="submit">Continuar</button>
                    </div>
                </form>
            </div>        
        </center>
    
    </div>
   

{{--Fotter--}}

    @include('components.landing.cuerpo._fotter')  
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/landing/sendEmail.js') }}"></script>
    <script src="{{ asset('js/landing/modal-register.js') }}"></script>
    @stack('js')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>
