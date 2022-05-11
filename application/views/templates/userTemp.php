<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/style.css">
    <title>Padaria do Barba</title>
</head>
<body>
    <div class="container">
        <!-- Top menu -->
        <div class="top-menu">
            <div class="logo">
                <ion-icon name="bag-handle"></ion-icon>
            </div>
            <div class="text">
                <h1>Padaria do Barba</h1>
            </div>
        </div>
        <!-- Main -->
        <?= $contents ?>
    </div>
</body>
    <!-- ion-icons Installation -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</html>