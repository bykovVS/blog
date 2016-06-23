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
define('DB_NAME', 'vlad');

/** Имя пользователя MySQL */
define('DB_USER', 'vlad');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'FNBSybQe7CTEyrrb');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dsf<kjgZ!W*%Y(Clc= <`Y[9f-WQ{l-b$P{Ej&=>znO&~m,2xP/j3ydOG$&5KD<&');
define('SECURE_AUTH_KEY',  'FNxu{RhDs,B#6Z|sRkMNRMo_|*WE8^-Ah*?rR,]uvIX8~WGI76i8jefpFa;5TmAa');
define('LOGGED_IN_KEY',    '//baBy#k(qyTBh_-n.I%GW=C&(E9(S]HM/vFkF!vrO-!FX]UW]=X/?&ft4H9w=&&');
define('NONCE_KEY',        '(RBugbC{@;Z|s7|2N`C^Bzz= R):<g(LFm9e::Jr h&1$i$rk/QYW8KArn`.p;SN');
define('AUTH_SALT',        'm`0,]$N5G[>3j[25nK@18U@V]7rYwhTJ=frRXb>sm@;KaIp$Sx3Mir@cdsG><lsh');
define('SECURE_AUTH_SALT', 'qpEkXBcU]U~ux>2{?sqy_0=$<VloD8bXU4YWtJiD?(;Cz9c+a0{z;Dz5U>.m/jAx');
define('LOGGED_IN_SALT',   '-:RJrj:0]cd*[_K=YnI!<|UH2nmAJTQF#ex,F}_!1rM>(E&^ypC|XA}i8y#.KK/h');
define('NONCE_SALT',       '5qoW6ciWa:zFP3MH +.%+zdkiLK.4+oB]~,84 JfnAMiWpWaW,N`W&O9h=9S,i{E');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
