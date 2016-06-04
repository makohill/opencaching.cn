<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_cachestatus.tpl */ ?>
 <?php if ($this->_tpl_vars['status'] == 1): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-go.png" alt="Available" title="Available" />
<?php elseif ($this->_tpl_vars['status'] == 2): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-stop.png" alt="Temporarily not available" title="Temporarily not available" />
<?php elseif ($this->_tpl_vars['status'] == 3): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-trash.png" alt="Archived" title="Archived" />
<?php elseif ($this->_tpl_vars['status'] == 4): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="Hidden by approvers to check" title="Hidden by approvers to check" />
<?php elseif ($this->_tpl_vars['status'] == 5): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="Not yet published" title="Not yet published" />
<?php elseif ($this->_tpl_vars['status'] == 6): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked.png" alt="Locked, visible" title="Locked, visible" />
<?php elseif ($this->_tpl_vars['status'] == 7): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked-invisible.png" alt="Locked, invisible" title="Locked, invisible" />
<?php else: ?>
    &nbsp;
<?php endif; ?>