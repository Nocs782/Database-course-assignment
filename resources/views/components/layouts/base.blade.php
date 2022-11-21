<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ $title }}</title>
    <!-- Scripts -->
    <script src="{{ asset('build/assets/app.c5d9e6c4.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('build/assets/app.525f5899.css') }}" rel="stylesheet">

    <link href="{{ asset('badmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('badmin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('badmin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('badmin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('badmin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('badmin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('badmin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('badmin/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Assignment Task</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('disease-type.index') }}">Disease Type</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('countries.index') }}">Country</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('diseases.index') }}">Disease</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('discoveries.index') }}">Discover</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.index') }}">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('public_servants.index') }}">Public Servant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctors.index') }}">Doctor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('discoveries.index') }}">Record</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('discoveries.index') }}">Specialize</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header><!-- End Header -->

    <main id="main" class="main">


        <section class="section dashboard">
            {{ $slot }}
        </section>

    </main><!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('badmin/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('badmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('badmin/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ asset('badmin/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('badmin/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('badmin/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('badmin/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('badmin/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('badmin/js/main.js') }}"></script>

</body>
</html>
