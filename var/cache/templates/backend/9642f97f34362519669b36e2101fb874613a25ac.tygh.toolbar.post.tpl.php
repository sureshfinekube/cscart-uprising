<?php /* Smarty version Smarty-3.1.21, created on 2022-01-20 08:57:49
         compiled from "/var/www/html/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166574870261e8f9dd14e6b6-37980020%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9642f97f34362519669b36e2101fb874613a25ac' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/help_center/hooks/index/toolbar.post.tpl',
      1 => 1639041430,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '166574870261e8f9dd14e6b6-37980020',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e8f9dd154700_00074667',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e8f9dd154700_00074667')) {function content_61e8f9dd154700_00074667($_smarty_tpl) {?><?php if (!is_callable('smarty_function_include_ext')) include '/var/www/html/app/functions/smarty_plugins/function.include_ext.php';
?><?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null)==="admin") {?>
    <div class="help-center__toolbar help-center__toolbar--hidden">
        <a class="btn help-center__show-help-center" href="#">
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-question-sign help-center__show-help-center--icon"),$_smarty_tpl);?>

        </a>
    </div>
<?php }?>
<?php }} ?>
