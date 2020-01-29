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
define( 'DB_NAME', 'maliseuse' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'QtkWXy_:0&=Ry>3-.TTf-d?Q]SW`f2lg,ud%J8(9*P 4[jkgd-<x7dTa*7L$:T`*' );
define( 'SECURE_AUTH_KEY',  ';QJzSV;UO.UDTYY<G-SdhRj3W[15$r<X[2<u2TqITBHR*nR`MYsX:Ix_(/vTZ|df' );
define( 'LOGGED_IN_KEY',    'd& x?V%m^kY5+U@i>i: qKE-[B8LwH:G4:9*r1S+[[pIFQjp3Bx,$C_&tL^?iH~1' );
define( 'NONCE_KEY',        'tvXD?OiqH,eoPlRvDm6Y5N50AI&uWg5;{*_40X$P,P~RUXXWgzw*W]S0iGK$xHE4' );
define( 'AUTH_SALT',        '.o5&XpEA&gIp:@ib^Nn^>cdzd:v7B{8g}zRM::8ak$O&|.AfW$KGA``.~eA=Y]}P' );
define( 'SECURE_AUTH_SALT', 'AZeOPAPAi3MrJ#mO[%} l,e C&?dI5Za0DZs4)aMG_ts&4jyUTA#4CyhSs)wP)o5' );
define( 'LOGGED_IN_SALT',   '*`BM=$}g,,_2)(rq)CTsl6b4oI.D7C)U{RML<HUM54{tw{ 34H{StItJwlqEDRsy' );
define( 'NONCE_SALT',       'iZy:[v8?J32/pp]*cC|+y)Q<y,(qaqm+-CT`~y8?@5^s+QT%IWLV>bNQ.XTlMm:1' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
