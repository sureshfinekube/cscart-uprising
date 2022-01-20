<?php /* Smarty version Smarty-3.1.21, created on 2022-01-20 08:57:49
         compiled from "/var/www/html/design/backend/templates/addons/product_bundles/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162615433461e8f9dd97bc14-35832907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c4bd845721a6ef531f78df1dd47430d5a1f3799' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/product_bundles/hooks/index/scripts.post.tpl',
      1 => 1639041430,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '162615433461e8f9dd97bc14-35832907',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e8f9dd985dc5_39700356',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e8f9dd985dc5_39700356')) {function content_61e8f9dd985dc5_39700356($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/var/www/html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('options','any_option_combinations','product_bundles.any_variation'));
?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            options: '<?php echo strtr($_smarty_tpl->__("options"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            any_option_combinations: '<?php echo strtr($_smarty_tpl->__("any_option_combinations"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            product_bundles_any_variation: '<?php echo strtr($_smarty_tpl->__("product_bundles.any_variation"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>
