<!DOCTYPE HTML>
<html>
<head>
    <title>Sushi online</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<!-- Banner -->
<section id="banner">
    <h2><strong>Sushi</strong> is an online sushi shop </h2>
    <p>Built with BinarSchool</p>
    <ul class="actions">
        <li><a href="{{ url('/') }}" class="button special">Home</a></li>

        <li><a href="{{ url('/about') }}" class="button special">Get started</a></li>
    </ul>
</section>

<!-- One -->
<section id="one" class="wrapper special">
    <div class="inner">
        @yield('content')
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="copyright">
        &copy; <a href="https://school.binarcode.com">BinarSchool</a>
    </div>
</footer>

</body>
</html>
