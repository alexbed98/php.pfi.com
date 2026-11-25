<?php

require_once 'core/error-exception.php';
require_once 'src/initialization.php';
require_once 'src/Page.php';

const ACTIVE_PAGE = Page::Home;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metal-core</title>

    <link rel="stylesheet" href="<?= CSS . '/main.css' ?>">
    <link rel="stylesheet" href="<?= CSS . '/header.css' ?>">
    <link rel="stylesheet" href="<?= CSS . '/footer.css' ?>">

</head>

<body>
    <div class="body-container">

        <?php include_once TEMPLATE . '/header.php'; ?>

        <div class="main-container">

        </div>

        <?php include_once TEMPLATE . '/footer.php'; ?>
    </div>
</body>

</html>