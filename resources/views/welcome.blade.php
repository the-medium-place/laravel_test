<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Link Card Generator</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/test.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
        <a class="navbar-brand" href="/">Link Card Generator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/submit"><button class="btn btn-secondary">Submit a link</button></a>
                </li>
                {{-- <li class="nav-item">
        <a class="nav-link" href="#">Features <span class="sr-only">(current)</span></a>
      </li> --}}
                {{-- <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> --}}
                {{-- <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li> --}}
            </ul>
        </div>
    </nav>
    <div class="container">
        <!-- TESTING LOADING IN DATA -->
        <div class="row">
            <div class="col-9">
                <div class="row">
                    @foreach ($links as $link)
                    <div class="col-6">
                        <div class="card border border-warning shadow shadow-lg my-1 link-card">
                            <div class="card-body">
                                <a href="{{ $link->url }}" target="_blank">
                                    <h2 class="card-title display-4">{{ $link->title }}</h2>
                                </a>
                                <p class="card-text">{{ $link->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-3">
                <h3 class="mb-2 font-bold">Link List:</h3>
                <hr>
                <ul>
                    @foreach ($links as $link)
                    <li>
                        <a href="{{ $link->url }}" target="_blank"><button class="btn btn-dark m-1">{{ $link->title  }}</button></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <footer class="position-absolute bottom-0 d-flex justify-content-end align-items-center bg-light font-secondary w-100 p-4">
        <p>&copy; ZGS</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="{{ asset('js/test.js') }}"></script>
</body>
</html>
