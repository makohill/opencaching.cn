<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_cachestatus.tpl */ ?>
 <?php if ($this->_tpl_vars['status'] == 1): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-go.png" alt="disponible" title="disponible" />
<?php elseif ($this->_tpl_vars['status'] == 2): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-stop.png" alt="temporalmente no disponible" title="temporalmente no disponible" />
<?php elseif ($this->_tpl_vars['status'] == 3): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-trash.png" alt="archivado" title="archivado" />
<?php elseif ($this->_tpl_vars['status'] == 4): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="en prueba de aceptación" title="en prueba de aceptación" />
<?php elseif ($this->_tpl_vars['status'] == 5): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="pendiente de publicación" title="pendiente de publicación" />
<?php elseif ($this->_tpl_vars['status'] == 6): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked.png" alt="cerrado, visible" title="cerrado, visible" />
<?php elseif ($this->_tpl_vars['status'] == 7): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked-invisible.png" alt="cerrado, invisible" title="cerrado, invisible" />
<?php else: ?>
    &nbsp;
<?php endif; ?>