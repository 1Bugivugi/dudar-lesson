<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
<div
    class="d-flex flex-column flex-md-row align-items-center bg-dark text-white p-3 px-md-4 mb-3 border-bottom shadow-sm">
    <h5 class="my-0 font-weight-normal" style="margin-right: auto">itProger</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-white" style="text-decoration: none;" href="/">Главная</a>
        <a class="p-2 text-white" style="text-decoration: none;" href="/about">Про нас</a>
    </nav>
    <a class="btn btn-warning" style="margin-left: 15px" href="/review">Отзывы</a>
</div>

@yield('main_content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>
</html>
