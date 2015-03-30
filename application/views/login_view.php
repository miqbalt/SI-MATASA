<!Doctype HTML>
<html>
    <head>
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    </head>
    <body style="background-color: #005702">
    <div style="border-bottom-color: #ffffff;border-bottom-style: solid;border-bottom-width: thick;height: 80px">
        <!--class="col-lg-offset-4"-->
        <h3 align='center' style="color: #ffffff">

            Selamat Datang di Sistem Informasi Penilaian MTsN JEMBER 1

        </h3>
    </div>
    <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading" style="background-color: aquamarine">
                    <div class="panel-title" style="background-color: aquamarine;color: #000000">Silahkan Masukan Username dan Password anda untuk Login</div>
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
                                <a class="btn btn-success" href="<?php echo site_url('home/index');?>">Login</a>
                            </div>
                        </div>
                    </form>
                    <div>
                        <img style="margin: 0% 0% 0% 0%;padding: 0px 0px 0px 0px;width: 100px; height: 68px;float: right" src="<?php echo base_url();?>assets/img/LOGO_SIMATASA.png">
                        <img style="margin: 0% 0% 0% 0%;padding: 0px 0px 0px 0px;width: 68px; height: 68px;float: right" src="<?php echo base_url();?>assets/img/depag.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://localhost/SI-MATASA/assets/js/bootstrap.min.js"></script>
        <script src="http://localhost/SI-MATASA/assets/js/bootswatch.js"></script>
        <script src="http://localhost/SI-MATASA/assets/js/jquery-1.10.2.min.js"></script>
    </body>
</html>