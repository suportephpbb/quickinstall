<?php
/**
*
* qi [Português Brasileiro]
*
* @package quickinstall
* @version $Id$
* @copyright (c) 2007, 2008 eviL3
* @copyright (c) 2010 Jari Kanerva (tumba25)
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_QUICKINSTALL'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ABOUT_QUICKINSTALL' => 'Sobre phpBB3 QuickInstall',
	'ADMIN_EMAIL' => 'E-mail do administrador',
	'ADMIN_EMAIL_EXPLAIN' => 'E-mail do administrador para usar em seu(s) fórum(ns).',
	'ADMIN_NAME' => 'Nome de usuário do administrador',
	'ADMIN_NAME_EXPLAIN' => 'O nome de usuário do administrador padrão para usar em seu(s) fórum(ns). Isso pode ser alterando quando os fóruns forem criados.',
	'ADMIN_PASS' => 'Senha do administrador',
	'ADMIN_PASS_EXPLAIN' => 'A senha do administrador padrão para usar em seu(s) fórum(ns). Isso pode ser alterando quando os fóruns forem criados.',
	'ALT_ENV' => 'Ambiente alternativo',
	'AUTOMOD' => 'AutoMOD',
	'AUTOMOD_EXPLAIN' => 'Defina sim para instalar AutoMOD por padrão. Isso pode ser alterado quando você estiver criando um fórum.',
	'AUTOMOD_INSTALL' => 'Instalar AutoMOD',

	'BACK_TO_MAIN' => '<a href="%s">Voltar à página inicial</a>',
	'BACK_TO_MANAGE' => '<a href="%s">Voltar à página de gerenciamento</a>',
	'BOARD_CREATED' => 'Fórum criado com sucesso!',
	'BOARD_DBNAME' => 'Banco de dados e nome do diretório do fórum',
	'BOARD_DESC' => 'Descrição do site',
	'BOARD_EMAIL' => 'Endereço de e-mail do fórum',
	'BOARD_EMAIL_EXPLAIN' => 'Sender email for your created forums.',
	'BOARD_NAME' => 'Nome do site',
	'BOARDS_DELETED' => 'O fórum foi excluído com sucesso.',
	'BOARDS_DELETED_TITLE' => 'Fóruns excluídos',
	'BOARDS_DIR' => 'Diretório do fórum',
	'BOARDS_DIR_EXPLAIN' => 'O diretório onde seus fóruns serão criados. O PHP precisa ter permissões de escrita para este diretório.',
	'BOARDS_LIST' => 'Lista de fóruns',
	'BOARDS_NOT_WRITABLE' => 'O diretório do fórum não pode ser escrito.',

	'CACHE_NOT_WRITABLE' => 'O diretório cache não pode ser escrito.',
	'CHANGELOG' => 'Changelog',
	'CHECK_ALL' => 'Selecionar todos',
	'CONFIG_EMPTY' => 'A array de configuração estava vazia. Este é provavelmente um valor de relatório de erro.',
	'CONFIG_NOT_WRITABLE' => 'O arquivo qi_config.php não pode ser escrito.',
	'COOKIE_DOMAIN' => 'Domínio do cookie',
	'COOKIE_DOMAIN_EXPLAIN' => 'Geralmente é localhost.',
	'COOKIE_SECURE' => 'Cookie seguro',
	'COOKIE_SECURE_EXPLAIN' => 'Se o seu servidor estiver executando através de SSL, ative esta opção, caso contrário, deixe desativada. Se ativar isto sem que funcione via SSL, poderá resultar em erros no servidor durante os redirecionamentos.',
	'CREATE_ADMIN' => 'Criar administrador',
	'CREATE_ADMIN_EXPLAIN' => 'Defina como sim se você deseja criar um administrador, este não será um fundador. Este será o usuário tester_1.',
	'CREATE_MOD' => 'Criar moderador',
	'CREATE_MOD_EXPLAIN' => 'Defina como sim se você deseja criar um moderador global. Este será o usuário tester_1 ou tester_2 caso um administrador for selecionado.',

	'DB_EXISTS' => 'O banco de dados %s já existe.',
	'DB_PREFIX' => 'Prefixo do banco de dados',
	'DB_PREFIX_EXPLAIN' => 'Isto é adicionado antes de todos os nomes de banco de dados afim de evitar sobrescrever os banco de dados não utilizados pelo QuickInstall.',
	'DBHOST' => 'Servidor do banco de dados',
	'DBHOST_EXPLAIN' => 'Geralmente é localhost.',
	'DBMS' => 'Tipo de banco de dados',
	'DBMS_EXPLAIN' => 'O seu sistema de banco de dados. Se você não tem certeza defina-o como MySQL.',
	'DBPASSWD' => 'Senha do banco de dados',
	'DBPASSWD_EXPLAIN' => 'A senha para o seu usuário do banco de dados.',
	'DBPORT' => 'Porta do servidor do banco de dados',
	'DBPORT_EXPLAIN' => 'Pode ser deixando em branco.',
	'DBUSER' => 'Nome de usuário do banco de dados',
	'DBUSER_EXPLAIN' => 'Seu nome de usuário de banco de dados. Este precisa ser um usuário com permissões para criar novos banco de dados.',
	'DEFAULT' => 'padrão',
	'DEFAULT_ENV' => 'Ambiente padrão (última versão do phpBB)',
	'DEFAULT_LANG' => 'Idioma padrão',
	'DEFAULT_LANG_EXPLAIN' => 'Este idioma será usado para a criação dos fóruns.',
	'DELETE' => 'Excluir',
	'DELETE_FILES_IF_EXIST' => 'Excluir arquivos se eles existirem',
	'DIR_EXISTS' => 'O diretório %s já existe.',
	'DISABLED' => 'Desativado',
	'DROP_DB_IF_EXISTS' => 'Apagar banco de dados se ele já existir',

	'EMAIL_DOMAIN' => 'Domínio de Email',
	'EMAIL_DOMAIN_EXPLAIN' => 'O domínio de email para os usuário de teste. Seus emails serão tester_x@&lt;domain.com&gt;.',
	'EMAIL_ENABLE' => 'Envio de e-mails pelo painel:',
	'EMAIL_ENABLE_EXPLAIN' => 'Permite o envio de e-mails no fórum. Para um fórum de teste local esta opção geralmente esta desativada, a menos que você teste os emails.',
	'ENABLED' => 'Ativado',

	'GENERAL_ERROR' => 'Erro Geral',

	'IN_SETTINGS' => 'Gerencie as suas configurações do QuickInstall.',
	'INCLUDE_MODS' => 'Incluir MODs',
	'INCLUDE_MODS_EXPLAIN' => 'Selecione os diretórios apartir do diretório sources/mods/ nesta lista, os arquivos serão copiados para o diretório raiz do seu novo fórum, também sobrescreverá os arquivos antigos (assim você pode ter um fórum aqui, por exemplo). Se você selecionar “Nenhum”, ele não será usado (porque é chato desselecionar os itens).',
	'INSTALL_BOARD' => 'Instalar um fórum',
	'INSTALL_QI' => 'Instalar QuickInstall',
	'IS_NOT_VALID' => 'Não é válido',

	'LICENSE' => 'Licença?',
	'LICENSE_EXPLAIN' => 'Este script é licenciado sob os termos da <a href="license.txt">GNU General Public License version 2</a>. Isto devido ao grande uso de partes do código do phpBB, que é licenciado sob a mesma licença, e exige quaisquer modificações use-a também. Mas também por ser uma grande licença que mantém livre o software livre :).',
	'LOG_INSTALL_INSTALLED_QI'	=> '<strong>Instalado por phpBB Quickinstall versão %s</strong>',

	'MAKE_WRITABLE' => 'Tornar arquivos globais com permissão de escrita',
	'MAKE_WRITABLE_EXPLAIN' => 'Define os arquivo, config.php, e os diretórios globalmente com permissão de escrita por padrão. Isso pode ser alterado quando você estiver criando um fórum.',
	'MANAGE_BOARDS' => 'Gerenciar fóruns',
	'MAX' => 'Max',
	'MIGHT_TAKE_LONG' => '<strong>Atenção:</strong> A criação do fórum deve levar algum tempo, desde um minuto ou mais, então <strong>não</strong> envie o formulário duas vezes.',
	'MIN' => 'Min',

	'NEED_EMAIL_DOMAIN' => 'É preciso de um domínio de email para criar usuários de teste',
	'NEED_WRITABLE' => 'O QuickInstall precisa que os fóruns e os diretórios de cache estejam com permissão de escrita todo o tempo.<br />Somente o arquivo qi_config.php precisa estar com permissão de escrita para a instalação do QuickInstall.',
	'NO' => 'Não',
	'NO_ALT_ENV' => 'O ambiente alternativo especificado não existe.',
	'NO_AUTOMOD' => 'O AutoMOD não foi encontrado no diretório fonte. Você precisa baixar o AutoMOD e copiar o diretótio raiz para sources/automod, então renomeie root para automod.',
	'NO_BOARDS' => 'Você não possui fóruns.',
	'NO_DB' => 'Nenhum banco de dados selecionado.',
	'NO_IMPACT_WIN' => 'Esaa configuração não tem impacto em sistemas Windows anteriores ao Win7.',
	'NO_MODULE' => 'O módulo %s não pode ser carregado.',
	'NO_PASSWORD' => 'Sem senha',
	'NO_DBPASSWD_ERR' => 'Você definiu uma senha para o banco de dados e marcou como Sem senha. Você não pode <strong>ter</strong> e <strong>não ter</strong>',
	'NONE' => 'Nenhum',
	'NUM_CATS' => 'Número de categorias',
	'NUM_CATS_EXPLAIN' => 'O número de categorias para criar.',
	'NUM_FORUMS' => 'Número de fóruns',
	'NUM_FORUMS_EXPLAIN' => 'O número de fóruns para criar, que serão espalhados igualmente entre as categorias criadas.',
	'NUM_NEW_GROUP' => 'Usuários registrados recentemente',
	'NUM_NEW_GROUP_EXPLAIN' => 'O número de usuários recentemente para inserir no grupo.<br />Se esse valor for maior que o número de usuários, então todos os novos usuários serão do grupo Usuários registrados recentemente.',
	'NUM_REPLIES' => 'Número de respostas',
	'NUM_REPLIES_EXPLAIN' => 'O número de respostas. Cada tópico receberá um valor aleatório entre o máximo e o mínimo de respostas.',
	'NUM_TOPICS' => 'Número de tópicos',
	'NUM_TOPICS_EXPLAIN' => 'O número de tópicos para criar em cada fórum. Cada fórum receberá um valor aleatório entre o máximo e o mínimo de tópicos.',
	'NUM_USERS' => 'Número de usuários',
	'NUM_USERS_EXPLAIN' => 'O número de usuários com qual irá povoar seu novo fórum.<br />Eles receberão o nome de usuário Tester_x (x é 1 para num_users). Todos eles receberão a senha "123456"',

	'ONLY_LOCAL' => 'Atenção: O QuickInstall tem como objetivo ser utilizado localmente.<br />Não deve ser usado em um servidor web acessível através do Internet.',
	'OPTIONS' => 'Opções',
	'OPTIONS_ADVANCED' => 'Opções Avançadas',

	'POPULATE' => 'Fórum povoado',
	'POPULATE_OPTIONS' => 'Opções de povoamento',
	'POPULATE_MAIN_EXPLAIN' => 'Usuários : tester x, Senha: 123456',
	'POPULATE_EXPLAIN' => 'Povoa o fórum com o número de usuários, fóruns, mensagens e tópicos que você especificar abaixo. Note que uma grande quantidade de usuários, fóruns, mensagens e tópicos que você desejar, pode prolongar o tempo de criação do fórum.<br />Todas essas configurações podem ser alteradas quando você estiver criando um fórum.',

	'QI_ABOUT' => 'Sobre',
	'QI_ABOUT_ABOUT' => 'Fique bem e seja feliz.',
	'QI_DST' => 'Horário de verão',
	'QI_DST_EXPLAIN' => 'Você deseja o horário de verão ativado ou desativado?',
	'QI_LANG' => 'Idioma do QuickInstall',
	'QI_LANG_EXPLAIN' => 'O idioma que o QuickInstall deve usar. Precisa estar em um diretório com esse nome em language/. Esse idioma também será usado como idioma padrão para os seus fóruns e ele existir em sources/phpBB3/language/.',
	'QI_MAIN' => 'Índice',
	'QI_MAIN_ABOUT' => 'Instale um novo fórum aqui.<br /><br />“Banco de dados e nome do diretório do fórum” é o único campo que precisa ser preenchido, os outros são preenchidos com valores padrões do arquivo <em>includes/qi_config.php</em>.<br /><br />Clique em “Opções Avançadas” para mais configurações.',
	'QI_MANAGE' => 'Gerenciar fóruns',
	'QI_MANAGE_ABOUT' => 'o_O',
	'QI_TZ' => 'Fuso horário',
	'QI_TZ_EXPLAIN' => 'O seu fuso horário. Será o fuso horário padrão para os fóruns criados. -1, 0, 1 etc.',
	'QUICKINSTALL' => 'phpBB QuickInstall',

	'REDIRECT' => 'Redirecionar',
	'REDIRECT_EXPLAIN' => 'Defina sim para redirecionar para os novos fóruns por padrão. Isso pode ser alterado quando você estiver criando um fórum.',
	'REDIRECT_BOARD' => 'Redirecionar para o novo fórum',
	'REQUIRED' => 'é exigido',
	'RESET' => 'Resetar',

	'SELECT' => 'Selecionar',
	'SETTINGS' => 'Configurações',
	'SETTINGS_FAILURE' => 'Houve erros, veja na caixa abaixo.',
	'SETTINGS_SUCCESS' => 'Suas configurações foram salvas com sucesso.',
	'SERVER_NAME' => 'Nome do servidor',
	'SERVER_NAME_EXPLAIN' => 'Geralmente deve ser localhost já que o QuickInstall <strong>não</strong> não visa por servidores públicos.',
	'SERVER_PORT' => 'Porta do servidor',
	'SERVER_PORT_EXPLAIN' => 'Geralmente é 80.',
	'SITE_DESC' => 'Descrição do site',
	'SITE_DESC_EXPLAIN' => 'A descrição padrão para seu(s) fórum(ns). Isso pode ser alterado quando você estiver criando um fórum.',
	'SITE_NAME' => 'Nome do site',
	'SITE_NAME_EXPLAIN' => 'O nome do site padrão que será usado em seu(s) fórum(ns). Isso pode ser alterado quando você estiver criando um fórum.',
	'SMTP_AUTH' => 'Método de autenticação de SMTP',
	'SMTP_AUTH_EXPLAIN' => 'Usado somente para definir um nome de usuário/senha.',
	'SMTP_DELIVERY' => 'Usar um servidor de SMTP para e-mails',
	'SMTP_DELIVERY_EXPLAIN' => 'Selecione "Sim" se você deseja ou precisa enviar e-mails através de um servidor nomeado ao invés de uma função de e-mail local.',
	'SMTP_HOST' => 'Endereço do servidor de SMTP',
	'SMTP_HOST_EXPLAIN' => 'O endereço do servidor de SMTP que desejar utilizar',
	'SMTP_PASS' => 'Senha do SMTP',
	'SMTP_PASS_EXPLAIN' => 'Somente insira a senha se seu servidor SMTP exigi-la.',
	'SMTP_PORT' => 'Porta do servidor de SMTP',
	'SMTP_PORT_EXPLAIN' => 'Somente mude isso se você sabe que seu servidor SMTP está em uma porta diferente.',
	'SMTP_USER' => 'Nome de usuário do SMTP',
	'SMTP_USER_EXPLAIN' => 'Somente insira o nome de usuário se seu servidor SMTP exigi-lo.',
	'STAR_MANDATORY' => '* = obrigatório',
	'SUBMIT' => 'Enviar',
	'SUBSILVER' => 'Instalar Subsilver2',
	'SUBSILVER_EXPLAIN' => 'Selecione se você deseja que o estilo Subsilver2 seja instalado e se você deseja que seja o estilo padrão. Isso pode ser alterado quando você estiver criando um fórum.',
	'SUCCESS' => 'Sucesso',

	'TABLE_PREFIX' => 'Prefixo das tabelas no banco de dados',
	'TABLE_PREFIX_EXPLAIN' => 'O prefixo da tabela que será usado em seu(s) fórum(ns). Você pode alterar isso nas opções avançadas quando estiver criando novos fóruns.',
	'TEST_CAT_NAME' => 'Categoria de teste %d',
	'TEST_FORUM_NAME' => 'Fórum de teste %d',
	'TEST_POST_START' => 'Mensagem de teste %d', // This will be on the first line in each post and then filled with lorem ipsum.
	'TEST_TOPIC_TITLE' => 'Tópico de teste %d',

	'UNCHECK_ALL' => 'Desselecionar todos',
	'UP_TO_DATE' => 'Big brother avisa que você está atualizado.',
	'UP_TO_DATE_NOT' => 'Big brother avisa que você não está atualizado.',
	'UPDATE_CHECK_FAILED' => 'Big brother’s falhou em verificar a versão.',
	'UPDATE_TO' => '<a href="%1$s">Atualize para a versão %2$s.</a>',

	'YES' => 'Sim',

	'VERSION_CHECK' => 'Big brother verificado de versão',
	'VISIT_BOARD' => '<a href="%s">Visite o fórum</a>',

	'WHAT' => 'O que é?',
	'WHAT_EXPLAIN' => 'O phpBB3 QuickInstall é um script para uma rápida instalação do phpBB. Bem óbvio... ;-)',
	'WHO_ELSE' => 'O que mais?',
	'WHO_ELSE_EXPLAIN' => '<ul><li>' . implode('</li><li>', array(
		'Créditos para a equipe phpBB, especialmente o Development Team que criou parte desse excelente software.',
		'Obrigado ao phpBB.com MOD Team (especialmente ao Josh, aka “A_Jelly_Doughnut”) pelo AutoMOD.',
		'Obrigado ao Mike TUMS pelo belo logo!',
		'Obrigado aos beta testers!',
		'Obrigado a comunidade phpBB, incluindo phpBB.com, startrekguide.com e phpBBModders.net!',
	)) . '</li></ul>',
	'WHO_WHEN' => 'Quem? Quando?',
	'WHO_WHEN_EXPLAIN' => 'O phpBB3 QuickInstall foi originalmente criado por Igor “eviL&lt;3” Wiedler no verão de 2007. Foi reescrito em parte por ele em março 2008.<br />Desde Março de 2010 este projeto é mantido por Jari “Tumba25” Kanerva.',
	'WHY' => 'Por quê?',
	'WHY_EXPLAIN' => 'Assim como no phpBB2, se você cria muitas modificações, você não pode pôr todas as MODs numa única instalação do phpBB. Sendo assim, o melhor é possuir instalações separadas. Então o problema é ter que passar pelo processo de copiar os arquivos e repetir as etapas para instalação de cada vez. Para acelerar este processo, nasceu o quickinstall.',
));

?>