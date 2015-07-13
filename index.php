<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Assessment</title>
        <!-- Link bootstrap -->
        <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- New style -->
        <link rel="stylesheet" href="css/style.css"/>
        <!-- FontAwesome -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    </head>
    <body>

        <!-- Navigation bar -->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Bootstrap</a>
                </div> <!-- End navbar-header -->

                <div class="collapse navbar-collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Protio</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Skill</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div> <!--End navbar-collapse -->

            </div> <!-- End container fluid -->
        </nav>

        <!-- End Navigation bar -->
        <div class="container">

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <h5><strong style="color:grey;">WATCH THE BEST THEME</strong></h5>
                    <div class="container-fluid">
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                    <!-- Image 1 -->
                    <div class="col-md-4 col-sm-4 col-xs-12 marginImg">
                        <div class="container-fluid">
                            <img class="img-responsive" src="img/img1.jpg">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-6">
                            <h5>Mountain Lake</h5>
                            <span class="text-muted">by Bing</span>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-6 button-container text-right">
                            <button class="btn btn-default" type="button" name="facebook"><i class="fa fa-facebook"></i></button>
                            <button class="btn btn-default" type="button" name="twitter"><i class="fa fa-twitter"></i></button>
                        </div>
                    </div>
                    <!-- Image 2 -->
                    <div class="col-md-4 col-sm-4 col-xs-12 marginImg">
                        <div class="container-fluid">
                            <img class="img-responsive" src="img/img2.jpg">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-6">
                            <h5>Mountain Lake</h5>
                            <span class="text-muted">by Bing</span>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-6 button-container text-right">
                            <button class="btn btn-default" type="button" name="facebook"><i class="fa fa-facebook"></i></button>
                            <button class="btn btn-default" type="button" name="twitter"><i class="fa fa-twitter"></i></button>
                        </div>
                    </div>
                    <!-- Image 3 -->
                    <div class="col-md-4 col-sm-4 col-xs-12 marginImg">
                        <div class="container-fluid">
                            <img class="img-responsive" src="img/img3.jpg">
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-6">
                            <h5>Mountain Lake</h5>
                            <span class="text-muted">by Bing</span>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-6 button-container text-right">
                            <button class="btn btn-default" type="button" name="facebook"><i class="fa fa-facebook"></i></button>
                            <button class="btn btn-default" type="button" name="twitter"><i class="fa fa-twitter"></i></button>
                        </div>
                    </div>

            </div>

        </div> <!-- End container -->

        <!-- Footer -->
        <footer id="footer">
            <div class="navbar navbar-default navbar-fixed-bottom">
                <div class="container">

                </div>
            </div>
        </footer>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    </body>
</html>