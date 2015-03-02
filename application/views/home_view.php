<!DOCTYPE html>
<html lang="en">
<head>
    <title>Fixed Top Navbar Example for Bootstrap</title>
    <link  rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link  rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
</head>

<body>

<div class="bs-docs-section clearfix">
    <div class="row">
        <div class="col-lg-12">
            <div class="bs-component">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="navbar-header">

                                <a class="navbar-brand" href="#">SI-MATASA</a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Master<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Siswa</a></li>
                                            <li><a href="#">Mapel</a></li>
                                            <li><a href="#">Guru</a></li>
                                            <li><a href="#">Ekskul</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="<?php echo base_url();?>">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>


<!-- Bootstrap core JavaScript
================================================== -->
<!--Placed at the end of the document so the pages load faster -->
            <script src="<?php echo base_url()?>assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
            <script src="<?php echo base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/bootswatch.min.js" type="text/javascript"></script>

</body>
</html>
