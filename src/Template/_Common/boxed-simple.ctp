<?php
$this->layout = 'CakeBootstrap.Simple';

$this->assign('bootstrap:layout:classes', 'container');
?>

<!-- Main Container -->
<main id="main-container">
    <?= $this->fetch('content') ?>
</main>
<!-- END Main Container -->

