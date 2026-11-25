<?php

require_once 'core/error-exception.php';
require_once 'src/initialization.php';
require_once 'src/Page.php';

const ACTIVE_PAGE = Page::Home;

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once TEMPLATE . '/head.php'; ?>

<body>
    <div class="body-container">

        <?php include_once TEMPLATE . '/header.php'; ?>

        <div class="main-container">
            <?php include_once TEMPLATE . '/home.php' ?>
        </div>

        <?php include_once TEMPLATE . '/footer.php'; ?>
    </div>
</body>

</html>