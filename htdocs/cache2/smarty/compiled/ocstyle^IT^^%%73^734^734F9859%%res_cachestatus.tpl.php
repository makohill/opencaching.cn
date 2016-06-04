<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_cachestatus.tpl */ ?>
 <?php if ($this->_tpl_vars['status'] == 1): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-go.png" alt="disponibile" title="disponibile" />
<?php elseif ($this->_tpl_vars['status'] == 2): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-stop.png" alt="temporaneamente non disponibile" title="temporaneamente non disponibile" />
<?php elseif ($this->_tpl_vars['status'] == 3): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-trash.png" alt="archiviata" title="archiviata" />
<?php elseif ($this->_tpl_vars['status'] == 4): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="al test di approvazione" title="al test di approvazione" />
<?php elseif ($this->_tpl_vars['status'] == 5): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="non ancora pubblicata" title="non ancora pubblicata" />
<?php elseif ($this->_tpl_vars['status'] == 6): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked.png" alt="chiusa, visibile" title="chiusa, visibile" />
<?php elseif ($this->_tpl_vars['status'] == 7): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked-invisible.png" alt="chiusa, invisibile" title="chiusa, invisibile" />
<?php else: ?>
    &nbsp;
<?php endif; ?>