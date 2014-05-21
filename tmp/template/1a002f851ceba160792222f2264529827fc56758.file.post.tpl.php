<?php /* Smarty version Smarty-3.1.18, created on 2014-05-21 22:37:09
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/ajax/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:459469324537d09d396f507-73573483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a002f851ceba160792222f2264529827fc56758' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/ajax/post.tpl',
      1 => 1400704603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '459469324537d09d396f507-73573483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537d09d39dbae0_56205246',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d09d39dbae0_56205246')) {function content_537d09d39dbae0_56205246($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
</div>


<div class="bloque">
  <button class="btn btn-default" id="btn">Datos</button>
  <div id="mostrar"></div>
</div>
<?php }} ?>
