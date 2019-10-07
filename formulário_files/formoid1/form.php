<?php

define('EMAIL_FOR_REPORTS', '201912019@eniac.edu.br');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Sua mensagem foi envia com sucesso!
Retornaremos o mais breve possivél!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-red.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-solid-red.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-solid-red" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:480px;min-width:150px" method="post"><div class="title"><h2>ENTRE EM CONTATO</h2></div>
	<div class="element-name<?php frmd_add_class("name"); ?>" title="Digite seu Nome/Sobrenome"><label class="title"><span class="required">*</span></label><span class="nameFirst"><input placeholder=" Nome" type="text" size="8" name="name[first]" required="required"/><span class="icon-place"></span></span><span class="nameLast"><input placeholder=" Sobrenome" type="text" size="14" name="name[last]" required="required"/><span class="icon-place"></span></span></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Digite seu Endereço"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="large" type="text" name="input" required="required" placeholder="Endereço:*"/><span class="icon-place"></span></div></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>" title="Número/Complemento"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="text" name="input1" required="required" placeholder="Número/Complemento:*"/><span class="icon-place"></span></div></div>
	<div class="element-phone<?php frmd_add_class("phone"); ?>" title="Digite seu Telefone/Celular"><label class="title"><span class="required">*</span></label><div class="item-cont"><input class="medium" type="tel" pattern="[+]?[\.\s\-\(\)\*\#0-9]{3,}" maxlength="24" name="phone" required="required" placeholder="Telefone/Celular:*" value=""/><span class="icon-place"></span></div></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title"></label><div class="item-cont"><div class="medium"><span><select name="select" >

		<option value="Marca..">Marca..</option>
		<option value="LG">LG</option>
		<option value="Samsung">Samsung</option>
		<option value="Sony">Sony</option>
		<option value="Phillips">Phillips</option>
		<option value="Panasonic">Panasonic</option>
		<option value="Outro">Outro</option></select><i></i><span class="icon-place"></span></span></div></div></div>
	<div class="element-input<?php frmd_add_class("input2"); ?>" title="Nome/Modelo/Produto"><label class="title"></label><div class="item-cont"><input class="medium" type="text" name="input2" placeholder="Nome/Modelo/Produto"/><span class="icon-place"></span></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>"><label class="title">Defeito:</label>		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Não liga"/ ><span>Não liga</span></label><label><input type="checkbox" name="checkbox[]" value="Tela quebrada"/ ><span>Tela quebrada</span></label><label><input type="checkbox" name="checkbox[]" value="Sem som"/ ><span>Sem som</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Sem imagem"/ ><span>Sem imagem</span></label><label><input type="checkbox" name="checkbox[]" value="Liga e Desliga"/ ><span>Liga e Desliga</span></label><label><input type="checkbox" name="checkbox[]" value="Outro"/ ><span>Outro</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>" title="Digite a sua Mensagem"><label class="title"></label><div class="item-cont"><textarea class="small" name="textarea" cols="20" rows="5" placeholder="Mesagem:"></textarea><span class="icon-place"></span></div></div>
<div class="submit"><input type="submit" value="Enviar"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-solid-red.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>