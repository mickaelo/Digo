<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/logo.jpg" />
    <title>HelpDesk</title>
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
</head>
<body>
<!--Navigation bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img alt="Logo" src="<?=base_url()?>assets/img/logo.jpg"height="100" width="100"/>
    <a class="navbar-brand" href="<?=base_url()?>">&nbsp;&nbsp;Service HelpDesk</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Tickets
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?=base_url()?>tickets">Visualiser les tickets émis</a>
                    <a class="dropdown-item" href="<?=base_url()?>tickets/edit">Créer une demande</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Techniciens
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?=base_url()?>technicians">Liste des techniciens</a>
                    <a class="dropdown-item" href="<?=base_url()?>technicians/edit">Ajouter un technicien</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="container" style="margin-top:25px;">
<?php if (!empty($this->session->flashdata('message-error'))): ?>
    <div class="alert alert-error" role="alert">
            <?php echo $this->session->flashdata('message-error');?>
    </div>
<?php endif; ?>
<?php if (!empty($this->session->flashdata('message-success'))): ?>
    <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('message-success');?>
    </div>
<?php endif; ?>
</div>
