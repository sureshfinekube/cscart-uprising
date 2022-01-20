<?php /* Smarty version Smarty-3.1.21, created on 2022-01-20 08:57:49
         compiled from "/var/www/html/design/backend/templates/addons/advanced_import/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157502674261e8f9dd92a3f3-54042773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67fdf65ce04d72b0f54128b191687447b07ff1c1' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/advanced_import/hooks/index/scripts.post.tpl',
      1 => 1639041430,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '157502674261e8f9dd92a3f3-54042773',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e8f9dd9353d4_65640796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e8f9dd9353d4_65640796')) {function content_61e8f9dd9353d4_65640796($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/var/www/html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/var/www/html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('advanced_import.cant_save_preset_invalid_modifiers','file_editor'));
?>
<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/func.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/addons/advanced_import/read_more.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function(_, $) {
        _.tr({
            "advanced_import.cant_save_preset_invalid_modifiers":
                "<?php echo strtr($_smarty_tpl->__("advanced_import.cant_save_preset_invalid_modifiers"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
            "file_editor": "<?php echo strtr($_smarty_tpl->__("file_editor"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
"
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
