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
define('DB_NAME', 'fitness');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'eric');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'eric');

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
define('AUTH_KEY',         '1h)x3E80LJZu@6Edah3|3T7{7GRvsqL3hl.&a.@+Nb>?RenQueS2P][5]}QD4%=7');
define('SECURE_AUTH_KEY',  'I/@q@Xv|WMX>L04}w`eJ wCX#4f^k>AJ^,8^6-;!vHrh`U!+B7xXznr:FiJr@Vkt');
define('LOGGED_IN_KEY',    '|%yn=cCpfqk24sp,2hKUU Ndg1CNg!Q=zE!vDWiZQ0|ygD ah*8(!v&6JZigh/{:');
define('NONCE_KEY',        'i)4&b9+T_DD`pS|gia;ajTGOX_$op+RM[X?{7M3Gkdq`Toie-P/]Nq#l2ggKap8c');
define('AUTH_SALT',        'KxA86)U^6ve!1t8=dai24lZaX1i/) p91cF?_VU/2:yM`n<->xI&!K_ys)xXyiEG');
define('SECURE_AUTH_SALT', 'mRb2ScQjVet=]p|Yo`~%*d4w{L_^2vto{Catqg,H(4o,z*N,DK=Ij;rDzWRuz]!B');
define('LOGGED_IN_SALT',   'N?r#58VUx}$GrX[Ar)HP*O9pps+5rrJu;TLPoak!`_b:^MwPutPCT$Q3y-+&L($p');
define('NONCE_SALT',       'Ou`K!]l[0=v*~,JW1T$E0V%Mu0#d&0!f,jqiNkf#;iFq_YZ5gBmS&dBS>m%@=_FD');
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