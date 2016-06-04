<?php /* Smarty version 2.6.29, created on 2016-06-04 03:32:44
         compiled from res_logpictures.tpl */ ?>

<?php if ($this->_tpl_vars['pages_list']): ?>
    <div class="content2-container">
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td><font size="2"><?php echo $this->_tpl_vars['subtitle']; ?>
</font></td>
                <td class="picpaging"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_pager.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td>
            </tr>
        </table>
    </div>
<?php elseif (($this->_tpl_vars['subtitle']) != ""): ?>
    <p><?php echo $this->_tpl_vars['subtitle']; ?>
</p>
<?php endif; ?>

<?php $this->assign('itemwidth', 120); ?>

<div style="padding-right:14px; clear:both">
    <table width="100%">
        <tr>
            <?php $this->assign('piccount', 0); ?>
            <?php $this->assign('lines', 0); ?>
            <?php $_from = $this->_tpl_vars['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['picture']):
?>
                <?php if ($this->_tpl_vars['piccount'] == 6): ?>
                    </tr><tr>
                    <?php $this->assign('piccount', 0); ?>
                    <?php $this->assign('lines', $this->_tpl_vars['lines']+1); ?>
                <?php endif; ?>
                <?php if (! $this->_tpl_vars['maxlines'] || $this->_tpl_vars['lines'] < $this->_tpl_vars['maxlines']): ?>
                    <td>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "res_logpicture.tpl", 'smarty_include_vars' => array('picture' => $this->_tpl_vars['picture'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    </td>
                    <?php $this->assign('piccount', $this->_tpl_vars['piccount']+1); ?>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
                        <?php if ($this->_tpl_vars['piccount'] < 6): ?><td width="<?php echo $this->_tpl_vars['itemwidth']; ?>
px"></td><?php endif; ?>
            <?php if ($this->_tpl_vars['piccount'] < 5): ?><td width="<?php echo $this->_tpl_vars['itemwidth']; ?>
px"></td><?php endif; ?>
            <?php if ($this->_tpl_vars['piccount'] < 4): ?><td width="<?php echo $this->_tpl_vars['itemwidth']; ?>
px"></td><?php endif; ?>
            <?php if ($this->_tpl_vars['piccount'] < 3): ?><td width="<?php echo $this->_tpl_vars['itemwidth']; ?>
px"></td><?php endif; ?>
            <?php if ($this->_tpl_vars['piccount'] < 2): ?><td width="<?php echo $this->_tpl_vars['itemwidth']; ?>
px"></td><?php endif; ?>
        </tr>
    </table>
    <div style="height:8px"></div>
</div>