<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:46
         compiled from sys_main.tpl */

$this->_cache_serials['/var/www/html/bin/../htdocs/cache2/smarty/compiled//ocstyle^DE^^%%0A^0A0^0A0360A0%%sys_main.tpl.inc'] = 'f2cd0e76da151da05a427ac8706d68b8';

?><?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'sys_main.tpl', 14, false),array('modifier', 'escapejs', 'sys_main.tpl', 51, false),array('modifier', 'sprintf', 'sys_main.tpl', 300, false),array('modifier', 'date_format', 'sys_main.tpl', 311, false),array('function', 'season', 'sys_main.tpl', 46, false),array('block', 'nocache', 'sys_main.tpl', 136, false),)), $this); ?>
<?php
function _smarty_tplfunc_f2cd0e76da151da05a427ac8706d68b8_0(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                &nbsp;
                                <?php if ($_smarty->_tpl_vars['login']['userid'] == 0): ?>
                                    <b><form action="<?php echo $_smarty->_tpl_vars['opt']['page']['login_url']; ?>
" method="post" enctype="application/x-www-form-urlencoded" name="login" dir="ltr" style="display: inline;">Benutzer:&nbsp;&nbsp;<input name="email" size="10" type="text" class="textboxes" value="" />&nbsp;&nbsp;&nbsp;Passwort:&nbsp;&nbsp;<input name="password" size="10" type="password" class="textboxes" value="" />&nbsp;<input type="hidden" name="action" value="login" /><input type="hidden" name="target" value="<?php echo ((is_array($_tmp=$_smarty->_tpl_vars['opt']['page']['target'])) ? $_smarty->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /><input type="hidden" name="source" value="titlebar" />&nbsp;<input name="LogMeIn" value="Anmelden" class="formbutton" style="width: 74px;" type="submit" onclick="submitbutton('LogMeIn')" /></form></b>
                                <?php else: ?>                                      <b>Eingeloggt als <a href="myhome.php" class="testing-top-left-corner-username"><?php echo ((is_array($_tmp=$_smarty->_tpl_vars['login']['username'])) ? $_smarty->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a></b> - <a href="login.php?action=logout">Abmelden</a>
                                <?php endif; ?>
                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_f2cd0e76da151da05a427ac8706d68b8_1(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <?php $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => "sys_topmenu.tpl", 'smarty_include_vars' => array('items' => ($_smarty->_tpl_vars['topmenu']))));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_f2cd0e76da151da05a427ac8706d68b8_2(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                        <?php $_smarty_tpl_vars = $_smarty->_tpl_vars;
$_smarty->_smarty_include(array('smarty_include_tpl_file' => "sys_submenu.tpl", 'smarty_include_vars' => array('items' => ($_smarty->_tpl_vars['submenu']))));
$_smarty->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}


function _smarty_tplfunc_f2cd0e76da151da05a427ac8706d68b8_3(&$_smarty)
{
$_smarty->_tag_stack[] = array('nocache', array()); $_block_repeat=true;smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], null, $_smarty, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
                                Seitenberechnung: <?php echo ((is_array($_tmp=$_smarty->_tpl_vars['sys_runtime'])) ? $_smarty->_run_mod_handler('sprintf', true, $_tmp, "%1.3f") : smarty_modifier_sprintf($_tmp, "%1.3f")); ?>
 sek<br />
                                <?php if (( $_smarty->_tpl_vars['opt']['template']['caching'] == true )): ?>
                                    Zwischengespeichert: <?php if ($_smarty->_tpl_vars['sys_cached'] == true): ?>Ja<?php else: ?>Nein<?php endif; ?><br />
                                <?php endif; ?>
                                                            <?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_nocache($_smarty->_tag_stack[count($_smarty->_tag_stack)-1][1], $_block_content, $_smarty, $_block_repeat); }  array_pop($_smarty->_tag_stack); 
}



?>
