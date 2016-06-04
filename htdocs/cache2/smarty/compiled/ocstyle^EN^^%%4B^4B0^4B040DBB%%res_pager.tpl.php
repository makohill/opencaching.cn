<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_pager.tpl */ ?>
<?php if ($this->_tpl_vars['pages_list']): ?>
    <span class="<?php if (isset ( $this->_tpl_vars['smallnumbers'] ) && $this->_tpl_vars['smallnumbers']): ?>small<?php endif; ?>pager">
    <?php if ($this->_tpl_vars['pages_first_link'] !== null): ?>
        <?php if ($this->_tpl_vars['pages_first_link']): ?>
            <a href="<?php echo $this->_tpl_vars['pages_first_link']; ?>
"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/navigation/16x16-browse-first.png" width="16" height="16" alt="&lt;&lt;" /></a>
        <?php else: ?>
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/navigation/16x16-browse-first-inactive.png" width="16" height="16" alt="&lt;&lt;" />
        <?php endif; ?>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['pages_prev_link']): ?>
        <a href="<?php echo $this->_tpl_vars['pages_prev_link']; ?>
"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/navigation/16x16-browse-prev.png" width="16" height="16" alt="&lt;" /></a>
    <?php else: ?>
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/navigation/16x16-browse-prev-inactive.png" width="16" height="16" alt="&lt;" />
    <?php endif; ?>
    <?php $_from = $this->_tpl_vars['pages_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page'] => $this->_tpl_vars['pagelink']):
?>
        <?php if ($this->_tpl_vars['pagelink']): ?><a class="systemlink" href="<?php echo $this->_tpl_vars['pagelink']; ?>
"><?php echo $this->_tpl_vars['page']; ?>
</a><?php else: ?><b><?php echo $this->_tpl_vars['page']; ?>
</b><?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php if ($this->_tpl_vars['pages_next_link']): ?>
        <a href="<?php echo $this->_tpl_vars['pages_next_link']; ?>
"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/navigation/16x16-browse-next.png" width="16" height="16" alt="&gt;" /></a>
    <?php else: ?>
        <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/navigation/16x16-browse-next-inactive.png" width="16" height="16" alt="&lt;" />
    <?php endif; ?>
    <?php if ($this->_tpl_vars['pages_last_link'] !== null): ?>
        <?php if ($this->_tpl_vars['pages_last_link']): ?>
            <a href="<?php echo $this->_tpl_vars['pages_last_link']; ?>
"><img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/navigation/16x16-browse-last.png" width="16" height="16" alt="&gt;&gt;" /></a>
        <?php else: ?>
            <img src="resource2/<?php echo $this->_tpl_vars['opt']['template']['style']; ?>
/images/navigation/16x16-browse-last-inactive.png" width="16" height="16" alt="&gt;&gt;" />
        <?php endif; ?>
    <?php endif; ?>
    </span>
<?php endif; ?>