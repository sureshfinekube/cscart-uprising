<?php /* Smarty version Smarty-3.1.21, created on 2022-01-20 08:57:48
         compiled from "/var/www/html/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75952587361e8f9dce363f8-89757259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebf12b22a5527d3951f0d2e9edc8931d8ab4945f' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_reviews/hooks/index/actions.pre.tpl',
      1 => 1639041430,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '75952587361e8f9dce363f8-89757259',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e8f9dce42dc8_32646222',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e8f9dce42dc8_32646222')) {function content_61e8f9dce42dc8_32646222($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/html/app/functions/smarty_plugins/modifier.enum.php';
?>


<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['controller']==='reviews'&&($_smarty_tpl->tpl_vars['runtime']->value['mode']==='manage'&&$_smarty_tpl->tpl_vars['addons']->value['product_reviews']['split_reviews_by_storefronts']!==smarty_modifier_enum("YesNo::YES")||$_smarty_tpl->tpl_vars['runtime']->value['mode']==='update')) {?>
    <?php $_smarty_tpl->tpl_vars['select_storefront'] = new Smarty_variable(false, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['select_storefront'] = clone $_smarty_tpl->tpl_vars['select_storefront'];?>
<?php }?>
<?php }} ?>
