<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:47
         compiled from sys_submenu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'sys_submenu.tpl', 12, false),)), $this); ?>
 <?php echo ''; ?><?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['submenu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['submenu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menuitem']):
        $this->_foreach['submenu']['iteration']++;
?><?php echo ''; ?><?php if ($this->_tpl_vars['menuitem']['href'] == ''): ?><?php echo ''; ?><?php echo '<li style="background-color:white; line-height:1.1em">&nbsp;</li><li class="title secondtitle">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['menuitem']['menustring'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</li>'; ?><?php else: ?><?php echo ''; ?><?php echo '<li class="group'; ?><?php echo $this->_tpl_vars['menuitem']['sublevel']; ?><?php echo ''; ?><?php if ($this->_tpl_vars['menuitem']['selected']): ?><?php echo ' group_active'; ?><?php endif; ?><?php echo '"><a href="'; ?><?php echo $this->_tpl_vars['menuitem']['href']; ?><?php echo '" '; ?><?php echo $this->_tpl_vars['menuitem']['target']; ?><?php echo '>'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['menuitem']['menustring'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</a></li>'; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>
