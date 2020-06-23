<?php
define(‘WP_POST_REVISIONS’, false);
error_reporting(0);
@ini_set(‘display_errors’, 0);
define( 'DISALLOW_FILE_EDIT', true );

/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'u893383716_tkdm' );

/** Username của database */
define( 'DB_USER', 'u893383716_tkdm' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'dbtkdm#0407' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z=XNxR3H{_j4_UoK@3>W@dDyFRz`fiR}}5iIQ2j^UzteH#&9cM7Y@8wf|M 7^Bk-' );
define( 'SECURE_AUTH_KEY',  'i7XuDhKO_N{yuQI3I+b;C]8f1&Cdj]DT)/w zgzWjolX&lb<LV{of#, B2^$~WpX' );
define( 'LOGGED_IN_KEY',    'x_JiC@|V?T<|qcno@23m]R9Md`,!mHxc!_%Wft-c,J0hV^Px<P -/zbbO1i]}88j' );
define( 'NONCE_KEY',        '=2ly#W1V4k)dG>ftGvzwJn~<vW<}5lubr^B=-O:j}{-l_8(@0~C$WVJ|Vw<_<7/*' );
define( 'AUTH_SALT',        '?}L:wR$^s1xTjYDQ~$vEYDNL?!G{f/+sI#u38d.Dp ;:?XdPl]>u3U;Qtr4GK9PT' );
define( 'SECURE_AUTH_SALT', '=zw%<J`mrZ0Eend-4.`UcC=S3[nx!ND:q:]Pgq>o*_u&O54k~@Pk;y8O+*%JS`XF' );
define( 'LOGGED_IN_SALT',   'a1@EXUV}tki1$Gy`5}@)Ez|G=2lxsn:wvT<#qMHXIy^~??7q;S|vxh%?5R?$u3&r' );
define( 'NONCE_SALT',       ':ezYV?8BVxw.1AJ~ EMA]%r/=oL{g:`kk6v:n_ZL5lkJW& {lc!$pTW-#-LmE5IW' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_chinhdesign_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
