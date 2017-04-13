
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/graceage.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <nav>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 navClass "><h1>SeniorLife</h1></div>
                <div class="col-sm-2 navClass"><h2 style="margin-top: 20px">Feedback</h2></div>
                <div class="col-sm-3 navClass"><h2 style="margin-top: 20px">Self-assesement</h2></div>
                <div class="col-sm-2 navClass"><h2 style="margin-top: 20px">Challenge</h2></div>
                <div class="col-sm-2 navClass"><h2 style="margin-top: 20px">Quality Of Life</h2></div>
            </div>
        </div>
    </nav>
    @yield('header_content')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 footerClass">footer 1</div>
                <div class="col-sm-4 footerClass" style="margin-left: 5px;">footer 2</div>
                <div class="col-sm-4 footerClass" style="margin-left: 5px">footer 3</div>
            </div>
        </div>
    </footer>

<script src="/js/app.js"></script>
</body>
</html>