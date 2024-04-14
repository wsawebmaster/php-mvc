<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<h1, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css">
</head>
<body>
    <a href="<?php echo BASE_URL; ?>">Home</a>
    <a href="<?php echo BASE_URL; ?>galeria">Galeria</a>
    <hr/>

    <?php $this->loadViewInTemplate($viewName, $viewData); ?>

    <script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>
</html>
