<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Costumer Portal"/>
    <meta name="author" content="FCA TI"/>

    <title>PHP CI</title>

    <!-- Bootstrap CSS-->
    <link href="<?php echo ASSETSPATH.'bootstrap/dist/css/bootstrap.min.css';?>" rel="stylesheet">

    <!-- Font-awesome CSS -->
    <link href="<?php echo ASSETSPATH.'font-awesome/css/font-awesome.min.css';?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo ASSETSPATH.'custom/custom.css';?>" rel="stylesheet">

</head>


<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form role="form" action="login/check" method="post">
                    <h1>Login Form</h1>
                    <div>
                        <input class="form-control" placeholder="E-mail" name="email" type="email"  autofocus required>
                    </div>
                    <div>
                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="Login"/>
                    </div>

                </form>
            </section>
        </div>

    </div>
</div>
</body>
</html>


