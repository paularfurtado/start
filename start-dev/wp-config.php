<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'start_dev');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'bonito00');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V<=>&TQlzY~|7@MU36)-FFVfIrX$fhO_2g-e 7T&UjqvQX`N%<&}K{wm5yr{%SNe');
define('SECURE_AUTH_KEY',  '6rt83T_s@RT+bTM{:<vjB|>=.Mmw$9U~+y;OjhL!_u@,f^p`F71vz7N;+xo2R_|_');
define('LOGGED_IN_KEY',    ')X~Z(B@UE.W_]HKo7wr+nu|P:_edcW+[Bm~r]&`UFB)O`pSZeZp+l/5#2Z3|u-Iu');
define('NONCE_KEY',        'QU(8KO--6USy8`-_u+`z8vcpQq.7E}4+iy&?rGYkn=J:L^|`b|Kknq9!}Xym2[Z8');
define('AUTH_SALT',        '57a=:H.y9f9J$WQR=Dw1-tlq>|TGft)a;*F$EjD+X<J^N[z)kfQ5*p4x_QP!K94X');
define('SECURE_AUTH_SALT', '&l%:1=+nUAd-m4x9=i~87^D~,j~OlV_pOS<sIJk$wa{xcWKawfG:r9,7or9RG&`I');
define('LOGGED_IN_SALT',   'noGru*)#kY.tVJAzN+4/TA Y+{I96{2b?YX(pU0b8=YoD$cJADO=E7`Yb,jh_CXI');
define('NONCE_SALT',       'A*+47Zc#e={#ceKGGbR_GIv;Kei<GD%?UpN,c3^n_/fY+,<j#{9)bn77xA5j*]gL');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
