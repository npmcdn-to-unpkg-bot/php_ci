<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Costumer Portal"/>
    <meta name="author" content="FCA TI"/>

    <title>Costumer Portal FCA TI</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/bower_components/bootstrap/dist/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url().'assets/bower_components/metisMenu/dist/metisMenu.min.css';?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/dist/css/sb-admin-2.css';?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'assets/bower_components/font-awesome/css/font-awesome.min.css';?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Credenciais de Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login/check" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email"  autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="Login"/>
                                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                                
                            </fieldset>
                        </form>

                    </div>
                </div>
                <div class="text-center"><small>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 2016 <b>FCA TI</b></small></div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/bower_components/jquery/dist/jquery.min.js';?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/bower_components/bootstrap/dist/js/bootstrap.min.js';?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'assets/bower_components/metisMenu/dist/metisMenu.min.js';?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/sb-admin-2.js';?>"></script>

</body>

</html>
