<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карта музеев Рима и Ватикана</title>
    @vite(['resources/css/styles.sass', 'resources/js/index.js', 'resources/css/bootstrap/dist/js/bootstrap.bundle.min.js', 'resources/css/bootstrap/dist/css/bootstrap.css'])
</head>
<body>
    <div id="app">
        <nav class="bg-primary navbar navbar-expand-lg p-0 border border-dark m-2 shadow">
            <div class="container p-0">
                <a class="navbar-brand text-dark pt-0 d-flex" href="{{ route('museums.index') }}">
                    <div class="d-flex">
                        <img src="{{ url('storage/img/logo.png') }}" alt="Logo" width="40" height="40"
                            class="align-text-top bg-secondary me-1 mt-0 border border-dark">
                    </div>
                    <div class="d-flex align-items-center justify-content-center ms-3 mb-3 mt-3">
                        Карта музеев Рима и Ватикана
                    </div>
                </a>
                <div>
                    <a href="{{ route('museums.create') }}" class="btn btn-success shadow bg-success">Добавить музей</a>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="d-flex align-items-center justify-content-center border-top border-dark" style="height: 50px;">
            <div class="container d-flex justify-content-between align-items-center">Штаненко Екатерина
                <div class="d-flex align-items-center">
                    <a href="https://t.me/katyushkashtanenko" target="_blank"><img src="{{ url('storage/img/Frame 30.png') }}" alt="Иконка1"
                            width="30" height="30" class="align-text-top mx-1"></a>
                    <a href="https://vk.com/k.shtanenko" target="_blank"><img src="{{ url('storage/img/Frame 31.png') }}" alt="Иконка2"
                            width="30" height="30" class="align-text-top mx-1"></a>
                    <a href="https://www.utmn.ru/o-tyumgu/sotrudniki/e.m.shtanenko/" target="_blank"><img src="{{ url('storage/img/i.jpg') }}"
                            alt="Иконка2" width="30" height="30" class="align-text-top mx-1"></a>
                </div>
            </div>
        </footer>
    </div>

<script src="index.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://kit.fontawesome.com/e0e14eba61.js" crossorigin="anonymous"></script>
</body>
</html>