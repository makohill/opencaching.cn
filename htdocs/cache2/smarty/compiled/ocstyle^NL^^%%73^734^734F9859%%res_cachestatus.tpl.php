<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_cachestatus.tpl */ ?>
 <?php if ($this->_tpl_vars['status'] == 1): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-go.png" alt="Beschikbaar" title="Beschikbaar" />
<?php elseif ($this->_tpl_vars['status'] == 2): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-stop.png" alt="Tijdelijk niet beschikbaar" title="Tijdelijk niet beschikbaar" />
<?php elseif ($this->_tpl_vars['status'] == 3): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-trash.png" alt="Gearchiveerd" title="Gearchiveerd" />
<?php elseif ($this->_tpl_vars['status'] == 4): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="Verborgen door approvers, om gecontroleerd te worden" title="Verborgen door approvers, om gecontroleerd te worden" />
<?php elseif ($this->_tpl_vars['status'] == 5): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-wait.png" alt="Nog niet beschikbaar" title="Nog niet beschikbaar" />
<?php elseif ($this->_tpl_vars['status'] == 6): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked.png" alt="geblokkeerd, zichtbaar" title="geblokkeerd, zichtbaar" />
<?php elseif ($this->_tpl_vars['status'] == 7): ?>
    <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/cachestatus/16x16-locked-invisible.png" alt="geblokkerd, nietzichtbaar" title="geblokkerd, nietzichtbaar" />
<?php else: ?>
    &nbsp;
<?php endif; ?>