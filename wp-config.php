<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'looky78');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'HN%;+!`Pe,J%@Tk)[6x?U?W!S?%1dlz/r7RimG1H`bv/S$WHv->DxrFh<=sJ>Qz?');
define('SECURE_AUTH_KEY',  '<B$VCefPbCjeuhZ8)E&2;r Q:98*N*m.(U&w5{1>zz:3gvA7@=||i8:oVG6-K-;|');
define('LOGGED_IN_KEY',    '5H</|Pe90dTZ68}DQV+39h;#A>kitPJ=y?g07q1zM66t/|ae`>jvC-4Xdz@rp`o)');
define('NONCE_KEY',        ',FL^29t58i4_.=;8(Z|YO`xpuY]7swO:5[Zf;~9!6C|K9u7s&SN%EFTv?P1o6>U-');
define('AUTH_SALT',        '0I*dAfGr^XWUyL`m_H|`:.~]:q$8Ht4|{BkkX*-+&55(Kl+n`@UH~oE;<>x+<q)L');
define('SECURE_AUTH_SALT', '9Kd1[uXeu+-_< J`lUbP35+|K!,kuw1ZIK|tpQ7?p0BNw7)PpY+i#f|;+di&Tk+8');
define('LOGGED_IN_SALT',   'WJkxy_sxKY1RpT$jSB,F9hgCEt:OOz/j|2O#j^1#|M4.{x2%-@l3(TU7.o[kNzL4');
define('NONCE_SALT',       ',x0<hSI@T+t40e36~r3J./xC{&x,qX--|*E$KG0Wc^2&g2!Qh(BExX>cnLgFr5JB');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');