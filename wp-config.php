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
define( 'DB_NAME', 'area_six_wordpress-bd' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', 'Gk11gBS<^pd<I~F785?Er([=^XiMM4m:u0H0Le2MVYzV@?-TK *J+I)F+bwJSZ]o' );
define( 'SECURE_AUTH_KEY', 'lz.6`*p>%O+dP5PSJgFaxgUcA+CHqF%7HIS[`uYoUu_Pp,#VhBb@]>fqZxq0,[{b' );
define( 'LOGGED_IN_KEY', 'nR(r[DY}FbXH6&T-UzdKd0|$sdyR_+Q@49SR@A6aEn[Thp/Nt([;K5$M)1|}yT1 ' );
define( 'NONCE_KEY', '&^ vrx?O45X+ s_@|9N owk~-9w5.r~um}Xds]3vjcQra.0uCd:uhCnDEb}:.[5N' );
define( 'AUTH_SALT', '[Bo7!!.]%(St)_bAz(PN]na1$.)1`jw/G`/=6co(zJqPNI~Fz],JiUk^Ed5g#wf>' );
define( 'SECURE_AUTH_SALT', '`/uBu&[Cmk>%v-pFz q,VExa&i}zj+r:<ml_ hTTo(v[T#&a}uAu)tFX-! }Bw#v' );
define( 'LOGGED_IN_SALT', '}7*O<N>`A{}yu|z8a-O~OV-oSI,J{D>)O[UG[.+xNg@Asr-)a5QnfF5yI*ovcD>^' );
define( 'NONCE_SALT', 'hTY&.rKd;nCf_=D8X]iuGYB(sS2icZ*Hm-}}C;G~ICIPY ,2gsR@=f yhF8H;8J&' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

