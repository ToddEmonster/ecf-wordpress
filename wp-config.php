<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Applications/MAMP/htdocs/ecf-wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'ecf-wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.<}A=~nOJ6zMUkOfUPk]vtYPLdaet$o[0R[m_moh3?7>L+1G61N{.)0o~%&[Y*r#' );
define( 'SECURE_AUTH_KEY',  '9z`CA$Z}A$ `8.I|1K#!bipD4!WWpbhbS,u{]`g]5TZyq^{Sg9p6zFKP|dIbEn,9' );
define( 'LOGGED_IN_KEY',    'y%mQ,5z+](wS9ZN{[0LYYM?J90cQ?.s`~w%PH#=HlULlB~BHX(=n Dawi|s&eCK=' );
define( 'NONCE_KEY',        '@$sLgk=~zi%oE>]|A^zG}G!sA5f=dk7in3zedtdcONnkG6hb1(StZl050=bm_`9]' );
define( 'AUTH_SALT',        's) 43e@nbM{G =:V9lwReG`kvgD(4Ei9LlyF^9k-,s`GSyS/|/`x1acq}$2;2H3k' );
define( 'SECURE_AUTH_SALT', 'Ob:iSisftZY6`,S.C*`0FS{DRalyykP7qwQD9${B_(!<eQ`!gw]*_9{;{kCF3RP&' );
define( 'LOGGED_IN_SALT',   'bFXYzC$Sk=$,;a& f{8_)vii&xf5|8w!$|+(/jp0iQKH/0vi_fJq`{tHD%~_(P56' );
define( 'NONCE_SALT',       '_7sSUEDBPzEkU:ueg-@U_ K?MXofP6,>MI<RS[&N&o>qsoJZ!)O@NzD2trK)Fyjs' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpecf_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
