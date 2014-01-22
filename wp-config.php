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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'qoBVD)Uu$nO5-XJW>9L&V@WtfyR%Lz:IzSpOL;sek}b.|Sj1C89R`*70y%i]Co}e');
define('SECURE_AUTH_KEY',  '?@4b:8y]g(MWehX-:7<Xm?Il-3q3NUJ6j0ERuax!(`-Dal-;3(;C!,~Yy9wMgbAi');
define('LOGGED_IN_KEY',    '06k8Q**r#kEH1iF LWbB?WL+M$GF`YTCnV>Jeq!kL-S_L4]s8H-ckXApY}91w|$-');
define('NONCE_KEY',        '4{:{YYAd:ciZNO^5Q>P{cX)OsEa+5AnI;=$yo-xBE++n7ckmx_ynrRwr+Ye-KH:J');
define('AUTH_SALT',        'n#L^f%5rH_f?i%.lcu[lz%Y>H{-p+H4ky*PkEI7&VQm}*s.Q?=.-QE5clfx5p)*5');
define('SECURE_AUTH_SALT', '%[Jz=.5&X9hdS>$R<*!J&?aZe78.*OT}`2_L@,_n67*NcJ-%a&C^,D]L +t%k-N0');
define('LOGGED_IN_SALT',   '9WBAFQ5<=s(R((+a|u0n0+(9Ds;C;*.|3M&vi26:^d)Lw!O*lo#YJXs3ZXM1p,?;');
define('NONCE_SALT',       'b;Uz)(7Gy{[3%zp2J2sf + <jW$FGy+1H+fo4/<{*4zHU^ n,AjEB$+.h4Kt[{.t');
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
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

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