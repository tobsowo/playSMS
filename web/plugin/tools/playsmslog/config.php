<?php if(!(defined('_SECURE_'))){die('Intruder alert');}; ?>
<?php
if (isadmin()) {
	$menutab_tools = $core_config['menu']['main_tab']['tools'];
	$arr_menu[$menutab_tools][] = array("index.php?app=menu&inc=tools_playsmslog&op=playsmslog_list", _('View log'));
}
?>