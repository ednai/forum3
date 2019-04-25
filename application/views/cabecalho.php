<html>
    <head>
        <meta charset="utf-8" />
        <title>Forum2</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
    </head>
    <body>
        <?php if ($this->session->flashdata('error') == TRUE): ?>
            <div class="alert alert-danger" role="alert">
                <?=$this->session->flashdata('error')?>
            </div>
        <?php endif; ?>
        
        <?php if ($this->session->flashdata('success') == TRUE): ?>
            <div class="alert alert-success" role="alert">
                <?=$this->session->flashdata('success')?>
            </div>
        <?php endif; ?>
        
        <h1 class="display-1"><?=$titulo?></h1>