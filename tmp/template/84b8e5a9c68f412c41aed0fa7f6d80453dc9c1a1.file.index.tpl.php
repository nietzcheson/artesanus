<?php /* Smarty version Smarty-3.1.18, created on 2014-06-03 19:47:24
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/Repositorios/artesanus/views/acl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213844610538e0a2cc73fd4-61516232%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84b8e5a9c68f412c41aed0fa7f6d80453dc9c1a1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/Repositorios/artesanus/views/acl/index.tpl',
      1 => 1398986120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213844610538e0a2cc73fd4-61516232',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538e0a2cd4f6f6_65936346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538e0a2cd4f6f6_65936346')) {function content_538e0a2cd4f6f6_65936346($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <!--<p>Un texto acá</p>
  <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>-->
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/roles">Roles</a>
  <a class="btn btn-success"href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
acl/permisos">Permisos</a>
</div><?php }} ?>
