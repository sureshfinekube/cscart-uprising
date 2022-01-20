<?php /* Smarty version Smarty-3.1.21, created on 2022-01-20 08:57:47
         compiled from "/var/www/html/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150459996261e8f9dbdca836-07166218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86e9811568ee2f7b2316ca185031f9235d8bb708' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/help_center/hooks/index/styles.post.tpl',
      1 => 1639041430,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '150459996261e8f9dbdca836-07166218',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e8f9dbdcf879_53240951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e8f9dbdcf879_53240951')) {function content_61e8f9dbdcf879_53240951($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/var/www/html/app/functions/smarty_plugins/function.style.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <?php echo smarty_function_style(array('src'=>"addons/help_center/styles.less"),$_smarty_tpl);?>

<?php }?>
<?php }} ?>
