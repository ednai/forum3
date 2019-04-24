<html>
    <head>
        <meta charset="utf-8" />
        <title>Forum2</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
    </head>
    <body>
        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <h2><?=$this->session->flashdata('error')?></h2>
        <?php endif; ?>
        
        <?php if ($this->session->flashdata('success') == TRUE): ?>
            <h2><?=$this->session->flashdata('success')?></h2>
        <?php endif; ?>
        
        <h1><?=$titulo?></h1>