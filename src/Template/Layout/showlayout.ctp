<!DOCTYPE html>
<html>
<head>
    
    <title>
        <?php echo $title ?>
    </title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

    <?= $this->element('header') ?>

    <div class="container clearfix" style="min-height: 70vh; margin-top: 80px;">
        <?= $this->fetch('content') ?>
    </div>
    
    <?= $this->element('footer') ?>

    <!-- Required Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    
</body>
</html>
