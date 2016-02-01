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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY', '3`tA61tB4b10G8}#]{j JEPyjjsq!YSStp.p<IBjx=pAx*O7/%s0yptQME]oBQa2');
define('SECURE_AUTH_KEY', '}0?_4+-o[G7Rso1zBhJM11#lDT<Nr:3@vNyNDDM9fZN2b:<B_sP.~Sozj>u$ixj6');
define('LOGGED_IN_KEY', '>s> 2[mWEj$/71kj_NPMj0 C(]AV=_3L/wuk^|L)fbvTkx<0|5ZMABoD]W`-t35|');
define('NONCE_KEY', 'I,i)FEM$(6rMr([Sw$:HyaIOXl%>]_+3,X[)<?5&`P|g_YRw-)>y#s#uI^b4U|l<');
define('AUTH_SALT', '>Mp8kIMcO|RxW-mcCNW_vbM#Q+{M#h_1nDZ& <F%@Cpu{A|=WeU!Q/WYmr6q0f9m');
define('SECURE_AUTH_SALT', '-[U|*P;q46a<0%,i^&B77R9. Gw%8SB`OKf`k.*?tGq|-m,!MXP<dIKNIg}B?dP,');
define('LOGGED_IN_SALT', '2SvT%jSB0,{]?c~XQG,k&,RhZ}g(|F)Edz-*N-pnxpw.L<El=4VHJTdd7P|gIBf7');
define('NONCE_SALT', '%tbyZ5//aWJx0*fVV{W5ExE u-sl+OkZcZgn.>-0I/,=,~zM.|5Z6.NCuU)6jS1g');

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

