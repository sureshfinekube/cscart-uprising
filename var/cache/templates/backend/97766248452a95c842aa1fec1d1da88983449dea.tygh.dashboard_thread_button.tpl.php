<?php /* Smarty version Smarty-3.1.21, created on 2022-01-20 08:57:51
         compiled from "/var/www/html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/dashboard_thread_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98437127161e8f9dfab9532-28528829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97766248452a95c842aa1fec1d1da88983449dea' => 
    array (
      0 => '/var/www/html/design/backend/templates/addons/vendor_communication/views/vendor_communication/components/dashboard_thread_button.tpl',
      1 => 1639041430,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '98437127161e8f9dfab9532-28528829',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'communication_type' => 0,
    'runtime' => 0,
    'allow_manage' => 0,
    'allow_new_thread' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_61e8f9dfaceee9_18359887',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e8f9dfaceee9_18359887')) {function content_61e8f9dfaceee9_18359887($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/var/www/html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.communication'));
?>
<?php $_smarty_tpl->tpl_vars['communication_type'] = new Smarty_variable(smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_ADMIN"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_manage'] = new Smarty_variable(fn_check_permissions("vendor_communication","create_thread","admin","GET",array("communication_type"=>$_smarty_tpl->tpl_vars['communication_type']->value)), null, 0);?>
<?php $_smarty_tpl->tpl_vars['allow_new_thread'] = new Smarty_variable(fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value), null, 0);?>

<?php if (fn_allowed_for("MULTIVENDOR")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&$_smarty_tpl->tpl_vars['allow_manage']->value&&$_smarty_tpl->tpl_vars['allow_new_thread']->value) {?>
    <div class="dashboard-card dashboard-card--contact_admin">
        <div class="dashboard-card-title"><?php echo $_smarty_tpl->__("vendor_communication.communication");?>
</div>
        <div class="dashboard-card-content">
            <div class="control-group shift-top">
                <h3>
                    <?php echo $_smarty_tpl->getSubTemplate ("addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"btn btn-primary cm-dialog-opener cm-dialog-auto-size"), 0);?>

                </h3>
            </div>
        </div>
    </div>
<?php }?><?php }} ?>
