<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpressdflip');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wrgAl=e?,Oi[&V:fZz!m9!%7Gqq`]*WJ`(9f!>dN_<xxnhoi0hh%zT1Qy(=cW&/U');
define('SECURE_AUTH_KEY',  'k(*FvX=qh~;bK<(7tKU4KWNL^C8*j!rS5O7FOgq2-4xP@r2q`:9gKHPaGJRaa ig');
define('LOGGED_IN_KEY',    '`5Cm/6IJL$-Oa5R.+uU:6X,Mx.eZ[cnRA`Ct`PDw*nu|3SGX%4icwqX#R57SFzUX');
define('NONCE_KEY',        '5^N)qC|6/}gbNGm>zM:5+S*i^u`fw;s$Qm<K,RW!1uFb8[Pp4{=Tch8McIUyMl+e');
define('AUTH_SALT',        '^o0?Qse`@uXM4FV3Gql!|<a0kTj={~ZI,:ld5u:N2&]lREEvoB8*5N;N;m3~aRf)');
define('SECURE_AUTH_SALT', 'Ls;~/-m/t^&TD^%=gX31l:ZrMww.<E&@Gh-!e_/p6=*Yx/dV)GNIfRCx8PNs_6`h');
define('LOGGED_IN_SALT',   'vysf{}fHU>:CC|B<w{_$LU&[1v-#l#^_Z}/vwv(H;-U+zNID+^D]sVZr27,M[#{A');
define('NONCE_SALT',       'h`{gs1h_RY:w7?80?/~S<b$:^ YFx)ohVQ0^)v 6d1j=6 B/6=nIEiGBH$-Wr8Db');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');