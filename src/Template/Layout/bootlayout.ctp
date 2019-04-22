<!DOCTYPE html>
<html>
<head>
    
    <title>
        <?php echo $title ?>
    </title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<body>

    <section>
        <?= $this->element('header') ?>
    </section>

    <section class="container" style="margin-top: 60px;">
        <?= $this->fetch('content') ?>
    </section>
    

    <!-- Required Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>
    
</body>
</html>
