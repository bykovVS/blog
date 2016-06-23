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
define('DB_NAME', 'blog');

/** Имя пользователя MySQL */
define('DB_USER', 'blog');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'MTYTqKjVpBpjded6');

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
define('AUTH_KEY',         'zT)OMk8c,_?zFV##ftmZEl8LUT+iqc@xh+CHlLlXbk2f(r7tU|Bvh U6?~w?*N ]');
define('SECURE_AUTH_KEY',  'O;Al0/L}<v1y,G!)fbL+~R0O2-n{|d<35ekg&L$y90aloTJc5kV3Gu9u>KfKLPW0');
define('LOGGED_IN_KEY',    '$/[y`g-fw/0x1|LxEag-DrI?wW%Yx va3yV0I,@;}+[nJ&q,2*f?k[f ~->nU/!D');
define('NONCE_KEY',        '#cYFUo_[T2~y|t_l*9Nj*9g5:l+tyhBo0%YTr>w/]hLErUHF+^jk@n*Mt3QNks  ');
define('AUTH_SALT',        '+k@vgEaC(E;6EVLkdwx;_ifT=rPH*xty^opshc*(aj3zs*w9~^CLxk*&/(vnKFL~');
define('SECURE_AUTH_SALT', 'DJiFz[Aj.s6[L|Tu93Cs@=&Quj1gwX/!9.Wi.I>ZxyjzNU#kV[;WeIKDU/?w${:m');
define('LOGGED_IN_SALT',   'hMH/aGu{ra@=xhGzkopwnFeM#bXQ}&~ay8.Tx}KF-rpacAC/6,Hsw)Q0hp*>vl;z');
define('NONCE_SALT',       '[b?W9su[b&cP+H5EX=>@b`P+,O7~>CV26{)(HN[I:)eyE 2Nu0h`6+kX)Ge]Cf:{');

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
