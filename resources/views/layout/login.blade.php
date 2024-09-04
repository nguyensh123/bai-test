<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/stylelogin.css')}}">
</head>
<body>
    <div id="wrapper">
        <form action="/layout/login" id="form-login" method="post">
            @csrf
            <h1 class="form-heading">Log in</h1>
            <div class="form-group">
                <i class="far fa-user"></i>
                <input type="text" class="form-input" name="Username" placeholder="Username">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" name="password" placeholder="password">
                <div id="eye">
                    <i class="far fa-eye"></i>
                </div>
            </div>
            <input type="submit" value="Login" class="form-submit">
        </form>
    </div>
</body>
</html>