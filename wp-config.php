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
define( 'DB_NAME', 'massage' );
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
define( 'AUTH_KEY',         '?o1*xAmDjrcc#A<_Gg`S77+F[^QHtDK9SE$]#f;A6.DB|8tb4xf tk7dN)*f{fs`' );
define( 'SECURE_AUTH_KEY',  '`+R1iw_hrebAsg Sz,-;bG_]UM+KfM|(Y[u aY X>|qI$S99kEf,PU8[d2Lt7Fnx' );
define( 'LOGGED_IN_KEY',    ';baddeH=38ltADThjav;}^G4=e6Q@[O`za>dwn3a*lNd1@M<o][ mJS ,+M<5SpD' );
define( 'NONCE_KEY',        '{FYj.XU6 ,hbr*|RbwVKw3*zJ<:^Q_Mi1%RjrN![7(zS7#Ubi 4$1}Aem1zt7eDh' );
define( 'AUTH_SALT',        'b~-TGsHC.whA(k|a8}J5aD=gqc~RfXF4{S3Rhp+V .;y3}K|!*u<FRd#YK3PLEY0' );
define( 'SECURE_AUTH_SALT', '] l{3DINJ@Xb@[}-TYpDrJqlaj;,i{|]&|<m!WuI%9[1U7kIr)Qqh[{?THa!4(?^' );
define( 'LOGGED_IN_SALT',   '<>U^Ms^D?@TY6Lj5;$mb,>*&Zx9O(A ldmu*nA7,VmV@!pUr^uef+-c33O[Vohbn' );
define( 'NONCE_SALT',       '}T16]`t@VX]F$BYe8c25,G9f/%[RKSv*Tp:%*A~@x&}8sr,]87<;UAihla]<SEpl' );
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
