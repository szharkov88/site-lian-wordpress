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
define( 'DB_NAME', 'lian-site' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'aBahygc?^<#5x> &9R/&}n@K$F+!#,/M08fUiJ*makrf$R0gq^sZ+!SK!_j+|)8$' );
define( 'SECURE_AUTH_KEY',  'GJqQI2F4Y5V)souq%-eJvBnIF$tsPzsb.J8huz5k][n;9U]V7~+>O}d|icOMvv.`' );
define( 'LOGGED_IN_KEY',    'bj2,^u/6HAz>N>,Eux^n;7-RB7}j+)]lv5!>Rg]CF &[o(.5Atr@hy9%^i)OSH](' );
define( 'NONCE_KEY',        '4U>Y>I~X/tEv[L7}5r~6z;:X314o@_iwKLGh3b~Jdd8Bvr=_ykp5;^91r{NY:A/4' );
define( 'AUTH_SALT',        's,l;f:DYQjL)G!DIhg&f[j@^{*1R9@Zuy:Y4?|y6c=IRVB s`WFNjF]=-DHsb1ny' );
define( 'SECURE_AUTH_SALT', '8)+w >z%I9i%{h4$|=lUvg^aV>pz- %vt _DR@+sO(W?Q~$;=+V?$J0wtQ3o[6 |' );
define( 'LOGGED_IN_SALT',   'HRri&pe/v}Rr8XUnkHc(}i5f)Gb>ndQkp-.d9CwrO)eU`!Qa[o@h<NizR*k)=v*q' );
define( 'NONCE_SALT',       'TEv[0zdGrzcQ}ZNXetel_W8w6]=$vdoupypmJmh*gOb*YIX%]>s}*AWQ>XmQe$U?' );

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
