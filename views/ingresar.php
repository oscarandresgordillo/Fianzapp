<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Ingreso a fianzApp</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/images/logo.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="login-page" style="background-image: url('assets/images/fondo_login3.jpg'); background-color: #fff; background-repeat: repeat; background-position: center;">
    <div class="login-box">
        <div class="card" style="border-radius: 15px"><br>
        <div class="logo">
            <a href="javascript:void(0);"><img src="assets/images/logo.png" width="220px"></a>
        </div>
            <div class="body">
                <form id="" method="post" action="?c=Ingresar&a=Ingresar_usuario">
                    <div class="msg" style="font-size: 20px"><STRONG>FianzApp</STRONG></div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="usuario" placeholder="Usuario" style="font-size: 16px" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" style="font-size: 16px" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3"></div>
                        <div class="col-xs-6" >
                            <button class="btn btn-block waves-effect" type="submit" style="border-radius: 10px; font-size: 16px; background-color: #7DB941; color: #fff;"><i class="material-icons">send</i> <spam>INGRESAR</spam></button>
                        </div>
                        <div class="col-xs-3"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>