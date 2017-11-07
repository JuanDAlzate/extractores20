<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'extractores');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '1094');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '`+PFlo2iz*]i42fkXt7]Y!FpB` 1)buT-z-jW?4[}@7ujT(wPiw>$F<F60$9_@P+');
define('SECURE_AUTH_KEY', 'OY3U:uL2_2F>7<A/iJv| nKF<+vvJ*G`4<ao[|9CH6rb7,}F7y$Bi9|(uD{WW47v');
define('LOGGED_IN_KEY', 'Vkv1u97] v?1^$^Wv9o_=f%<Pk<@MP8g8I%H &}3>]RNm=#/<KsT_xXcXD>w1{Mc');
define('NONCE_KEY', '],o@c~o$p/q2D[_Ypr3`6MR2QZK s?,C-Kjd*w`je9%{klCLm<&;Yvm2II49[%w1');
define('AUTH_SALT', 'qa#J/u$+L>lF|hLd|uP:K8YsRa^i|d}@e59jP,RzQ{>2UWp:1)V3gZHjO C,rt0-');
define('SECURE_AUTH_SALT', 'Tilo1!]st :U=q^##]#oX(yGJ=eKgF*H]]R?!s-@&dWI]uKj@2Q^z5R@$#gqL8(N');
define('LOGGED_IN_SALT', '1PufC3#JZ;[+;~ !T]s3.FC0%`ond)r/NRt4TU#,rhdl3</xCC&38Uk(sW!62R_R');
define('NONCE_SALT', 'n9jF.SK2ajx!?n7_{fy`NhjmW!f ktdU);9|{k~@>^`?Md9|v[9u-!Z>$Nmlh 5!');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

