<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', ${MYSQL_DATABASE_NAME});

/** Utilisateur de la base de données MySQL. */
define('DB_USER', ${MYSQL_USER});

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', ${MYSQL_PASSWORD});

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', mariadb);

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'c,krOTA}O)i${.]k-A^zZrs[))wfuB/w?n>*<zQmF5b#Xxao0lY[y@R-zBQxC&F7');
define('SECURE_AUTH_KEY',  '-|`fqJ~ROj)47+Ozdl{BQ>Z--vRKq56:Fd6nk6Vr107|hPW*E%;j1}DWmMsW]?0V');
define('LOGGED_IN_KEY',    '?}/!EkU14#cEcJB-pEaJ+=Q0@|]W8 C3_{X}~lYi+*126bL }^fj=hC6,?LS:g+Z');
define('NONCE_KEY',        '}x3fL2Xd;8]lp}e.+1/s%Fqly]94q[zok3/K,B{DRc;]<BnARh<i~-E_FvwB@0bs');
define('AUTH_SALT',        'Y^T<n;KEC3+A2[}<HtQfC<b|=Z VR@6#zGO[oUw5oOIW~e]l+6N@Lmv?N6!+N-2(');
define('SECURE_AUTH_SALT', '(.-AXXa06GcE(,/D@|vHs[r@R}jI]!6z>Fi^~H# >/PReC_X2Km}GH2tM)YlOmPP');
define('LOGGED_IN_SALT',   'r.9&^S3K$y;K_itR!5ZV=l>c2jfp:(-i_4$mk[Lal>lAiK61g2F-iqO-31]}nzb/');
define('NONCE_SALT',       'FEDRs! `J^RaRkfQ5wM.sjs>/`lME~g&A-Km-1;8]eDjk>;yv>w=IeLD$I!FjA5,');
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(/sites/${DOMAIN_NAME}/wordpress) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
