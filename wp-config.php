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

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'curso_wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'O rZk1`wxhJPO%8jHct+*Fwoeq[-~Z7hgka$gc!6,U4>bEHJ{~OH+}CWI2lvYc6Z');
define('SECURE_AUTH_KEY',  'mHu;l1?iYR6p=JvibZ.LMUtQ1`9IN&I;;]>]})`@4{&_*nciKu)?D~nve%)/4wc!');
define('LOGGED_IN_KEY',    '_u6;syN3S8,aGJ9t;30tKe#O[F9|]67=9{%igP0W >`#H@Ykm+5S);$?]!qzfGDf');
define('NONCE_KEY',        'dJw]d$ kF*lK,>Z4*8sJ/e7Uv~dxbU<.YO38<4M2{5d~{:8l5P.ed&Q4&A9T9:lN');
define('AUTH_SALT',        'jfx|sF%8+[Rw22E.g=W UX<s>F7CxJrIK8={AJ=TaVgQ:K&2zt#o>F<Ru6Dsb3aK');
define('SECURE_AUTH_SALT', '5KB7t#:BHBt%:4_Tk @ivtFcFl6q G^uQ4[1 &K]_Ke2AlOt}kb}aUv_U%FQOW9?');
define('LOGGED_IN_SALT',   ')-Nc 3jHN!%h4N#M#iyniJ^X{dAe*]g^}rr}:&c|H Y/</qK$11v9P/b Sp?X,KM');
define('NONCE_SALT',       'p8sg|~_oF=nrUI.6ncAmRL=^^<da4{d9NYHHqW`!>L7_pg~oEwqOp0sdMRVt%}7h');

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
