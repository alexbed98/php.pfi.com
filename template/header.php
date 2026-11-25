<header>
    <div>
        <a href="index.php">
            METAL-CORE
        </a>

        <div>
            <a href="index.php" <?= (defined('ACTIVE_PAGE') && ACTIVE_PAGE === Page::Home) ? 'active-page-link' : '' ?>>
                Accueil
            </a>
            <a href="index.php" <?= (defined('ACTIVE_PAGE') && ACTIVE_PAGE === Page::Catalog) ? 'active-page-link' : '' ?>>
                Catalogue de métaux
            </a>
            <a href="index.php" <?= (defined('ACTIVE_PAGE') && ACTIVE_PAGE === Page::Orders) ? 'active-page-link' : '' ?>>
                Mes commandes
            </a>
        </div>

        <div class="col-md-3 text-end">
            <a href="cart.php" class="btn btn-outline-warning">
                🛒 Panier <span class="badge bg-warning text-dark ms-1">0</span>
            </a>
        </div>
    </div>
</header>