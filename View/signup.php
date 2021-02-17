<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../Public/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../Public/css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../Public/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">

                    <h3 class="panel-title">Please Sign up</h3>
                </div>
                <div class="panel-body">
                    <form action="postSignup" method="post" role="form">
                        <fieldset>
                            <?php
                            if(empty($data["error"])==false){
                                echo $data['error'];
                            }
                            if(empty($data["nt"])==false){
                                echo $data['nt'];
                            }
                            ?>


                            <div class="form-group">
                                <input class="form-control" placeholder="username" name="username" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="fullname" name="fullname" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="re-enterpassword" name="re_enterpassword" type="password">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button class="btn btn-lg btn-success btn-block" name="signup">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="../../Public/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../Public/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../../Public/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../../Public/js/startmin.js"></script>

</body>
</html>
