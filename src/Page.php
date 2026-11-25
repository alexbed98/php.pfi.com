<?php

enum Page
{
    case Home;
    case Catalog;
    case Cart;
    case Orders;
    case Connexion;
    case Creation;
    case Logout;
    public function text(): string {

        return match($this) {
            
            Page::Home => 'Accueil',
            Page::Catalog => 'Catalogue',
            Page::Cart => '🛒 Panier',
            Page::Orders => 'Commande',

            Page::Connexion => 'Connexion',
            Page::Creation => 'Création',
            Page::Logout => 'Déconnexion',

        };

    }

    public function url(): string {

        return match($this) {
            
            Page::Home => URL_ROOT,
            Page::Catalog => URL_ROOT . 'catalog.php',
            Page::Cart => URL_ROOT . 'cart.php',
            Page::Orders => URL_ROOT . 'orders.php',

            Page::Connexion => URL_ROOT . 'connexion.php',
            Page::Creation => URL_ROOT . 'creation.php',
            Page::Logout => URL_ROOT . 'logout.php',

        };

    }
}