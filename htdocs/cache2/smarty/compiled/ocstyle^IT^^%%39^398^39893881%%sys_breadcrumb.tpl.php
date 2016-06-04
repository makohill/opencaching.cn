<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:46
         compiled from sys_breadcrumb.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'sys_breadcrumb.tpl', 10, false),)), $this); ?>
<?php echo ''; ?><?php $_from = $this->_tpl_vars['breadcrumb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['breadcrumb'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['breadcrumb']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menuitem']):
        $this->_foreach['breadcrumb']['iteration']++;
?><?php echo ''; ?><?php if (! ($this->_foreach['breadcrumb']['iteration'] <= 1)): ?><?php echo '&nbsp;&gt;&nbsp;'; ?><?php endif; ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['menuitem']['menustring'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>
