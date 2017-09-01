<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Instalación - Gestor</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css')}}">
    <script src="https://use.fontawesome.com/64ee991afa.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 sidebar">
        <div class="row">
           <h1>Groot</h1>
           <hr>
       </div>
        <ul class="insta">
            <li>
                <h2>redes sociales</h2>
                  <ul class="social">
                  <li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i><p>Facebook</p></a></li>
                  <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i><p>Git Hub</p></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i><p>Instagram</p></a></li>
                  </ul>
            </li>
            <li>
                <h2>Mira la pagina nuestra web</h2>
                <a href="#"><img src="http://codwelt.com/wp-content/uploads/2017/08/logo.png" alt="" ></a>
            </li>
        </ul>    
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <div class="container-fluid">
                @yield("content")
            </div>
        </div>
    </div>
    <div class="row foot">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p>Groot 2017- Desarrollado por <a href="http://codwelt.com/">codwelt.com</a></p>
                </div>
            </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    {{Html::script('js/main.js')}}
</body>
</html>