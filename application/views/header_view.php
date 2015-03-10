<!DOCTYPE html>
<html lang="en">
<head>
    <title>SI-MATASA</title>
    <link  rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link  rel="stylesheet" href="<?php echo base_url()?>assets/css/bootswatch.min.css">
    <link  rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datepicker.css">
</head>
<body>
<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo site_url('home/index');?>">SI-MATASA</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Mengelola Data<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo site_url('siswa/index');?>">Siswa</a></li>
                                    <li><a href="<?php echo site_url('mapel/index');?>">Mapel</a></li>
                                    <li><a href="<?php echo site_url('guru/index');?>">Guru</a></li>
                                    <li><a href="#">Ekskul</a></li>
                                    <li><a href="<?php echo site_url('kelas/index');?>">Kelas</a></li>
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
</div>