<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 22:15:59
         compiled from "/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/usuarios/permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15910957025363fcffda86c6-19172047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fd078f116e6eaa7d18bf9a7b8a2829e913eefb2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/artesanus/views/usuarios/permisos.tpl',
      1 => 1399061116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15910957025363fcffda86c6-19172047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titulo' => 0,
    'datos' => 0,
    'permisos' => 0,
    'permiso' => 0,
    'role' => 0,
    'usuario' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5363fcffe02278_86883577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5363fcffe02278_86883577')) {function content_5363fcffe02278_86883577($_smarty_tpl) {?><div class="jumbotron">
  <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
  <small>Usuario: <?php echo $_smarty_tpl->tpl_vars['datos']->value['usuario'];?>
 | Role: <?php echo $_smarty_tpl->tpl_vars['datos']->value['role'];?>
</small>
</div>

<div class="bloque">
  <form method="POST" action="" name="usuario">
    <input type="hidden" name="guardar" value="1"/>
    <?php if (isset($_smarty_tpl->tpl_vars['permisos']->value)&&count($_smarty_tpl->tpl_vars['permisos']->value)) {?>
    <table class="table table-bordered">
          <thead>
            <tr>
                <th>Permiso</th>
                <th class="text-center">Permiso</th>
            </tr>
          </thead>
          <tbody>
            <?php  $_smarty_tpl->tpl_vars['permiso'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['permiso']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['permisos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['permiso']->key => $_smarty_tpl->tpl_vars['permiso']->value) {
$_smarty_tpl->tpl_vars['permiso']->_loop = true;
?>
              <?php if ($_smarty_tpl->tpl_vars['role']->value[$_smarty_tpl->tpl_vars['permiso']->value]['valor']==1) {?>
                <?php $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("habilitado", null, 0);?>
              <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["v"] = new Smarty_variable("denegado", null, 0);?>
              <?php }?>
            <tr >
                <td><?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['permiso'];?>
</td>
                <td class="text-center">
                  <select name="perm_<?php echo $_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['id'];?>
">
                    <option value="x" <?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['heredado']) {?>selected='selected'<?php }?>>Heredado (<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
)</option>
                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['valor']==1&&$_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['heredado']=='') {?>selected='selected'<?php }?>>Habilitado</option>
                    <option value="" <?php if ($_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['valor']==''&&$_smarty_tpl->tpl_vars['usuario']->value[$_smarty_tpl->tpl_vars['permiso']->value]['heredado']=='') {?>selected='selected'<?php }?>>Denegado</option>
                  </select>
                </td>
            </tr>
            <?php } ?>
          </tbody>
      </table>
    <?php }?>

    <input class="btn btn-success" type="submit" value="Guardar"/>

  </form>

</div><?php }} ?>
