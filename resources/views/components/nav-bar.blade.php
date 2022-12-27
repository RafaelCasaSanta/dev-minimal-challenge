<!doctype html>
<html>

<head>
    <title>@yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>

<body>

    <!-- navigation bar -->
    <div class="navigation-bar">
        <div class="navigation-div">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-img" href="https://www.made4it.com.br/">
                        <img src="https://made4it.com.br/wp-content/uploads/2016/03/logo-made4it.png" </a>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clientes">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/RafaelCasaSanta">GitHub</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/rafael-casa-santa">LinkedIn</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- navigation bar ends here -->


    @yield('content')


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>

</html>

<style>
    .navigation-bar {
        background-color: #FFFF;
        height: 10%;
        margin-bottom: 10px;
        width: 100%;
    }

    .navigation-div {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .nav {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .nav-link {
        color: gray;
        display: flex;
        font-size: larger;
        height: 100%;
        justify-content: center;
        padding: 0.9rem;
    }

    .nav-link:hover {
        color: #00aceb;
    }

    .nav-img {
        display: flex;
        font-size: larger;
        height: 100%;
        justify-content: center;
        padding: 0.5rem;
    }

    .nav-item {
        width: 20%;
    }
</style>
