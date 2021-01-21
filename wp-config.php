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
define( 'DB_NAME', 'maket' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'maket_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'moskam14' );

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
define( 'AUTH_KEY',         'a<}<3N g=v/Y1im!Rf^mGdC0<q]P,ax;@d{CO|-mkf9h3#2U5X0:h95K,}soh#L*' );
define( 'SECURE_AUTH_KEY',  't!Z1r(P@p@7-yC?_s=s#lKTqND;aQR9Tw^79Q_BJ-L!uqKuc sP! `OSr0t0X}-k' );
define( 'LOGGED_IN_KEY',    'WSmm.7jzJP-d|EhpRC~#~63TPc#gSicwI|w@aY=zes{,b09J4)fu%eBr(3AwsOAI' );
define( 'NONCE_KEY',        '_R@^C:%5d!e*ZS;l-l,vNM+XXp!4$kI,&5.C7+tH6M[:}(]h+8!$`x3~N.q9~ cv' );
define( 'AUTH_SALT',        '+F|xttG7+1|<hz>_w>$kTyn(Zzqlp*dBT kA`liIxR1J doZ:{;$3Gcl,r`d/p6B' );
define( 'SECURE_AUTH_SALT', '&`?bJHt>r7@1G&eXt(BeMGF7}WAbcN]MNP.6c.=:,BO#cwCBD Hau/fiOg2-_.ss' );
define( 'LOGGED_IN_SALT',   'N1jvIe@`Y8DPmLh+j%X#akQoJlq>B{m,mO*U`:]:w7mIK1Ig[bgqR-%(- K?~5=c' );
define( 'NONCE_SALT',       'd6}!(~%L9ju@o0%`}Fh:&d@U`X^rtr$j;2XGtsrD*!Xm1<69kY^ZfQ3+i0!kkmJy' );

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
