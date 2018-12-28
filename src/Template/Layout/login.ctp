<?php
$cakeDescription = 'System pbsługi EPO';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('styles.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('moje.css') ?>

    <?= $this->Html->script('jquery-3.3.1.min.js') ?>
    <?= $this->Html->script('script.js') ?>
    

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
    <?= $this->fetch('content') ?>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-12">
            <hr>
                <center><small>Autor &copy; Leszek Klich alkor.edu.pl 2018 Modyfikowanie, rozpowszechnianie - dozwolone.</small></center>
            </div>
        </div>
    </footer>
</body>
</html>
