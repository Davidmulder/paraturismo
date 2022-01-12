<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'paraturismo' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p}I-Ulr$-$>#bEE5QfEoUT[Rud,6d1IZl$t|~3g;hWs$L~kXhh]w%/=YzVaN2dJF' );
define( 'SECURE_AUTH_KEY',  '9&n3@Whf]n8XN*D3Z<|Ro^eEyw7/z5JL*_kWmwi)sSMa[qH%sMy#K8rq6+X:]#e5' );
define( 'LOGGED_IN_KEY',    'Bjw&$`qak(h@kq|c.):<{rfTb<=l/5&NonAr3Wi?7lk-%XSEbuM.EyT_Y8k-TK^W' );
define( 'NONCE_KEY',        'IN`F)cBr|pDQ0yY|IogF1v#4$KlRRY!&xk)Es_5SwglPp&(eE1CtiW~_bs?t^Xp]' );
define( 'AUTH_SALT',        'Jk&K=>.C@4=l1I7^7Fh:}2#|Zj]L?0ci[5m2]Oxmou&k0q[q|-)%hS~+7[|Cb_4h' );
define( 'SECURE_AUTH_SALT', 'BM-cx_^9YW`X77M%#(Ke{Vm+)SLBP{G{,sWWq@S4F%qFEq?7V@ds[&rv#@N~(J0E' );
define( 'LOGGED_IN_SALT',   'jb;ob5WAbI KI1N`C}EK+<RF+x[AB}o0w!gB(LC;%OY>|] m3|;/$:S1SdMq7#4C' );
define( 'NONCE_SALT',       '=FK^y:IRxY=J^Fm^:}%z4CQ#MQGc;^dmaT]%TWF M,A/5NGjkP&Md+Y{+MiN&T:=' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
