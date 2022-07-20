<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cinehistory' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@#[|u8%&{AkV6,B3<O|B)K^Bp*c,Q?V)%sMZ_}Io`rNZ0~<A~Zivh^[&xa&&&21p' );
define( 'SECURE_AUTH_KEY',  'RRcCk$}m>VX;/`~RTY*VH:@<<02J}=3dXhU{L[,P5?mqkLq0oY87StC}b]Cc:UUr' );
define( 'LOGGED_IN_KEY',    '15.1.LO5Q7Yr]#]o,>caD5@Oy[AQ`8WB{}x.XgLsN$RLDG@9ZD$pIjy-8%O,Rd}w' );
define( 'NONCE_KEY',        '&=+^lBg=37}/}fUQ]L.i,dM@$]EJtr1-EQt0D!QDa#T}N]F.5T1fOrIr-xWviqXF' );
define( 'AUTH_SALT',        'nMg$:+4)46qSn^N;Q$BmMgpcG;,0eN:v)ur_jk.0Zt ]#Xqc;K8[ tw%4B y<6}(' );
define( 'SECURE_AUTH_SALT', '-zj_SY M:G mYrZ0zG%)U+^%/`O yDEVQpCXPXM-W;3F|XEJRk<Koa+Bmg[hJ~k$' );
define( 'LOGGED_IN_SALT',   'M-fmF-0gx)]M{<$-:Z-/Txyl_(.Xp(eQOX6fSU/eW>P^R|V:/,HNLQ9gRw9J<baN' );
define( 'NONCE_SALT',       ':{08(H2+bR0LHIV$p{ lN1[d/v8kYptdRsoXuNa.etvsG-.Gb9+-uFBUR$k!=Z8&' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
