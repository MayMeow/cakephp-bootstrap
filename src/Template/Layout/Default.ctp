<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?= $this->Html->css('CakeBootstrap.bootstrap.min') ?>
    <?= $this->Html->css('CakeBootstrap.all.min') ?>

    <title><?= $this->Bootstrap->getAppName() ?></title>
</head>
<body>

<?= $this->fetch('bootstrap:nav') ?>

<div class="<?= $this->fetch("bootstrap:layout:classes") ?>">
    <?= $this->fetch('content') ?>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?= $this->Html->script('CakeBootstrap.jquery-3.3.1.slim.min') ?>
<?= $this->Html->script('CakeBootstrap.bootstrap.bundle.min') ?>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>