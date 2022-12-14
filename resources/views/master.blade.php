<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <title>@yield('title')</title>
</head>


<body class="d-flex flex-column min-vh-100">

{{--Navbar--}}
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">BasicLv</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href={{ route('send.message') }}>Send Message</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Validation
                    </a>
                    <ul class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('form.validation') }}">Validation</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        EORM
                    </a>
                    <ul class="dropdown-menu bg-warning" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('add.data') }}">Add Data</a></li>
                        <li><a class="dropdown-item" href="{{ route('one.to.one') }}">One -> one</a></li>
                        <li><a class="dropdown-item" href="{{ route('one.to.many') }}">One -> many</a></li>
                        <li><a class="dropdown-item" href="{{ route('many.to.many') }}">Many -> many</a></li>
                        <li><a class="dropdown-item" href="{{ route('has.one.through') }}"> Has One Through</a></li>
                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

@yield('body')

<section class="bg-dark mt-auto">
    <div class="container">
        <h6 class="text-light text-center mb-0 py-3">Developed By &copy;Nurul Islam,2022</h6>
    </div>

</section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- include summernote css/js -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>

</body>
</html>
