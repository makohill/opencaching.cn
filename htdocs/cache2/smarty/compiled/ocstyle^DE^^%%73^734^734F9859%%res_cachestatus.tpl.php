<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_cachestatus.tpl */ ?>
 <?php if ($this->_tpl_vars['status'] == 1): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-go.png" alt="kann gesucht werden" title="kann gesucht werden" />
<?php elseif ($this->_tpl_vars['status'] == 2): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-stop.png" alt="momentan nicht verfügbar" title="momentan nicht verfügbar" />
<?php elseif ($this->_tpl_vars['status'] == 3): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-trash.png" alt="archiviert" title="archiviert" />
<?php elseif ($this->_tpl_vars['status'] == 4): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="von den Approvern entfernt, um geprüft zu werden" title="von den Approvern entfernt, um geprüft zu werden" />
<?php elseif ($this->_tpl_vars['status'] == 5): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="noch nicht veröffentlicht" title="noch nicht veröffentlicht" />
<?php elseif ($this->_tpl_vars['status'] == 6): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked.png" alt="gesperrt" title="gesperrt" />
<?php elseif ($this->_tpl_vars['status'] == 7): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked-invisible.png" alt="gesperrt, versteckt" title="gesperrt, versteckt" />
<?php else: ?>
    &nbsp;
<?php endif; ?>