<?php
/**
* @version $Id: english.php 6087 2006-12-24 18:59:57Z robs $
* @package Joomla
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_VALID_MOS' ) or die( 'Restricted access' );
// Nota da página do site encontrada
define( '_404', 'Lamentamos, mas a página que você solicitou não foi encontrada.' );
define( '_404_RTS', 'Retornar ao site' );

define( '_SYSERR1', 'O adaptador de banco de dados não está disponível' );
define( '_SYSERR2', 'Não foi possível conectar ao servidor de banco de dados' );
define( '_SYSERR3', 'Não foi possível conectar ao banco de dados' );

// comum
DEFINE('_LANGUAGE','en');
DEFINE('_NOT_AUTH','Você não está autorizado a visualizar este recurso.');
DEFINE('_DO_LOGIN','Você precisa fazer login.');
DEFINE('_VALID_AZ09',"Por favor insira um %s válido. Sem espaços, mais de %d caracteres e contém 0-9,a-z,A-Z");
DEFINE('_VALID_AZ09_USER',"Por favor insira um %s válido. Mais de %d caracteres e contenha 0-9,a-z,A-Z");
DEFINE('_CMN_YES','Sim');
DEFINE('_CMN_NO','Não');
DEFINE('_CMN_SHOW','Mostrar');
DEFINE('_CMN_HIDE','Ocultar');

DEFINE('_CMN_NAME','Nome');
DEFINE('_CMN_DESCRIPTION','Descrição');
DEFINE('_CMN_SAVE','Salvar');
DEFINE('_CMN_APPLY','Aplicar');
DEFINE('_CMN_CANCEL','Cancelar');
DEFINE('_CMN_PRINT','Imprimir');
DEFINE('_CMN_PDF','PDF');
DEFINE('_CMN_EMAIL','E-mail');
DEFINE('_ICON_SEP','|');
DEFINE('_CMN_PARENT','Pai');
DEFINE('_CMN_ORDERING','Ordenação');
DEFINE('_CMN_ACCESS','Nível de acesso');
DEFINE('_CMN_SELECT','Selecionar');

DEFINE('_CMN_NEXT','Próximo');
DEFINE('_CMN_NEXT_ARROW',"&gt;&gt;");
DEFINE('_CMN_PREV','Anterior');
DEFINE('_CMN_PREV_ARROW',"&lt;&lt; ");

DEFINE('_CMN_SORT_NONE','Sem classificação');
DEFINE('_CMN_SORT_ASC','Classificar Crescente');
DEFINE('_CMN_SORT_DESC','Classificar Decrescente');

DEFINE('_CMN_NEW','Novo');
DEFINE('_CMN_NONE','Nenhum');
DEFINE('_CMN_LEFT','Esquerda');
DEFINE('_CMN_RIGHT','Direito');
DEFINE('_CMN_CENTER','Centro');
DEFINE('_CMN_ARCHIVE','Arquivo');
DEFINE('_CMN_UNARCHIVE','Desarquivar');
DEFINE('_CMN_TOP','Topo');
DEFINE('_CMN_BOTTOM','Inferior');

DEFINE('_CMN_PUBLISHED','Publicado');
DEFINE('_CMN_UNPUBLISHED','Não publicado');

DEFINE('_CMN_EDIT_HTML','Editar HTML');
DEFINE('_CMN_EDIT_CSS','Editar CSS');

DEFINE('_CMN_DELETE','Excluir');

DEFINE('_CMN_FOLDER','Pasta');
DEFINE('_CMN_SUBFOLDER','Subpasta');
DEFINE('_CMN_OPTIONAL','Opcional');
DEFINE('_CMN_REQUIRED','Obrigatório');

DEFINE('_CMN_CONTINUE','Continuar');

DEFINE('_STATIC_CONTENT','Conteúdo Estático');

DEFINE('_CMN_NEW_ITEM_LAST','Novos itens são padronizados para o último lugar. A ordem pode ser alterada após este item ser salvo.');
DEFINE('_CMN_NEW_ITEM_FIRST','Novos itens são padronizados para o primeiro lugar. A ordem pode ser alterada após este item ser salvo.');
DEFINE('_LOGIN_INCOMPLETE','Por favor preencha os campos de nome de usuário e senha.');
DEFINE('_LOGIN_BLOCKED','Seu login foi bloqueado. Por favor entre em contato com o administrador.');
DEFINE('_LOGIN_INCORRECT','Nome de usuário ou senha incorretos. Tente novamente.');
DEFINE('_LOGIN_NOADMINS','Você não pode fazer login. Não há administradores configurados.');
DEFINE('_CMN_JAVASCRIPT','!Atenção! JavaScript deve estar habilitado para operação adequada.');

DEFINE('_NEW_MESSAGE','Uma nova mensagem privada chegou');
DEFINE('_MESSAGE_FAILED','O usuário bloqueou sua caixa de correio. Mensagem falhou.');

DEFINE('_CMN_IFRAMES', 'Esta opção não funcionará corretamente. Infelizmente, seu navegador não suporta Inline Frames');

DEFINE('_INSTALL_3PD_WARN','Aviso: A instalação de extensões de terceiros pode comprometer a segurança do seu servidor. A atualização da instalação do Joomla! não atualizará suas extensões de terceiros.<br />Para obter mais informações sobre como manter seu site seguro, consulte o <a href="http://forum.joomla.org/index.php/board,267.0.html" target="_blank" style="color: blue; text-decoration: underline;">Fórum de Segurança do Joomla! </a>.');
DEFINE('_INSTALL_WARN','Para sua segurança, remova completamente o diretório de instalação, incluindo todos os arquivos e subpastas - e atualize esta página.');
DEFINE('_TEMPLATE_WARN','<font color=\"red\"><b>Arquivo de modelo não encontrado! Procurando por modelo:</b></font>');
DEFINE('_NO_PARAMS','Não há parâmetros para este item');
DEFINE('_HANDLER','Handler não definido para o tipo');

/** mambots */
DEFINE('_TOC_JUMPTO','Índice de Artigo');

/**  contente */
DEFINE('_READ_MORE','Leia mais...');
DEFINE('_READ_MORE_REGISTER','Registre-se para ler mais...');
DEFINE('_MORE','Mais...');
DEFINE('_ON_NEW_CONTENT', "Um novo item de conteúdo foi enviado por [ %s ] intitulado [ %s ] da Seção [ %s ] e Categoria [ %s ]" );
DEFINE('_SEL_CATEGORY','- Selecionar categoria -');
DEFINE('_SEL_SECTION','- Selecionar Seção -');
DEFINE('_SEL_AUTHOR','- Selecione Autor -');
DEFINE('_SEL_POSITION','- Selecione Posição -');
DEFINE('_SEL_TYPE','- Selecione o tipo -');
DEFINE('_EMPTY_CATEGORY','Esta categoria está vazia no momento');
DEFINE('_EMPTY_BLOG','Não há itens para exibir');
DEFINE('_NOT_EXIST','A página que você está tentando acessar não existe.<br />Por favor selecione uma página no menu principal.');
DEFINE('_SUBMIT_BUTTON','Enviar');

/** classes/html/modules.php */
DEFINE('_BUTTON_VOTE','Voto');
DEFINE('_BUTTON_RESULTS','Resultados');
DEFINE('_USERNAME','Nome de usuário');
DEFINE('_LOST_PASSWORD','Esqueceu a senha?');
DEFINE('_SENHA','Senha');
DEFINE('_BUTTON_LOGIN','Login');
DEFINE('_BUTTON_LOGOUT','Sair');
DEFINE('_NO_ACCOUNT','Ainda não tem conta?');
DEFINE('_CREATE_ACCOUNT','Cadastrar');
DEFINE('_VOTE_POOR','Ruim');
DEFINE('_VOTE_BEST','Melhor');
DEFINE('_USER_RATING','Avaliação do usuário');
DEFINE('_RATE_BUTTON','Taxa');
DEFINE('_REMEMBER_ME','Lembrar de mim');

/** contato.php */
DEFINE('_ENQUIRY','Consulta');
DEFINE('_ENQUIRY_TEXT','Este é um e-mail de consulta via %s de:');
DEFINE('_COPY_TEXT','Esta é uma cópia da seguinte mensagem que você enviou para %s via %s ');
DEFINE('_COPY_SUBJECT','Cópia de: ');
DEFINE('_THANK_MESSAGE','Obrigado pelo seu e-mail');
DEFINE('_CLOAKING','Este endereço de e-mail está protegido contra spambots, você precisa ter o JavaScript habilitado para visualizá-lo');
DEFINE('_CONTACT_HEADER_NAME','Nome');
DEFINE('_CONTACT_HEADER_POS','Posição');
DEFINE('_CONTACT_HEADER_EMAIL','E-mail');
DEFINE('_CONTACT_HEADER_PHONE','Telefone');
DEFINE('_CONTACT_HEADER_FAX','Fax');
DEFINE('_CONTACTS_DESC','A lista de contatos deste site.');
DEFINE('_CONTACT_MORE_THAN','Você não pode inserir mais de um endereço de e-mail.');

/** classes/html/contact.php */
DEFINE('_CONTACT_TITLE','Contato');
DEFINE('_EMAIL_DESCRIPTION','Enviar um e-mail para este contato:');
DEFINE('_NAME_PROMPT','Digite seu nome:');
DEFINE('_EMAIL_PROMPT','E-mail:');
DEFINE('_MESSAGE_PROMPT',' Digite sua mensagem:');
DEFINE('_SEND_BUTTON','Enviar');
DEFINE('_CONTACT_FORM_NC','Por favor verifique se o formulário está completo e válido.');
DEFINE('_CONTACT_TELEPHONE','Telefone: ');
DEFINE('_CONTACT_MOBILE','Celular: ');
DEFINE('_CONTACT_FAX','Fax: ');
DEFINE('_CONTACT_EMAIL','E-mail: ');
DEFINE('_CONTACT_NAME','Nome: ');
DEFINE('_CONTACT_POSITION','Posição: ');
DEFINE('_CONTACT_ADDRESS','Endereço: ');
DEFINE('_CONTACT_MISC','Informações: ');
DEFINE('_CONTACT_SEL','Selecionar contato:');
DEFINE('_CONTACT_NONE','Não há detalhes de contato listados.');
DEFINE('_CONTACT_ONE_EMAIL','Você não pode inserir mais de um endereço de e-mail.');
DEFINE('_EMAIL_A_COPY','Envie uma cópia desta mensagem por e-mail para seu próprio endereço');
DEFINE('_CONTACT_DOWNLOAD_AS','Baixar informações como um');
DEFINE('_VCARD','VCard');

/** navegação na página */
DEFINE('_PN_LT','&lt;');
DEFINE('_PN_RT','&gt;');
DEFINE('_PN_PAGE','Página');
DEFINE('_PN_OF','de');
DEFINE('_PN_START','Iniciar');
DEFINE('_PN_PREVIOUS','Anterior');
DEFINE('_PN_NEXT','Próximo');
DEFINE('_PN_END','Fim');
DEFINE('_PN_DISPLAY_NR','Exibir #');
DEFINE('_PN_RESULTS','Resultados');

/** enviar e-mail para amigo */
DEFINE('_EMAIL_TITLE','Enviar e-mail para um amigo');
DEFINE('_EMAIL_FRIEND','Envie isto por e-mail para um amigo.');
DEFINE('_EMAIL_FRIEND_ADDR',"E-mail do seu amigo:");
DEFINE('_EMAIL_SEU_NOME','Seu Nome:');
DEFINE('_EMAIL_YOUR_MAIL','Seu e-mail:');
DEFINE('_SUBJECT_PROMPT',' Assunto da mensagem:');
DEFINE('_BUTTON_SUBMIT_MAIL','Enviar e-mail');
DEFINE('_BUTTON_CANCEL','Cancelar');
DEFINE('_EMAIL_ERR_NOINFO','Você deve inserir seu e-mail válido e o e-mail válido para enviar.');
DEFINE('_EMAIL_MSG','A seguinte página do site "%s" foi enviada a você por %s ( %s ).

Você pode acessá-lo no seguinte URL:
%s');
DEFINE('_EMAIL_INFO','Item enviado por');
DEFINE('_EMAIL_SENT','Este item foi enviado para');
DEFINE('_PROMPT_CLOSE','Fechar Janela');

/** classes/html/content.php */
DEFINE('_AUTHOR_BY', 'Contribuído por');
DEFINE('_WRITTEN_BY', 'Escrito por');
DEFINE('_LAST_UPDATED', 'Última atualização');
DEFINE('_BACK','[Voltar]');
DEFINE('_LEGEND','Legenda');
DEFINE('_DATA','Data');
DEFINE('_ORDER_DROPDOWN','Ordem');
DEFINE('_HEADER_TITLE','Título do item');
DEFINE('_HEADER_AUTHOR','Autor');
DEFINE('_HEADER_SUBMITTED','Enviado');
DEFINE('_HEADER_HITS','Acertos');
DEFINE('_E_EDIT','Editar');
DEFINE('_E_ADD','Adicionar');
DEFINE('_E_WARNUSER','Cancelar ou salvar a alteração atual');
DEFINE('_E_WARNTITLE','O item de conteúdo deve ter um título');
DEFINE('_E_WARNTEXT','Item de conteúdo deve ter texto de introdução');
DEFINE('_E_WARNCAT','Por favor selecione uma categoria');
DEFINE('_E_CONTENT','Conteúdo');
DEFINE('_E_TITLE','Título:');
DEFINE('_E_CATEGORY','Categoria:');
DEFINE('_E_INTRO','Texto de introdução');
DEFINE('_E_MAIN','Texto Principal');
DEFINE('_E_MOSIMAGE','INSERT {mosimagem}');
DEFINE('_E_IMAGES','Imagens');
DEFINE('_E_GALLERY_IMAGES','Imagens da Galeria');
DEFINE('_E_CONTENT_IMAGES','Imagens de Conteúdo');
DEFINE('_E_EDIT_IMAGE','Editar Imagem');
DEFINE('_E_NO_IMAGE','Sem imagem');
DEFINE('_E_INSERT','Inserir');
DEFINE('_E_UP','Para cima');
DEFINE('_E_DOWN','Para baixo');
DEFINE('_E_REMOVE','Remover');
DEFINE('_E_SOURCE','Fonte:');
DEFINE('_E_ALIGN','Alinhar:');
DEFINE('_E_ALT','Texto alternativo:');
DEFINE('_E_BORDER','Borda:');
DEFINE('_E_CAPTION','Legenda');
DEFINE('_E_CAPTION_POSITION','Posição da legenda');
DEFINE('_E_CAPTION_ALIGN','Alinhar legenda');
DEFINE('_E_CAPTION_WIDTH','Largura da legenda');
DEFINE('_E_APPLY','Aplicar');
DEFINE('_E_PUBLISHING','Publicação');
DEFINE('_E_STATE','Estado:');
DEFINE('_E_AUTHOR_ALIAS','Alias do Autor:');
DEFINE('_E_ACCESS_LEVEL','Nível de acesso:');
DEFINE('_E_ORDERING','Ordenação:');
DEFINE('_E_START_PUB','Iniciar publicação:');
DEFINE('_E_FINISH_PUB','Terminar Publicação:');
DEFINE('_E_SHOW_FP','Mostrar na primeira página:');
DEFINE('_E_HIDE_TITLE','Ocultar título do item:');
DEFINE('_E_METADATA','Metadados');
DEFINE('_E_M_DESC','Descrição:');
DEFINE('_E_M_KEY','Palavras-chave:');
DEFINE('_E_SUBJECT','Assunto:');
DEFINE('_E_EXPIRES','Data de Expiração:');
DEFINE('_E_VERSION','Versão:');
DEFINE('_E_ABOUT','Sobre');
DEFINE('_E_CREATED','Criado:');
DEFINE('_E_LAST_MOD','Última modificação:');
DEFINE('_E_HITS','Acertos:');
DEFINE('_E_SAVE','Salvar');
DEFINE('_E_CANCEL','Cancelar');
DEFINE('_E_REGISTERED','Apenas usuários registrados');
DEFINE('_E_ITEM_INFO','Informações do Item');
DEFINE('_E_ITEM_SAVED','Item salvo com sucesso.');
DEFINE('_ITEM_PREVIOUS','&lt; Anterior');
DEFINE('_ITEM_NEXT','Próximo &gt;');
DEFINE('_KEY_NOT_FOUND','Chave não encontrada');


/** conteúdo.php */
DEFINE('_SECTION_ARCHIVE_EMPTY','Atualmente não há entradas arquivadas para esta seção, volte mais tarde');
DEFINE('_CATEGORY_ARCHIVE_EMPTY','Atualmente não há entradas arquivadas para esta categoria, volte mais tarde');
DEFINE('_HEADER_SECTION_ARCHIVE','Arquivos de Seção');
DEFINE('_HEADER_CATEGORY_ARCHIVE','Arquivos de Categoria');
DEFINE('_ARCHIVE_SEARCH_FAILURE','Não há entradas arquivadas para %s %s'); // os valores são mês e depois ano
DEFINE('_ARCHIVE_SEARCH_SUCCESS','Aqui estão as entradas arquivadas para %s %s'); // os valores são mês e depois ano
DEFINE('_FILTER','Filtro');
DEFINE('_ORDER_DROPDOWN_DA','Data asc');
DEFINE('_ORDER_DROPDOWN_DD','Data desc');
DEFINE('_ORDER_DROPDOWN_TA','Título asc');
DEFINE('_ORDER_DROPDOWN_TD','Título desc');
DEFINE('_ORDER_DROPDOWN_HA','Acessos asc');
DEFINE('_ORDER_DROPDOWN_HD','Desc de acessos');
DEFINE('_ORDER_DROPDOWN_AUA','Autor asc');
DEFINE('_ORDER_DROPDOWN_AUD','Desc do autor');
DEFINE('_ORDER_DROPDOWN_O','Ordenação');

/** enquete.php */
DEFINE('_ALERT_ENABLED','Os cookies devem estar habilitados!');
DEFINE('_ALREADY_VOTE','Você já votou neste item hoje.');
DEFINE('_NO_SELECTION','Nenhuma seleção foi feita, por favor tente novamente');
DEFINE('_THANKS','Obrigado pelo seu voto!');
DEFINE('_SELECT_POLL','Selecionar enquete da lista');

/** classes/html/poll.php */
DEFINE('_JAN','Janeiro');
DEFINE('_FEV','Fevereiro');
DEFINE('_MAR','Março');
DEFINE('_APR','Abril');
DEFINE('_MAIO','Maio');
DEFINE('_JUN','Junho');
DEFINE('_JUL','Julho');
DEFINE('_AGO','Agosto');
DEFINE('_SET','Setembro');
DEFINE('_OCT','Outubro');
DEFINE('_NOV','Novembro');
DEFINE('_DEC','Dezembro');
DEFINE('_POLL_TITLE','Enquete - Resultados');
DEFINE('_SURVEY_TITLE','Título da enquete:');
DEFINE('_NUM_VOTERS','Número de Eleitores');
DEFINE('_FIRST_VOTE','Primeira Votação');
DEFINE('_LAST_VOTE','Última Votação');
DEFINE('_SEL_POLL','Selecionar enquete:');
DEFINE('_NO_RESULTS','Não há resultados para esta enquete.');

/** registro.php */
DEFINE('_ERROR_PASS','Desculpe, nenhum usuário correspondente foi encontrado');
DEFINE('_NEWPASS_MSG','A conta de usuário $checkusername tem este e-mail associado a ela.\n'
.'Um usuário web de $mosConfig_live_site acaba de solicitar o envio de uma nova senha.\n\n'
.' Sua nova senha é: $newpass\n\nSe você não pediu isso, não se preocupe.'
.' Você está vendo esta mensagem, não eles. Se isso foi um erro, basta fazer login com seu'
.' nova senha e depois altere sua senha para o que você gostaria que fosse.');
DEFINE('_NEWPASS_SUB','$_sitename :: Nova senha para - $checkusername');
DEFINE('_NEWPASS_SENT','Nova senha de usuário criada e enviada!');
DEFINE('_REGWARN_NAME','Por favor, digite seu nome.');
DEFINE('_REGWARN_UNAME','Por favor insira um nome de usuário.');
DEFINE('_REGWARN_MAIL','Por favor insira um endereço de e-mail válido.');
DEFINE('_REGWARN_PASS','Por favor insira uma senha válida. Sem espaços, mais de 6 caracteres e contendo 0-9,a-z,A-Z');
DEFINE('_REGWARN_VPASS1','Verifique a senha.');
DEFINE('_REGWARN_VPASS2','Senha e verificação não coincidem, tente novamente.');
DEFINE('_REGWARN_INUSE','Este nome de usuário/senha já está em uso. Por favor, tente outro.');
DEFINE('_REGWARN_EMAIL_INUSE', 'Este e-mail já está cadastrado. Caso você tenha esquecido a senha clique em "Perdeu sua senha" e uma nova senha será enviada para você.');
DEFINE('_SEND_SUB','Detalhes da conta %s em %s');
DEFINE('_USEND_MSG_ACTIVATE', 'Olá %s,

Obrigado por se registrar em %s. Sua conta está criada e deve ser ativada antes de poder usá-la.
Para ativar a conta clique no link a seguir ou copie e cole em seu navegador:
%s

Após a ativação, você poderá fazer login em %s usando o seguinte nome de usuário e senha:

Nome de usuário - %s
Senha - %s');
DEFINE('_USEND_MSG', "Olá %s,

Obrigado por se registrar em %s.

Agora você pode fazer login em %s usando o nome de usuário e senha com os quais se registrou.");
DEFINE('_USEND_MSG_NOPASS','Olá $name,\n\nVocê foi adicionado como usuário ao $mosConfig_live_site.\n'
.'Você pode fazer login em $mosConfig_live_site com o nome de usuário e senha com os quais se registrou.\n\n'
.'Por favor, não responda a esta mensagem, pois ela é gerada automaticamente e é apenas para fins informativos\n');
DEFINE('_ASEND_MSG','Olá %s,

Um novo usuário se registrou em %s.
Este e-mail contém seus detalhes:

Nome - %s
E-mail - %s
Nome de usuário - %s

Por favor, não responda a esta mensagem, pois ela é gerada automaticamente e é apenas para fins informativos');
DEFINE('_REG_COMPLETE_NOPASS','<div class="componentheading">Registro concluído!</div><br />&nbsp;&nbsp;'
.'Agora você pode fazer login.<br />&nbsp;&nbsp;');
DEFINE('_REG_COMPLETE', '<div class="componentheading">Registro concluído!</div><br />Agora você pode fazer login.');
DEFINE('_REG_COMPLETE_ACTIVATE', '<div class="componentheading">Registro concluído!</div><br />Sua conta foi criada e o link de ativação foi enviado para o endereço de e-mail que você digitou. Observe que você deve ative a conta clicando no link de ativação quando receber o e-mail antes de fazer o login.');
DEFINE('_REG_ACTIVATE_COMPLETE', '<div class="componentheading">Ativação concluída!</div><br />Sua conta foi ativada com sucesso. Agora você pode fazer login usando o nome de usuário e senha que você escolheu durante o registro.') ;
DEFINE('_REG_ACTIVATE_NOT_FOUND', '<div class="componentheading">Link de ativação inválido!</div><br />Não existe tal conta em nosso banco de dados ou a conta já foi ativada.');
DEFINE('_REG_ACTIVATE_FAILURE', '<div class="componentheading">Falha na ativação!</div><br />O sistema não conseguiu ativar sua conta, entre em contato com o administrador do site.');

/** classes/html/registration.php */
DEFINE('_PROMPT_PASSWORD','Perdeu sua senha?');
DEFINE('_NEW_PASS_DESC','Por favor, digite seu nome de usuário e endereço de e-mail e clique no botão Enviar Senha.<br />'
.'Você receberá uma nova senha em breve. Use esta nova senha para acessar o site.');
DEFINE('_PROMPT_UNAME','Nome de usuário:');
DEFINE('_PROMPT_EMAIL','Endereço de e-mail:');
DEFINE('_BUTTON_SEND_PASS','Enviar senha');
DEFINE('_REGISTER_TITLE','Registro');
DEFINE('_REGISTER_NAME','Nome:');
DEFINE('_REGISTER_UNAME','Nome de usuário:');
DEFINE('_REGISTER_EMAIL','E-mail:');
DEFINE('_REGISTER_PASS','Senha:');
DEFINE('_REGISTER_VPASS','Verificar senha:');
DEFINE('_REGISTER_REQUIRED','Campos marcados com asterisco (*) são obrigatórios.');
DEFINE('_BUTTON_SEND_REG','Enviar Cadastro');
DEFINE('_SENDING_PASSWORD','Sua senha será enviada para o endereço de e-mail acima.<br />Depois de receber sua'
.' nova senha você pode fazer login e alterá-la.');

/** classes/html/search.php */
DEFINE('_SEARCH_TITLE','Pesquisar');
DEFINE('_PROMPT_KEYWORD','Palavra-chave de pesquisa');
DEFINE('_SEARCH_MATCHES','%d correspondências retornadas');
DEFINE('_CONCLUSION','Total de $totalRows resultados encontrados. Procure por [ <b>$searchword</b> ] com');
DEFINE('_NOKEYWORD','Nenhum resultado encontrado');
DEFINE('_IGNOREKEYWORD','Uma ou mais palavras comuns foram ignoradas na busca');
DEFINE('_SEARCH_ANYWORDS','Qualquer palavra');
DEFINE('_SEARCH_ALLWORDS','Todas as palavras');
DEFINE('_SEARCH_PHRASE','Frase exata');
DEFINE('_SEARCH_NEWEST','Mais recentes primeiro');
DEFINE('_SEARCH_OLDEST','O mais antigo primeiro');
DEFINE('_SEARCH_POPULAR','Mais populares');
DEFINE('_SEARCH_ALPHABETICAL','Alfabético');
DEFINE('_SEARCH_CATEGORY','Seção/Categoria');
DEFINE('_SEARCH_MESSAGE','O termo de pesquisa deve ter no mínimo 3 caracteres e no máximo 20 caracteres');
DEFINE('_SEARCH_ARCHIVED','Arquivado');
DEFINE('_SEARCH_CATBLOG','Categoria Blog');
DEFINE('_SEARCH_CATLIST','Lista de categorias');
DEFINE('_SEARCH_NEWSFEEDS','Feeds de notícias ');
DEFINE('_SEARCH_SECLIST','Lista de Seções');
DEFINE('_SEARCH_SECBLOG','Seção Blog');


/** modelos/*.php */
DEFINE('_ISO','charset=iso-8859-1');
DEFINE('_DATE_FORMAT','l, F d Y'); //Usa o formato de comando DATE do PHP - Depreciado
/**
* Modifique esta linha para refletir como você deseja que a data apareça em seu site
*
*por exemplo. DEFINE("_DATE_FORMAT_LC","%A, %d %B %Y %H:%M"); //Usa o formato de comando strftime do PHP
*/
DEFINE('_DATE_FORMAT_LC',"%A, %d %B %Y"); //Usa o formato de comando strftime do PHP
DEFINE('_DATE_FORMAT_LC2',"%A, %d %B %Y %H:%M");
DEFINE('_SEARCH_BOX','pesquisar...');
DEFINE('_NEWSFLASH_BOX','Notícias!');
DEFINE('_MAINMENU_BOX','Menu Principal');

/** classes/html/usermenu.php */
DEFINE('_UMENU_TITLE','Menu Usuário');
DEFINE('_HI','Olá, ');

/** usuário.php */
DEFINE('_SAVE_ERR','Por favor preencha todos os campos.');
DEFINE('_THANK_SUB','Obrigado pelo seu envio. Seu envio agora será revisado antes de ser postado no site.');
DEFINE('_THANK_SUB_PUB','Obrigado pelo seu envio.');
DEFINE('_UP_SIZE','Você não pode enviar arquivos maiores que 15kb.');
DEFINE('_UP_EXISTS','A imagem $userfile_name já existe. Renomeie o arquivo e tente novamente.');
DEFINE('_UP_COPY_FAIL','Falha ao copiar');
DEFINE('_UP_TYPE_WARN','Você só pode enviar uma imagem gif ou jpg.');
DEFINE('_MAIL_SUB','Usuário enviado');
DEFINE('_MAIL_MSG','Olá $adminName,\n\n\nUm usuário enviou $type:\n [ $title ]\n acabou de ser enviado pelo usuário:\n [ $author ]\n'
.' para $mosConfig_live_site.\n\n\n\n'
.'Por favor, vá para $mosConfig_live_site/administrator para visualizar e aprovar este $type.\n\n'
.'Por favor, não responda a esta mensagem, pois ela é gerada automaticamente e é apenas para fins informativos\n');
DEFINE('_PASS_VERR1','Se alterar sua senha, digite-a novamente para verificar.');
DEFINE('_PASS_VERR2','Se alterar sua senha, certifique-se de que a senha e a verificação correspondam.');
DEFINE('_UNAME_INUSE','Este nome de usuário já está em uso.');
DEFINE('_UPDATE','Atualizar');
DEFINE('_USER_DETAILS_SAVE','Suas configurações foram salvas.');
DEFINE('_USER_LOGIN','Login do usuário');

/**componentes/com_user */
DEFINE('_EDIT_TITLE','Edite seus detalhes');
DEFINE('_SEU_NOME','Seu Nome:');
DEFINE('_EMAIL','e-mail:');
DEFINE('_UNAME','Nome de usuário:');
DEFINE('_PASS','Senha:');
DEFINE('_VPASS','Verificar senha:');
DEFINE('_SUBMIT_SUCCESS','Envio com sucesso!');
DEFINE('_SUBMIT_SUCCESS_DESC','Seu item foi enviado com sucesso aos nossos administradores. Ele será revisado antes de ser publicado neste site.');
DEFINE('_WELCOME','Bem vindo!');
DEFINE('_WELCOME_DESC','Bem-vindo à seção Usuário do nosso site');
DEFINE('_CONF_CHECKED_IN','Os itens com check-out agora foram todos verificados');
DEFINE('_CHECK_TABLE','Verificando tabela');
DEFINE('_CHECKED_IN','Check-in');
DEFINE('_CHECKED_IN_ITEMS','itens');
DEFINE('_PASS_MATCH','Senhas não coincidem');

/**componentes/com_banners */
DEFINE('_BNR_CLIENT_NAME','Você deve selecionar um nome para o Cliente.');
DEFINE('_BNR_CONTACT','Você deve selecionar um contato para o Cliente.');
DEFINE('_BNR_VALID_EMAIL','Você deve selecionar um e-mail válido para o Cliente.');
DEFINE('_BNR_CLIENT','Você deve selecionar um Cliente,');
DEFINE('_BNR_NAME','Você deve selecionar um nome para o Banner.');
DEFINE('_BNR_IMAGE','Você deve selecionar uma imagem para o Banner.');
DEFINE('_BNR_URL','Você deve selecionar uma URL/código de banner personalizado para o Banner.');

/**componentes/com_login */
DEFINE('_ALREADY_LOGIN','Você já está logado!');
DEFINE('_LOGOUT','Clique aqui para sair');
DEFINE('_LOGIN_TEXT','Use os campos de login e senha ao lado para obter acesso total');
DEFINE('_LOGIN_SUCCESS','Você fez login com sucesso');
DEFINE('_LOGOUT_SUCCESS','Você saiu com sucesso');
DEFINE('_LOGIN_DESCRIPTION','Para acessar a área privada deste site faça login');
DEFINE('_LOGOUT_DESCRIPTION','Você está atualmente logado na área privada deste site');


/**componentes/com_weblinks */
DEFINE('_WEBLINKS_TITLE','Links');
DEFINE('_WEBLINKS_DESC','Estamos regularmente na web. Quando encontramos um ótimo site, listamos'
.' está aqui para você aproveitar. <br />Na lista abaixo, escolha um dos nossos tópicos de weblinks e selecione uma URL para visitar.');
DEFINE('_HEADER_TITLE_WEBLINKS','Link da Web');
DEFINE('_SECTION','Seção:');
DEFINE('_SUBMIT_LINK','Enviar um link da Web');
DEFINE('_URL','URL:');
DEFINE('_URL_DESC','Descrição:');
DEFINE('_NOME','Nome:');
DEFINE('_WEBLINK_EXIST','Já existe um link da Web com esse nome, tente novamente.');
DEFINE('_WEBLINK_TITLE','Seu link deve conter um título.');

/**componentes/com_newfeeds */
DEFINE('_FEED_NAME','Nome do feed');
DEFINE('_FEED_ARTICLES','# Artigos');
DEFINE('_FEED_LINK','Link do feed');

/** whos_online.php */
DEFINE('_WE_HAVE', 'Temos');
DEFINE('_AND', 'e');
DEFINE('_GUEST_COUNT','%s convidado');
DEFINE('_GUESTS_COUNT','%s convidados');
DEFINE('_MEMBER_COUNT','%s membro');
DEFINE('_MEMBERS_COUNT','%s membros');
DEFINE('_ONLINE','on-line');
DEFINE('_NONE','Nenhum usuário online');

/** módulos/mod_banners */
DEFINE('_BANNER_ALT','Anúncio');

/** módulos/mod_random_image */
DEFINE('_NO_IMAGES','Sem Imagens');

/** módulos/mod_stats.php */
DEFINE('_TIME_STAT','Hora');
DEFINE('_MEMBERS_STAT','Membros');
DEFINE('_HITS_STAT','Acertos');
DEFINE('_NEWS_STAT','Notícias');
DEFINE('_LINKS_STAT','Links');
DEFINE('_VISITORES','Visitantes');

/** /adminstrator/components/com_menus/admin.menus.html.php */
DEFINE('_MAINMENU_HOME','* O 1º item Publicado neste Menu [mainmenu] é a `Home page` padrão do site *');
DEFINE('_MAINMENU_DEL','* Você não pode `deletar` este Menu pois ele é necessário para o bom funcionamento do Joomla! *');
DEFINE('_MENU_GROUP','* Alguns `Tipos de Menu` aparecem em mais de um grupo *');


/** administradores/componentes/com_users */
DEFINE('_NEW_USER_MESSAGE_SUBJECT', 'Detalhes do novo usuário' );
DEFINE('_NEW_USER_MESSAGE', 'Olá %s,


Você foi adicionado como usuário a %s por um administrador.

Este e-mail contém seu nome de usuário e senha para fazer login no %s

Nome de usuário - %s
Senha - %s


Por favor, não responda a esta mensagem, pois ela é gerada automaticamente e é apenas para fins informativos');

/** administradores/componentes/com_massmail */
DEFINE('_MASSMAIL_MESSAGE', "Este é um e-mail de '%s'

Mensagem:
");


/** inclui/pdf.php */
DEFINE('_PDF_GENERATED','Gerado:');
DEFINE('_PDF_POWERED','Desenvolvido por Joomla!');
?>