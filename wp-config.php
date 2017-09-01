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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'cei_db');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         ':m E;j{c1`? WaybyzC&xZ bM0 h<>IwAmWp=<oca)yGuro$ARK[`7%()Kunc9;5');
define('SECURE_AUTH_KEY',  '#KGw.k{soUInvX~?]{p]FiA7{c|vf~Y(/=p$es*9$]#zpA;1B,hi-d6Z{?VkrG d');
define('LOGGED_IN_KEY',    '9_(GJ,+W736.iF3EYL|1t~UfK^OQB{<<m;=est)o<9?d^3.>*iQi$#~FfV2?^CGt');
define('NONCE_KEY',        '/1)E*j.:hg&.-Ev=`w.?ezwFd*_9@w23CdJ.Rmheeu!BLB.o;9Ost$G,R7F1~S.a');
define('AUTH_SALT',        '$XCs^qW|4%h]u)TK0g4wbw}AI*c4]OjCc#1%kotT7$(KJnvKksZnxthm}EIHBX0E');
define('SECURE_AUTH_SALT', '?.(~W[h2G;KL2K=IsKE/vXIsEcp0tFNG(!Q.{/TyAR=-&Ec40oJ$oRC#I=E+wecl');
define('LOGGED_IN_SALT',   'C,8p(24kHH/@-7@U9Dk}Xn:YsX7XncMh4`$)&$z@F(isdeRP:z<J{?EdFc>+j@)j');
define('NONCE_SALT',       '^7bWfBq|,SE4rroH`P0m5Z4<n^~+U(My,NmXZ#^<c!|Ahwz]Mle]c0~B;=MeS}2`');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
