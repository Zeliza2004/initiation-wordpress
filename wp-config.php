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
define( 'DB_NAME', 'sitechevaux' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'yo@5aZT9MX;->l9p?Xci=!#`D#+4`k +9uNyzTjnXH}Dbc[J^`ln2>?=y?0Rjaal' );
define( 'SECURE_AUTH_KEY',  'fTAzVOJeQSjn?nTYkS)ue7p7>nW(.qG+D3CSvomHb~HmTXd%1Wj. *Qrq6pE@>5K' );
define( 'LOGGED_IN_KEY',    '8%S/27D98N)l6[<H#O&S8p0DW[DdY1]6U&nyId5*^APaA5}V@~42=y*nQ}VOSIt+' );
define( 'NONCE_KEY',        'Tw9u*`3Mq9Y&(NIb<]g^9jg8S_Db2<.Q9S.]pEL7Ur:;wc:%Opnl)`[sH:sf!^J:' );
define( 'AUTH_SALT',        'GyZ~*-M.mqFYm8/ULJl_3[AAVHk!4ph] 76G}ur^Zah=OOHT|(0i~7utcr%la=R,' );
define( 'SECURE_AUTH_SALT', 'yp@)<{{11$uWu+]pHN]`$)CPu]$J-B=:1zneDvvNaD&$Y=ZbZ:Jqf&_^{,>%0n+X' );
define( 'LOGGED_IN_SALT',   'sA{ry74E.rf*EV4C]XYdDxeo3/pAN!|X&Xc0Nx_6Q>@CjbhUq #B(Vp6PE9md*9n' );
define( 'NONCE_SALT',       'qAo7u@Vhwfe{)Z(;uFgwtc7J-4a@GXP<POFoUk{3&=!s`NZOzcs<%D`Qx~GY.gS.' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'SC_';

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
