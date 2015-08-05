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
define('AUTH_KEY',         'D+7fZJyUY2lPe:v@:It%b.H#D`eb!,o@8x+vL[zo`*h*Au!K>FBjy}>+Z{=@/UJ5');
define('SECURE_AUTH_KEY',  'X.{<h(l0Uoq$QHQ -quQfIHBUwW1(.o@B-wg2ZeU06-=2GO^MlF,@qsmgGCr-DQ>');
define('LOGGED_IN_KEY',    ',hPV#S,zlr+XY*d++KGcN[X%Q>7{E~3)+WbPVMssQK+[[mNLi+@OfW:]cCL R?E|');
define('NONCE_KEY',        '(4Puvx6OZ/ITf-I#@Hh|sm0g/srU|a|z<BV)vcv@BjbDCulfrSDi;+>y~TcLfwC#');
define('AUTH_SALT',        'gjJ_J(C%o1L9!-lg++b;bvt(o{AFH<[m_C%Dki@58Q=JY%h&nU) y:g8^v`XH/rv');
define('SECURE_AUTH_SALT', '8!aQ M#{90g=QnWM p-68.t{2~L-g)Nw~?GaZ@rP*u+iiL9Z=@z?jHfV-BbU,o y');
define('LOGGED_IN_SALT',   'H[E]DOFw9eu(cs&5>A<(HU5@8~(.`!38a>qUHl;Hw8@i<ect7voy7?:#JPn4dqPT');
define('NONCE_SALT',       '|s[1h#pMb|kf!.gzR<z8/(*7|Zb1UCfjE`SEW]#$aVK_k>N$N;%X-YyLyZG/7<E.');
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