<?php /* Smarty version Smarty-3.1.21, created on 2022-01-20 08:57:48
         compiled from "/var/www/html/design/backend/templates/common/icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94513922961e8f9dce6c825-32498762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '427daff9700136e4b22ec8193f73bbcc34a5067f' => 
    array (
      0 => '/var/www/html/design/backend/templates/common/icon.tpl',
      1 => 1639041430,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94513922961e8f9dce6c825-32498762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'class' => 0,
    'id' => 0,
    'title' => 0,
    'data' => 0,
    'data_value' => 0,
    'data_name' => 0,
    'icon_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e8f9dce7abb0_12026941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e8f9dce7abb0_12026941')) {function content_61e8f9dce7abb0_12026941($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['class']->value) {?><span 
        class="cs-icon <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>
            id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>

        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
            title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <?php  $_smarty_tpl->tpl_vars['data_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data_value']->_loop = false;
 $_smarty_tpl->tpl_vars['data_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data_value']->key => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->_loop = true;
 $_smarty_tpl->tpl_vars['data_name']->value = $_smarty_tpl->tpl_vars['data_value']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['data_value']->value) {?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            <?php } ?>
        <?php }?>
    ><?php if ($_smarty_tpl->tpl_vars['icon_text']->value) {
echo $_smarty_tpl->tpl_vars['icon_text']->value;
}?></span><?php }?><?php }} ?>
