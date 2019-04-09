<?php
$this->layout = 'CakeBootstrap.Default';

$this->assign('bootstrap:layout:classes', 'container');
?>

<?php $this->start('bootstrap:nav') ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand" href="/"><?= $this->Bootstrap->getAppName() ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/verifications">Verifications</a>
            </li>
        </ul>
    </div>
</nav>
<?php $this->end()?>

<!-- Main Container -->
<main id="main-container">
    <?= $this->fetch('content') ?>
</main>
<!-- END Main Container -->

