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
define( 'DB_NAME', "wptest" );

/** Имя пользователя MySQL */
define( 'DB_USER', "root" );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "user" );

/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         '#Zi:s%v)^JRderq v9LQxV%S)su}Fjrnfr>l]O/{h.N!#XE4EFt>px{9Q7P[f4,`' );
define( 'SECURE_AUTH_KEY',  '.17dISI<K$B`ElV@~hq`)0ELcq=7b6)NnEU]9[R6OILQ_Tcj-F~CBx1CXS*b{gCX' );
define( 'LOGGED_IN_KEY',    'w,>@sKs/V_w;n_5Z| =Rll:%+oZGJi.,Pd6Qs^A},pEmRLhwBB7.Bd~(HNAkNA{;' );
define( 'NONCE_KEY',        'y9*YHbAQ&@IJB5#W;eCjP(EMaeh01e&?)dGIT?Ub-E~wTji*fx!gP8^KUaHO&LA0' );
define( 'AUTH_SALT',        '0[s0H4I|q_(#iJ0lK,]2]d-(U?!}i-uxzSmMkJD$ ;@kLmlR25-B)[lx}W2|y0uX' );
define( 'SECURE_AUTH_SALT', 'T&iE0gFm,0-}</#d[ihq8Ch:(KId0Z?Z}DFJC<,+En@7q!b(<._WC11Ia5ZJtl}o' );
define( 'LOGGED_IN_SALT',   '+T]|O#W&1)r$F;ukV)gu+8215P{2=bSXR4a<P~WOl0Z,4d#3EkT&PsnFl{o#8|q4' );
define( 'NONCE_SALT',       '$n:,9fq,[w2FN</?f?vUJ|Ldfb<&iZ/Wm!Zgt5Xv]K(Y)CMg`0[!|{Z/ :j`&#`-' );

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
define('FS_METHOD','direct');