
        <!doctype html>

<html lang="{{ app()->getLocale() }}">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Untitled</title>
            <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
            <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
            <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
            <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
            <link rel="stylesheet" href="assets/css/styles.css">
        </head>

        <body>
        <div>
            <nav class="navbar navbar-light navbar-expand-md navigation-clean">
                <div class="container"><a class="navbar-brand" href="#">Company Name</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                         id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link text-white active" href="#">&nbsp;ABOUT US</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">PRODUCTS</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">WHAT'S HOT</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">CONTACT US</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link text-white" href="#">LOGIN</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="login-clean">
            <form method="post" enctype="multipart/form-data" action="/login">
                <h2 class="sr-only">Login Form</h2>
                <div class="illustration"><i class="icon ion-ios-navigate"></i></div>
                <div class="form-group"><input class="form-control" type="email" name="email" id="email" class="form-control required" required="required" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" id="password" class="form-control required" required="required" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a>
            </form>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
        </body>
</html>
