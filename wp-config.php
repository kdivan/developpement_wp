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
define('DB_NAME', 'developpement_wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'f8<%W_t=iXG=`0Di|<*i-k_S{V:,QJ!AY6r,Z#ljz6<#Zn@9jijygT7=U3~$0tXP');
define('SECURE_AUTH_KEY',  'h2g%3rBoT>@ur;>|f8<{jVs^));#p53&?2E8RT6KRx.Iy8-3/-:Nv/YI-(u-5}%P');
define('LOGGED_IN_KEY',    'X$5M!vqo`8VE>Q7VaO5e5-3wJVkTeJ*~or--0^O2QwQ&XVT( N1_L@1! d#&*(+9');
define('NONCE_KEY',        'd{Lzgj8ySBH05=A(*i|OhbCiCL5O^X+Hk*dNY,b@t|>qcrsps3I^1LFQ-6`fw^D%');
define('AUTH_SALT',        '0b~:+PW[z{T>z3@itcsmYXRBK!W.IsH3,`:Kc?Q@Bjq-Wz/<G{:`GyWl1:cCW@x%');
define('SECURE_AUTH_SALT', 'K&#-Y/8NAP?5+)wu-R|I#rS36a=rSnroDnAHS/tVbI_dV_zdI~fK.k7-.x;BJ2 E');
define('LOGGED_IN_SALT',   'mr25IK/8j$_=fDE8,Bxr30-czU3nTAARaW!uZ!s|)6<4Nz`@Z3Uyb[>K-Stmz&{5');
define('NONCE_SALT',       'O<%(,Rb#w;-wB$g/j(CdaS*yXK-u|j)2l#4,CIxE+B;uwLR4VP|miH^9OyN}~vF|');
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