<?php /* Smarty version Smarty-3.1.18, created on 2014-05-21 23:01:18
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Repositorios/artesanus/views/ajax/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1655677164537d141ec0bac4-24715146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89dc92f5a9bad130d006ed85a13fa73e50c34ecf' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Repositorios/artesanus/views/ajax/index.tpl',
      1 => 1398551218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1655677164537d141ec0bac4-24715146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'paises' => 0,
    'pais' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537d141ec2d519_53543985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d141ec2d519_53543985')) {function content_537d141ec2d519_53543985($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
</div>

<div class="bloque">
	<form>
		<fieldset>
			<div class="form-group">
			    <label for="titulo">País:</label>
			    <select id="pais" class="form-control">
			    	<option value=""> - Seleccione - </option>
			    	<?php  $_smarty_tpl->tpl_vars['pais'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pais']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paises']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pais']->key => $_smarty_tpl->tpl_vars['pais']->value) {
$_smarty_tpl->tpl_vars['pais']->_loop = true;
?>
			    		<option value="<?php echo $_smarty_tpl->tpl_vars['pais']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pais']->value['pais'];?>
</option>
			    	<?php } ?>
			    </select>
			 </div>
			 <div class="form-group">
			    <label for="pass">Ciudad:</label>
			   <select id="ciudad" class="form-control">
			    	
			    </select>
			 </div>
			 <div class="form-group">
			   <label for="pass">Insertar ciudad:</label>
			   <input type="text" id="ins_ciudad" class="form-control" placeholder="Contraseña" name="ciudad" />
			   <br>
			   <button type="button" class="btn btn-default" id="insertar">Insertar</button>
			 </div>
		</fieldset>		
	</form>

</div><?php }} ?>
