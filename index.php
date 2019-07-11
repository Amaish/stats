<!DOCTYPE html>
<html class="" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Voice Data</title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link href="https://account.africastalking.com/assets/img/favicons/favicon-32x32.png" rel="icon" type="image/png" sizes="32x32">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .btn {
    background-image: linear-gradient(to right, #fc9206 20%, #ffb527 80%);
    color: #f8f8f8;
    box-shadow: none;
    padding-top: 9px;
    padding-bottom: 9px;
    margin-right: 0;
}
    </style>
</head>

<body background="https://africastalking.com/img/voice/banner.png">
    <section style="margin:0 auto; padding-top: 5px; height: 100% !important;">
        <div class="row" style="height: 500px; width: 70%; margin: 0 auto; box-shadow: 0 8px 17px rgba(0, 0, 0, 0.2);">
            <section class="m-b-lg">
                <header class="wrapper text-center">
                    <strong>Sign in to access your account</strong>
                </header>
                <div class="col-md-6" style="background-color: clear; height: 100%; border-right:2px solid #fc9206;padding-top: 15%;">
                <a class="navbar-brand block" href="#"><img src="https://account.africastalking.com/assets/img/logos/logo-full-color.png" alt="logo" /></a>
                </div>
                <div class="col-sm-6" style="height: 100%;  padding-top: 10%;">
                
                <div class="list-group">
                    <div class="list-group-item">
                        <input class="form-control no-border" type="text" placeholder="Email" id="email">
                    </div>
                    <div class="list-group-item">
                        <input class="form-control no-border" placeholder="Password" type="password" id="password">
                    </div>
                </div>

                <div class="checkbox m-b">
                    <p id="silsresp"></p>
                </div>

                <button id="signinuser" class="btn btn-lg btn-block">Sign in</button>
                </div>

            </section>
        </div>
    </section>
    <!-- footer -->
    <footer id="footer">
        <div class="text-center padder clearfix">
            <p><small>Voice Data<br>
			&copy; <?php echo date("Y");?></small></p>
        </div>
    </footer>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- App -->
    <!-- <script src="../js/app.v1.js"></script>
    <script src="../js/app.plugin.js"></script>-->
    <script src="js/main.js"></script> 
</body>

</html>
