<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>{{ $title }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .justified-text {
            text-align: justify;
            font-size: 20px; 
            line-height: 1.7; 
            color: black; 
        }

        .justified-tittle { 
            color: black; 
        }

        .my-custom-img {
            transform: translateY(163px) translateX(-60px);
    }

    .btn-custom {
    background-color: #2A2F4F; 
    color: #ffffff;
    border: 0px;
    transition: transform 0.5s ease;
    }

    .btn-custom:hover {
    background-color: #504099;
    color: #ffffff; 
    border: 0px;
    transform: scale(1.15);
    }

    /* Animasi Gradient */
.bg {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: 200% 200%;
    background-image: linear-gradient(-135deg, #504099 0%, #FE7BE5 50%, #504099 100%);
    animation: AnimateBG 15s ease infinite;
}

@keyframes AnimateBG {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

</style>

    <!-- Custom styles for this template -->
    <link href="css/heroes.css" rel="stylesheet">
</head>

<main>
<div class="bg">

        <div class="container col-xxl-8 px-0 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="img/buatcoverdepan1.png" class="d-block mx-lg-auto my-custom-img"
                        alt="Bootstrap Themes" width="1050" height="738" loading="lazy">
                </div>
                <div class="col-lg-6">
                    @auth
                    <h1 class="display-4 fw-bold lh-sm mb-4">Hi! {{ auth()->user()->name }}</h1>
                    <p class="justified-text">
                    Sistem pendukung keputusan pemilihan laptop ini dibuat berdasarkan metode Weighted Product (WP), merupakan suatu sistem yang diharapkan bisa membantu pengguna dalam memilih 
                    laptop yang sesuai dengan kebutuhan dan preferensi mereka. Melalui penerapan kriteria dan analisis data, 
                    sistem ini memberikan rekomendasi laptop berdasarkan faktor-faktor seperti Harga, RAM, SSD, 
                    Processor, VGA, dan Display Panel. Dengan adanya sistem ini, pengguna dapat 
                    mengoptimalkan waktu mereka dan mendapatkan rekomendasi yang objektif sesuai dengan kebutuhan spesifik yang mereka cari pada laptop yang dimasukkan nantinya ke sistem.
                    </p><br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="{{ route('dashboard') }}" class="btn btn-custom btn-lg px-4 me-md-2">Dashboard</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button href="{{ route('logout') }}" class="btn btn-custom btn-lg px-4 me-md-2">Logout</button>
                        </form>
                    </div>
                    @else
                    <h1 class="display-4 fw-bold lh-sm mb-4 justified-tittle">SPK Pemilihan Laptop Terbaik</h1>
                    <p class="justified-text">
                    Sistem pendukung keputusan pemilihan laptop ini dibuat berdasarkan metode Weighted Product (WP), merupakan suatu sistem yang diharapkan bisa membantu pengguna dalam memilih 
                    laptop yang sesuai dengan kebutuhan dan preferensi mereka. Melalui penerapan kriteria dan analisis data, 
                    sistem ini memberikan rekomendasi laptop berdasarkan faktor-faktor seperti Harga, RAM, SSD, 
                    Processor, VGA, dan Display Panel. Dengan adanya sistem ini, pengguna dapat 
                    mengoptimalkan waktu mereka dan mendapatkan rekomendasi yang objektif sesuai dengan kebutuhan spesifik yang mereka cari pada laptop yang dimasukkan nantinya ke sistem.
                    </p>
                    <br>
                    <div class="d-grid gap-3 d-md-flex justify-content-md-start">
                        <a href="{{ route('login') }}" class="btn btn-custom btn-lg px-4 me-md-2">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-custom btn-lg px-4 me-md-2">Daftar</a>
                    </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
        
</main>

</body>

</html>