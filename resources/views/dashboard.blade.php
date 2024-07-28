<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Logins</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('dashboard') }}">Social Login</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" type="button"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('dashboard') }}" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">
                            {{ Auth::user()->name != '' ? Auth::user()->name : Auth::user()->email }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    <img class="rounded-circle mt-5"
                        src="{{Auth::user()->image != '' ? Auth::user()->image : 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'}}"
                        width="150px">
                    <span class="font-weight-bold">
                        {{Auth::user()->name != '' ? Auth::user()->name : ''}}
                    </span>
                </div>
            </div>

            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Name</label>
                            <input class="form-control"
                                type="text" value="{{Auth::user()->name != '' ? Auth::user()->name : ''}}" readonly>
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input class="form-control"
                                type="text" value="{{Auth::user()->email != '' ? Auth::user()->email : ''}}" readonly>
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Provider</label>
                            <input class="form-control"
                                type="text" value="{{Auth::user()->provider != '' ? Auth::user()->provider : ''}}" readonly>
                        </div>

                        <div class="col-md-12">
                            <label class="labels">Provider ID</label>
                            <input class="form-control"
                                type="text" value="{{Auth::user()->provider_id != '' ? Auth::user()->provider_id : ''}}" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
