<!Doctype HTML>
<html>
    <head>
        <link href="http://localhost/SI-MATASA/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://localhost/SI-MATASA/assets/css/bootstrap.css" rel="stylesheet">
    </head>
    <body>
    <div class="col-lg-offset-4">
        <h3>Selamat Datang</h3>
    </div>
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Login</div>
                </div>
                <div style="padding-top:30px" class="panel-body" >
                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                    <form id="loginform" class="form-horizontal" role="form">
                        <div style="margin-bottom: 25px" class="input-group">
                            Username
                            <input id="login-username" type="text" class="form-control" name="username" value="">
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            Password
                            <input id="login-password" type="password" class="form-control" name="password" >
                        </div>
                        <div style="margin-top:10px" class="form-group">
                            <!-- Button -->
                            <div class="col-sm-12 controls">
                                <a class="btn btn-success" href="#" class="btn btn-success">Login  </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                    <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        Sign Up Here
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/SI-MATASA/assets/js/bootstrap.min.js"></script>
        <script src="http://localhost/SI-MATASA/assets/js/bootswatch.js"></script>
        <script src="http://localhost/SI-MATASA/assets/js/jquery-1.10.2.min.js"></script>
    </body>
</html>