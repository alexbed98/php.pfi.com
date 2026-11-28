<header>
    <div class="nav-container">

        <div class="title-container">
            <a href="<?= Page::Home->url() ?>" class='logo'>
                METAL-CORE
            </a>
            <p>inc.</p>
        </div>

        <div class='nav-right'>

            <div class="nav-links">
                <a href="<?= Page::Home->url() ?>"
                    class="<?= (defined('ACTIVE_PAGE') && ACTIVE_PAGE === Page::Home) ? 'active-page-link' : '' ?>">
                    <?= Page::Home->text() ?>
                </a>
                <a href="<?= Page::Catalog->url() ?>"
                    class="<?= (defined('ACTIVE_PAGE') && ACTIVE_PAGE === Page::Catalog) ? 'active-page-link' : '' ?>">
                    <?= Page::Catalog->text() ?>
                </a>
                <a href="<?= Page::Orders->url() ?>"
                    class="<?= (defined('ACTIVE_PAGE') && ACTIVE_PAGE === Page::Orders) ? 'active-page-link' : '' ?>">
                    <?= Page::Orders->text() ?>
                </a>
                <?php if (IS_AUTH) : ?>
                        <a class="nav-link" href="<?= Page::Logout->url() ?>"><?= Page::Logout->text() ?></a>
                        <?php else : ?>
                        <a class="nav-link <?= ACTIVE_PAGE === Page::Connexion ? 'active-page-link' : '' ?>" href="<?= Page::Connexion->url() ?>"><?= Page::Connexion->text() ?></a>
                        <?php endif; ?>
            </div>

            <div class="nav-cart">
                <a href="<?= Page::Cart->url() ?>">
                    <?= Page::Cart->text() ?> <span class='cart-count'>0</span>
                </a>
            </div>

        </div>


    </div>
</header>