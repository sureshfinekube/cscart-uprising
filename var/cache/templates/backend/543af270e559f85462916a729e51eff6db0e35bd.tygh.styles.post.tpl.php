<?php /* Smarty version Smarty-3.1.21, created on 2022-01-20 08:57:47
         compiled from "/var/www/html/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:79328575361e8f9dbde85f4-03968952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '543af270e559f85462916a729e51eff6db0e35bd' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/store_locator/hooks/index/styles.post.tpl',
      1 => 1639041430,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '79328575361e8f9dbde85f4-03968952',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'store_locator_shipping' => 0,
    'shipping' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e8f9dbdee528_79404449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e8f9dbdee528_79404449')) {function content_61e8f9dbdee528_79404449($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/html/app/functions/smarty_plugins/function.style.php';
?><?php if ($_smarty_tpl->tpl_vars['store_locator_shipping']->value&&$_smarty_tpl->tpl_vars['shipping']->value['company_id']==0) {?>
    <?php echo smarty_function_style(array('src'=>"addons/store_locator/styles.less"),$_smarty_tpl);?>

<?php }?><?php }} ?>
