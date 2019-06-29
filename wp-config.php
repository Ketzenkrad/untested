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
define( 'DB_NAME', 'untested' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UJ#5OMm?0r,NJY4^,AwS{{7;T5BdU!BRpjz[Os>_C,md_z_~5G X c&K~43ciL`9' );
define( 'SECURE_AUTH_KEY',  'GxDNue|> GRGetx_wln5/qCZ+>lEOC%7f0AG^>bgnugZ{*[m9JNi#]D8wiq}YEuT' );
define( 'LOGGED_IN_KEY',    '4^T{QF~yxSDGM8a~w;4;tn/~T]S<``X.$[(8.K9{&.p^#y1GhM~1dscRpj;o?os2' );
define( 'NONCE_KEY',        'WAe}-ku);<@f3;[&Me?C.jbl/<>OnkH_XkfX~)NvP>rn`k.!#::%a$t;!B.b:q~(' );
define( 'AUTH_SALT',        'XE3^d]SQOaN*|X&hcF-%M?<F*YTP@G:,29Qbv(7qMI^SEy@ !o#B54P~]O/T{r<W' );
define( 'SECURE_AUTH_SALT', 'dnWQeiXB%W?meRIK2amOUBhRt9}KN~cgv */M@5Hx-u{PkN4/Jr7@sPZTP>gYt_Z' );
define( 'LOGGED_IN_SALT',   'HyK5(h^@^hVW}vac(sqNM]??#-1J;<KXM0ZW_}%hfl]2F71vn@~2g2apcCPp,8/^' );
define( 'NONCE_SALT',       '4IKX<<&0 n_qJ;VmhC6hH5_-C?V@&vL6%8e@|oJi{Cvy_<kD(Wg*j5Qm_%)9,9oz' );

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
