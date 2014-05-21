<?php /* Smarty version Smarty-3.1.18, created on 2014-05-22 00:15:08
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Repositorios/artesanus/views/ajax/post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1748727336537d167d9ce2b4-29177413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bb37f740752d7fe327da3d44ed9a6d0cb072057' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Repositorios/artesanus/views/ajax/post.tpl',
      1 => 1400710500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1748727336537d167d9ce2b4-29177413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537d167d9f5cf4_92665131',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537d167d9f5cf4_92665131')) {function content_537d167d9f5cf4_92665131($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
</div>

<div class="bloque">
  <button class="btn btn-default" id="enviar">Datos</button>
  <div id="mostrar">Mostrar acá</div>
</div>
<?php }} ?>
