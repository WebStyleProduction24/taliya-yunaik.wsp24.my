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
define('DB_NAME', 'taliya-yunaik.wsp24.ru');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$1,>.auQ16t:cuhp!=pP|(A!FyjQ6`o*[@k~-zXauHRsJ|uSYR;^-eJ5fdd6li3,');
define('SECURE_AUTH_KEY',  'jRH.;0)qU8<Iao5lA(-zN~Y<D36mWr.]>l88_Ev4EE2k>B;1LOJyIJ$~4OW|aMtv');
define('LOGGED_IN_KEY',    '!9}thpjGN_++-;jyoO4dd#B}Je;_<<*MJUbV$}So[=(4:E>!<@_RH`f(>=y(%MIv');
define('NONCE_KEY',        'QLK;o@bE]xR=&qZ),2:p+~DBFQ_cnq9N2b$Z`.6P;1UB:uVSCX]v.N5x&?hL^%ty');
define('AUTH_SALT',        'z%5H(c`tZU}}ZkA}q;8LcPxxNs6V+ f:tF{0qqmxG7w[9Le #N@@Kb8OGlSNSVd}');
define('SECURE_AUTH_SALT', 'f?/y(m6+j6A>fp%d&UuG5SchcBa@$W}-]<A`P}bVy>s@*O{A9voJ801VuE%OG-y{');
define('LOGGED_IN_SALT',   'QODegy[`(+zhY/F-,X&Zf_UBOp+;75K: h~?6gGn<8?{tT&r#tbmes]9nQyGO-n6');
define('NONCE_SALT',       ' ?u1h]E;JKtC_eo=Hn;Vm Ns@(=O8`=?I)n!NRN.3~;+xe|CEk3J|(!]DMb5sgq<');

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
