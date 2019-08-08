<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'CademyWP' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/^U%&50:tapUEB#p}mUN~V[IdYL&/Th;afZMJoj[zwzB,cr@!{qW?COZ*@ !}<I@' );
define( 'SECURE_AUTH_KEY',  'U_p[gD@)CbD&zj26xKKwg<nLc@JEkE_Ff?3%^JVz;N_(<Y?ofiV9G8r,p]5wF<a~' );
define( 'LOGGED_IN_KEY',    'c#]J3u~ivk{_;_G~pEL^AELz1FNCl~VGf 2t][2agr5LsSXR@IfOIwYC2C5fh<0N' );
define( 'NONCE_KEY',        '38~_OVR#j;}Hxc0N7biiGam#J:}.FQr>UPFHjyEcvEP0^5DH>V4{&E7pg]s-i@9;' );
define( 'AUTH_SALT',        '7tAMYF&naqb*rWz:={vopR9L<MszeX..6 f_l1l8rK3/5DBv:N?Aw`^h=]c@p)PJ' );
define( 'SECURE_AUTH_SALT', 'w?<8-2lrH(Z`m_y,i,0=Z[3kk@bWFFE:C/=VvBen%LS/6&atrs,E4#=Z}XH3VAqf' );
define( 'LOGGED_IN_SALT',   '.z|VcCkQHm~9+4+hY*6O-7xkY);fc0D6K:]{LE!V:Mq!r=>;;_X(Pn_JMfb/XE7u' );
define( 'NONCE_SALT',       'Umk~HI!0lcfMGjY/3&k1S[A?g]r[<(Xwh>H~;eQMGJZnky_b}SDI=# :5Hw{iTzQ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
