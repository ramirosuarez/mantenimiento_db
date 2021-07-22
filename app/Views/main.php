<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>TEC ITSAL</title>
    <link href="<?php echo base_url() ?>/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>/css/styles.css" rel="stylesheet" />
    <script src="<?php echo base_url() ?>/js/all.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <?= $this->include('header'); ?>
    <?= $this->renderSection('content'); ?>
    <?= $this->include('footer'); ?>
    <script src="<?php echo base_url() ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>/js/scripts.js"></script>
    <script src="<?php echo base_url() ?>/js/simple-datatables@latest.js"></script>
    <script src="<?php echo base_url() ?>/js/datatables-simple-demo.js"></script>
</body>

</html>