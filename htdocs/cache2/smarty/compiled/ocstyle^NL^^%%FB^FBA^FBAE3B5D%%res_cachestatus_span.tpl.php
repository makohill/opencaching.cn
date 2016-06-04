<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:43
         compiled from res_cachestatus_span.tpl */ ?>
  <?php if ($this->_tpl_vars['status'] == 1): ?>
    text-decoration: none
<?php elseif ($this->_tpl_vars['status'] == 2): ?>
    text-decoration: line-through
<?php elseif ($this->_tpl_vars['status'] == 3): ?>
    text-decoration: line-through; color: #c00000;
<?php elseif ($this->_tpl_vars['status'] == 6): ?>
    text-decoration: line-through; color: #c00000;
<?php elseif ($this->_tpl_vars['status'] == 7): ?>
    text-decoration: line-through; color: #c00000;
<?php else: ?>
    &nbsp;
<?php endif; ?>