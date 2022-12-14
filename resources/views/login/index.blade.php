<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Login Admin</title>
    <meta name="theme-color" content="#7952b3">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <img class="mb-4" src="/images/sengked.png" alt="" id="img-login">
        <form action="{{Route('authenticate')}}" method="POST">
            @csrf
            <!-- <h1 class="h3 mb-3 fw-normal">Log-in Admin</h1> -->

            <div class="form-floating">
                <input type="text" value="{{old('username')}}" autofocus class="form-control @error('username') is-invalid @enderror" name="username" id="floatingInput" placeholder="Username">
                @error('username')
                <div id="username" class="invalid-feedback mb-3">
                    {{$message}}
                </div>
                @enderror
                <label for="floatingInput">Username</label>

            </div>
            <div class="form-floating">
                <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                @error('password')
                <div id="password" class="invalid-feedback mb-3">
                    {{$message}}
                </div>
                @enderror
                <label for="floatingPassword">Password</label>
            </div>


            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

        </form>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>