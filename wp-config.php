<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'bomajans' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'root' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'F/_4_!)%WAs0;&oc`ceo<|SGN+9uKSMV=XAi33-s3_vsW(rj~iFn}}62-dd- 8a>' );
define( 'SECURE_AUTH_KEY',  '[nb*C|/7][8]9wncO#0^~(xz=W*?>)^$GpAw;E3gO.:-8H*DML}gBJgv3M!cA^;G' );
define( 'LOGGED_IN_KEY',    '2N|E_@+EQG]DbHdtvXW n*;diS0.4YWh0]rrZpn%fDFr1kc+RrY+;P|A/.VN~O#7' );
define( 'NONCE_KEY',        '(?SNDEHkmoKD-l5kx S5<=_o4=vV6kG(e`(qOP[ ?[A$p5Z!P$:C$f|kPB1aPEhg' );
define( 'AUTH_SALT',        '&.Rk#VI=tPlWdGtE&d4d=[e~)K*D]8k1~OSC%)=-2T33:#SOo<y3gu2s+IoWNlIc' );
define( 'SECURE_AUTH_SALT', '~B9 XG/K(-BGc.UkeWjHlkhG:PvnW,?gHl?P fp>WRx>Q<ZQ!&sL]9qc34kf,zKP' );
define( 'LOGGED_IN_SALT',   'SxG2S%gtN]bB^wS<.Gt9ck~NoREEi83IbQ[o_.wPcAMW(s*oL%,#+3VZPukGpvj3' );
define( 'NONCE_SALT',       '%LK!9:s._fx[UeFR4W6UMS>&24$po|r>)m8h2H_=%oOdFnUJH[=LUbz#&#GiZSkk' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
