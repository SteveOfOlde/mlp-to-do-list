@php use Illuminate\Support\Facades\Vite; @endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MLP To-Do</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
    @livewireStyles
</head>
<body class="text-bg-light">

<div class="container">
    <header class="row">
        <div class="col-12">
            <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="Logo">
        </div>
    </header>
    <div class="row">
        <div class="col-12">
            <livewire:tasks/>
        </div>
    </div>
    <footer>
        Copyright @<?= date('Y') ?> All Rights Reserved
    </footer>
</div>


@livewireScripts
</body>
</html>
