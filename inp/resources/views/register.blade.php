<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>register</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap-theme.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/test.css') }}">
    <script src="https://cdn.bootcss.com/jquery/3.0.0-beta1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.js"></script>
</head>
<body>
<div class="container">

    <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div>

</body>
</html>