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
define('DB_NAME', 'SComme');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'GhL]BAC6WY0WdduyBSzF:wRL%)*yBo_zf&M?Uw}+)>-;% }`~82iU>1r CpgmnxY');
define('SECURE_AUTH_KEY',  'TDbQdXR|{*N;FqEX+9cN-Vr0 h|]t<LgnGjms(=*F]ET.]uXgU%YKR8/;nR+r{Hi');
define('LOGGED_IN_KEY',    'S&TW6Tg_/YR,IP{-I808CjJ_LT|02|-=0uBlX/k)c>%h9j+Ny6|bN>%Twp) n09_');
define('NONCE_KEY',        'c- -OfrEjh+>swF-e[0|{ 83W7q:?R~~H@Hj>Rji<dWODe<R@)?olHg2ngF*+6sW');
define('AUTH_SALT',        'rC75Dt_+Y7qdD3ai;jG0-LoO,-5-+BWWa|+XVK)+-t&Hd~oJ=0_qEj|V~BeSw_9Q');
define('SECURE_AUTH_SALT', '$]ES/:!}8R?68Ts+eoyG{3|q0FQXRf}@a!skK4BY[@09n#,||,2;w0RS$l3clQQi');
define('LOGGED_IN_SALT',   '~.<)-:U`gqiWa$j-G`^]&_v-d,W>LH}Nj2>@M6L),`1q&nk@5}pz7,oKX!o+-2el');
define('NONCE_SALT',       'T_qlqaw[My3;9P1Bp`l{!<uTC:973..6Jypa.uV*^c?zDX:Ge)zq|Mf7bfnEHNEt');
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
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
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