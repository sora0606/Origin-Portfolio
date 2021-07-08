<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wp_origin_portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'test' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'testpass' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C{~O63d-X0L2513`3I-6dq^UWp|df;&Gklb, GLmp<4~WD-7<F`t3nm5:g5v)bPd' );
define( 'SECURE_AUTH_KEY',  '^%$4PCj66r<)E]JjeovrjbW2CEm~E_L1^F>*rX=FvzNj2;}6qnrw3}ms[MMsk#6$' );
define( 'LOGGED_IN_KEY',    '<ooX2E?_Ho@kKkCrk-)Bn{WXnL-][zh_YcbZ-,pl0E%%GV32u/csf>PpV+M8@bH9' );
define( 'NONCE_KEY',        '=cl>1`=eF^*/]Zf?@~T1~vE5WV;{l&.58=Hx]1:EkGbxj<Mc5@hdi7Q8W@S28oXV' );
define( 'AUTH_SALT',        'ZBIip+):F> us9nQS[Q!Sty?E:5Bmfo;nV{e-5Un0xX@6BJxZ;oq`b/DBkWi]on,' );
define( 'SECURE_AUTH_SALT', 'Odp$:/++6Z%0;~IZ2]0:QfKQ<d]|g|UN{udl_#eN<<zjlE:kTSO6yw&Q^rD!MX.d' );
define( 'LOGGED_IN_SALT',   'zo,s=^~m}Xd9O;}P2E}S7a%+h_vuUf$zG{?(1l3a069#^2Cv}w}U+XmkV<Rezb=O' );
define( 'NONCE_SALT',       'B_|QF$Cd^v<m.y7DD.WT-Zvjq*c?fd()S$Fd%7a^e,y(c:E$FFT=j<b6H`q]XwG[' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
