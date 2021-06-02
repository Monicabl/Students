<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body class="bg-dark" >
    <div>
        <h3 class="text-center text-white pt-5"></h3>
        <div class="container" class="border border-light">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        
                        <form action="" method="post">
                            @csrf
                            <h3 class="text-center text-light"> Admin Acceso </h3>
                            <div class="form-group">
                                <label for="username" class="text-light my-1">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-light">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control" placeholder="password">
                            </div>
                            <button class="btn btn-primary my-3" type="submit" > Ingresar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>