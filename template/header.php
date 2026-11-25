<header>
    <div class="nav-container">

        <div class="title-container">
            <a href="<?= Page::Home->url() ?>" class='title'>
                METAL-CORE
            </a>
        </div>

        <div class="nav-links">
            <a href="<?= Page::Home->url() ?>" class="<?= (defined('ACTIVE_PAGE') && ACTIVE_PAGE === Page::Home) ? 'active-page-link' : '' ?>">
                <?= Page::Home->text() ?>
            </a>
            <a href="<?= Page::Catalog->url() ?>" class="<?= (defined('ACTIVE_PAGE') && ACTIVE_PAGE === Page::Catalog) ? 'active-page-link' : '' ?>">
                <?= Page::Catalog->text() ?>
            </a>
            <a href="<?= Page::Orders->url() ?>" class="<?= (defined('ACTIVE_PAGE') && ACTIVE_PAGE === Page::Orders) ? 'active-page-link' : '' ?>">
                <?= Page::Orders->text() ?>
            </a>
        </div>

        <div class="nav-cart">
            <a href="<?= Page::Cart->url() ?>">
                <?= Page::Cart->text() ?> <span cart-count>0</span>
            </a>
        </div>
    </div>
</header>